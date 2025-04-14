<?php
/**
 * This file contains classes implementing security manager feature.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link https://www.yiiframework.com/
 * @copyright 2008-2013 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

/**
 * CSecurityManager provides private keys, hashing and encryption functions.
 *
 * CSecurityManager is used by Yii components and applications for security-related purpose.
 * For example, it is used in cookie validation feature to prevent cookie data
 * from being tampered.
 *
 * CSecurityManager is mainly used to protect data from being tampered and viewed.
 * It can generate HMAC.
 *
 * To protect data with HMAC, call {@link hashData()}; and to check if the data
 * is tampered, call {@link validateData()}, which will return the real data if
 * it is not tampered. The algorithm used to generated HMAC is specified by
 * {@link validation}.
 *
 * CSecurityManager is a core application component that can be accessed via
 * {@link CApplication::getSecurityManager()}.
 *
 * @property string $validationKey The private key used to generate HMAC.
 * If the key is not explicitly set, a random one is generated and returned.
 * @property string $validation
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @package system.base
 * @since 1.0
 */
class CSecurityManager extends CApplicationComponent
{
	const STATE_VALIDATION_KEY='Yii.CSecurityManager.validationkey';
	const STATE_ENCRYPTION_KEY='Yii.CSecurityManager.encryptionkey';

	/**
	 * @var array known minimum lengths per encryption algorithm
	 */
	protected static $encryptionKeyMinimumLengths=array(
		'blowfish'=>4,
		'arcfour'=>5,
		'rc2'=>5,
	);

	/**
	 * @var boolean if encryption key should be validated
	 * @deprecated
	 */
	public $validateEncryptionKey=true;

	/**
	 * @var string the name of the hashing algorithm to be used by {@link computeHMAC}.
	 * See {@link https://php.net/manual/en/function.hash-algos.php hash-algos} for the list of possible
	 * hash algorithms. Note that if you are using PHP 5.1.1 or below, you can only use 'sha1' or 'md5'.
	 *
	 * Defaults to 'sha1', meaning using SHA1 hash algorithm.
	 * @since 1.1.3
	 */
	public $hashAlgorithm='sha1';

	private $_validationKey;
	private $_mbstring;


	public function init()
	{
		parent::init();
		$this->_mbstring=extension_loaded('mbstring');
	}

	/**
	 * @return string a randomly generated private key.
	 * @deprecated in favor of {@link generateRandomString()} since 1.1.14. Never use this method.
	 */
	protected function generateRandomKey()
	{
		return $this->generateRandomString(32);
	}

	/**
	 * @return string the private key used to generate HMAC.
	 * If the key is not explicitly set, a random one is generated and returned.
	 * @throws CException in case random string cannot be generated.
	 */
	public function getValidationKey()
	{
		if($this->_validationKey!==null)
			return $this->_validationKey;
		else
		{
			if(($key=Yii::app()->getGlobalState(self::STATE_VALIDATION_KEY))!==null)
				$this->setValidationKey($key);
			else
			{
				if(($key=$this->generateRandomString(32,true))===false)
					if(($key=$this->generateRandomString(32,false))===false)
						throw new CException(Yii::t('yii',
							'CSecurityManager::generateRandomString() cannot generate random string in the current environment.'));
				$this->setValidationKey($key);
				Yii::app()->setGlobalState(self::STATE_VALIDATION_KEY,$key);
			}
			return $this->_validationKey;
		}
	}

	/**
	 * @param string $value the key used to generate HMAC
	 * @throws CException if the key is empty
	 */
	public function setValidationKey($value)
	{
		if(!empty($value))
			$this->_validationKey=$value;
		else
			throw new CException(Yii::t('yii','CSecurityManager.validationKey cannot be empty.'));
	}

	/**
	 * This method has been deprecated since version 1.1.3.
	 * Please use {@link hashAlgorithm} instead.
	 * @return string -
	 * @deprecated
	 */
	public function getValidation()
	{
		return $this->hashAlgorithm;
	}

	/**
	 * This method has been deprecated since version 1.1.3.
	 * Please use {@link hashAlgorithm} instead.
	 * @param string $value -
	 * @deprecated
	 */
	public function setValidation($value)
	{
		$this->hashAlgorithm=$value;
	}

	/**
	 * Prefixes data with an HMAC.
	 * @param string $data data to be hashed.
	 * @param string $key the private key to be used for generating HMAC. Defaults to null, meaning using {@link validationKey}.
	 * @return string data prefixed with HMAC
	 */
	public function hashData($data,$key=null)
	{
		return $this->computeHMAC($data,$key).$data;
	}

	/**
	 * Validates if data is tampered.
	 * @param string $data data to be validated. The data must be previously
	 * generated using {@link hashData()}.
	 * @param string $key the private key to be used for generating HMAC. Defaults to null, meaning using {@link validationKey}.
	 * @return false|string the real data with HMAC stripped off. False if the data
	 * is tampered.
	 */
	public function validateData($data,$key=null)
	{
		if (!is_string($data))
			return false;

		$len=$this->strlen($this->computeHMAC('test'));
		if($this->strlen($data)>=$len)
		{
			$hmac=$this->substr($data,0,$len);
			$data2=$this->substr($data,$len,$this->strlen($data));
			return $this->compareString($hmac,$this->computeHMAC($data2,$key))?$data2:false;
		}
		else
			return false;
	}

	/**
	 * Computes the HMAC for the data with {@link getValidationKey validationKey}. This method has been made public
	 * since 1.1.14.
	 * @param string $data data to be generated HMAC.
	 * @param string|null $key the private key to be used for generating HMAC. Defaults to null, meaning using
	 * {@link validationKey} value.
	 * @param string|null $hashAlgorithm the name of the hashing algorithm to be used.
	 * See {@link https://php.net/manual/en/function.hash-algos.php hash-algos} for the list of possible
	 * hash algorithms. Note that if you are using PHP 5.1.1 or below, you can only use 'sha1' or 'md5'.
	 * Defaults to null, meaning using {@link hashAlgorithm} value.
	 * @return string the HMAC for the data.
	 * @throws CException on unsupported hash algorithm given.
	 */
	public function computeHMAC($data,$key=null,$hashAlgorithm=null)
	{
		if($key===null)
			$key=$this->getValidationKey();
		if($hashAlgorithm===null)
			$hashAlgorithm=$this->hashAlgorithm;

		if(function_exists('hash_hmac'))
			return hash_hmac($hashAlgorithm,$data,$key);

		if(0===strcasecmp($hashAlgorithm,'sha1'))
		{
			$pack='H40';
			$func='sha1';
		}
		elseif(0===strcasecmp($hashAlgorithm,'md5'))
		{
			$pack='H32';
			$func='md5';
		}
		else
		{
			throw new CException(Yii::t('yii','Only SHA1 and MD5 hashing algorithms are supported when using PHP 5.1.1 or below.'));
		}
		if($this->strlen($key)>64)
			$key=pack($pack,$func($key));
		if($this->strlen($key)<64)
			$key=str_pad($key,64,chr(0));
		$key=$this->substr($key,0,64);
		return $func((str_repeat(chr(0x5C), 64) ^ $key) . pack($pack, $func((str_repeat(chr(0x36), 64) ^ $key) . $data)));
	}

	/**
	 * Generate a random ASCII string. Generates only [0-9a-zA-z_~] characters which are all
	 * transparent in raw URL encoding.
	 * @param integer $length length of the generated string in characters.
	 * @param boolean $cryptographicallyStrong set this to require cryptographically strong randomness.
	 * @return string random string or false in case it cannot be generated.
	 * @since 1.1.14
	 */
	public function generateRandomString($length,$cryptographicallyStrong=true)
	{
		$randomBytes=$this->generateRandomBytes($length+2,$cryptographicallyStrong);
		return strtr($this->substr(base64_encode($randomBytes),0,$length),array('+'=>'_','/'=>'~'));
	}

	/**
	 * Generates a string of random bytes.
	 * @param integer $length number of random bytes to be generated.
	 * @param boolean $cryptographicallyStrong obsolete
	 * @return string generated random binary string or false on failure.
	 * @since 1.1.14
	 */
	public function generateRandomBytes($length,$cryptographicallyStrong=true)
	{
		return random_bytes($length);
	}

	/**
	 * Generate a pseudo random block of data using several sources.
	 * @return string of 64 pseudo random bytes.
	 * @since 1.1.14
	 */
	public function generatePseudoRandomBlock()
	{
		return random_bytes(64);
	}

	/**
	 * Get random bytes from the system entropy source via PHP session manager.
	 * @return boolean|string 20-byte random binary string or false on error.
	 * @since 1.1.14
	 */
	public function generateSessionRandomBlock()
	{
		ini_set('session.entropy_length',20);
		if(ini_get('session.entropy_length')!=20)
			return false;

		// These calls are (supposed to be, according to PHP manual) safe even if
		// there is already an active session for the calling script.
		@session_start();
		@session_regenerate_id();

		$bytes=session_id();
		if(!$bytes)
			return false;

		// $bytes has 20 bytes of entropy but the session manager converts the binary
		// random bytes into something readable. We have to convert that back.
		// SHA-1 should do it without losing entropy.
		return sha1($bytes,true);
	}

	/**
	 * Returns the length of the given string.
	 * If available uses the multibyte string function mb_strlen.
	 * @param string $string the string being measured for length
	 * @return integer the length of the string
	 */
	private function strlen($string)
	{
		return $this->_mbstring ? mb_strlen($string,'8bit') : strlen($string);
	}

	/**
	 * Returns the portion of string specified by the start and length parameters.
	 * If available uses the multibyte string function mb_substr
	 * @param string $string the input string. Must be one character or longer.
	 * @param integer $start the starting position
	 * @param integer $length the desired portion length
	 * @return string the extracted part of string, or FALSE on failure or an empty string.
	 */
	private function substr($string,$start,$length)
	{
		return $this->_mbstring ? mb_substr($string,$start,$length,'8bit') : substr($string,$start,$length);
	}
    
	/**
	 * Performs string comparison using timing attack resistant approach.
	 * @see https://codereview.stackexchange.com/questions/13512
	 * @param string $expected string to compare.
	 * @param string $actual user-supplied string.
	 * @return boolean whether strings are equal.
	 */
	public function compareString($expected,$actual)
	{
		$expected.="\0";
		$actual.="\0";
		$expectedLength=$this->strlen($expected);
		$actualLength=$this->strlen($actual);
		$diff=$expectedLength-$actualLength;
		for($i=0;$i<$actualLength;$i++)
			$diff|=(ord($actual[$i])^ord($expected[$i%$expectedLength]));
		return $diff===0;
	}

	/**
	 * Masks a token to make it uncompressible.
	 * Applies a random mask to the token and prepends the mask used to the result making the string always unique.
	 * Used to mitigate BREACH attack by randomizing how token is outputted on each request.
	 * @param string $token An unmasked token.
	 * @return string A masked token.
	 * @since 1.1.18
	 */
	public function maskToken($token)
	{
		// The number of bytes in a mask is always equal to the number of bytes in a token.
		$mask=$this->generateRandomString($this->strlen($token));
		return strtr(base64_encode($mask.($mask^$token)),'+/','-_');
	}

	/**
	 * Unmasks a token previously masked by `maskToken`.
	 * @param string $maskedToken A masked token.
	 * @return string An unmasked token, or an empty string in case of token format is invalid.
	 * @since 1.1.18
	 */
	public function unmaskToken($maskedToken)
	{
		$decoded=base64_decode(strtr($maskedToken,'-_','+/'));
		$length=$this->strlen($decoded)/2;
		// Check if the masked token has an even length.
		if(!is_int($length))
			return '';
		return $this->substr($decoded,$length,$length)^$this->substr($decoded,0,$length);
	}
}
