<?php
/**
* JSON (JavaScript Object Notation) is a lightweight data-interchange
* format. It is easy for humans to read and write. It is easy for machines
* to parse and generate. It is based on a subset of the JavaScript
* Programming Language, Standard ECMA-262 3rd Edition - December 1999.
* This feature can also be found in  Python. JSON is a text format that is
* completely language independent but uses conventions that are familiar
* to programmers of the C-family of languages, including C, C++, C#, Java,
* JavaScript, Perl, TCL, and many others. These properties make JSON an
* ideal data-interchange language.
*
* This package provides a simple encoder and decoder for JSON notation. It
* is intended for use with client-side Javascript applications that make
* use of HTTPRequest to perform server communication functions - data can
* be encoded into JSON notation for use in a client-side javascript, or
* decoded from incoming Javascript requests. JSON format is native to
* Javascript, and can be directly eval()'ed with no further parsing
* overhead
*
* All strings should be in ASCII or UTF-8 format!
*
* LICENSE: Redistribution and use in source and binary forms, with or
* without modification, are permitted provided that the following
* conditions are met: Redistributions of source code must retain the
* above copyright notice, this list of conditions and the following
* disclaimer. Redistributions in binary form must reproduce the above
* copyright notice, this list of conditions and the following disclaimer
* in the documentation and/or other materials provided with the
* distribution.
*
* THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED
* WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
* MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN
* NO EVENT SHALL CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
* INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
* BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
* OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
* ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR
* TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
* USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH
* DAMAGE.
*
* @author	  Michal Migurski <mike-json@teczno.com>
* @author	  Matt Knapp <mdknapp[at]gmail[dot]com>
* @author	  Brett Stimmerman <brettstimmerman[at]gmail[dot]com>
* @copyright   2005 Michal Migurski
* @license	 https://www.opensource.org/licenses/bsd-license.php
* @link		https://pear.php.net/pepr/pepr-proposal-show.php?id=198
*/

/**
 * CJSON converts PHP data to and from JSON format.
 *
 * @author	 Michal Migurski <mike-json@teczno.com>
 * @author	 Matt Knapp <mdknapp[at]gmail[dot]com>
 * @author	 Brett Stimmerman <brettstimmerman[at]gmail[dot]com>
 * @package	system.web.helpers
 * @since 1.0
 */
class CJSON
{
	/**
	 * Marker constant for JSON::decode(), used to flag stack state
	 */
	const JSON_SLICE = 1;

	/**
	* Marker constant for JSON::decode(), used to flag stack state
	*/
	const JSON_IN_STR = 2;

	/**
	* Marker constant for JSON::decode(), used to flag stack state
	*/
	const JSON_IN_ARR = 4;

	/**
	* Marker constant for JSON::decode(), used to flag stack state
	*/
	const JSON_IN_OBJ = 8;

	/**
	* Marker constant for JSON::decode(), used to flag stack state
	*/
	const JSON_IN_CMT = 16;

	/**
	 * Encodes an arbitrary variable into JSON format
	 *
	 * @param mixed $var any number, boolean, string, array, or object to be encoded.
	 * If var is a string, it will be converted to UTF-8 format first before being encoded.
	 * @return string JSON string representation of input var
	 */
	public static function encode($var)
	{
		switch (gettype($var)) {
			case 'boolean':
				return $var ? 'true' : 'false';

			case 'NULL':
				return 'null';

			case 'integer':
				return (int) $var;

			case 'double':
			case 'float':
				return str_replace(',','.',(float)$var); // locale-independent representation

			case 'string':
				if (($enc=strtoupper(Yii::app()->charset))!=='UTF-8')
					$var=iconv($enc, 'UTF-8', $var);

				return json_encode($var, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE);

			case 'array':
				return json_encode($var, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE);

			case 'object':
				if (interface_exists('JsonSerializable', false) && $var instanceof JsonSerializable)
				{
					// We use the function defined in the interface instead of json_encode.
					// This way even for PHP < 5.4 one could define the interface and use it.
					return self::encode($var->jsonSerialize());
				}
				elseif ($var instanceof Traversable)
				{
					$vars = array();
					foreach ($var as $k=>$v)
						$vars[$k] = $v;
				}
				else
					$vars = get_object_vars($var);
				return '{' .
					join(',', array_map(array('CJSON', 'nameValue'),
						array_keys($vars),
						array_values($vars)))
						. '}';

			default:
				return '';
		}
	}

	/**
	 * array-walking function for use in generating JSON-formatted name-value pairs
	 *
	 * @param string $name  name of key to use
	 * @param mixed $value reference to an array element to be encoded
	 *
	 * @return   string  JSON-formatted name-value pair, like '"name":value'
	 * @access   private
	 */
	protected static function nameValue($name, $value)
	{
		return self::encode(strval($name)) . ':' . self::encode($value);
	}

	/**
	 * reduce a string by removing leading and trailing comments and whitespace
	 *
	 * @param string $str string value to strip of comments and whitespace
	 *
	 * @return string string value stripped of comments and whitespace
	 * @access   private
	 */
	protected static function reduceString($str)
	{
		$str = preg_replace(array(

				// eliminate single line comments in '// ...' form
				'#^\s*//(.+)$#m',

				// eliminate multi-line comments in '/* ... */' form, at start of string
				'#^\s*/\*(.+)\*/#Us',

				// eliminate multi-line comments in '/* ... */' form, at end of string
				'#/\*(.+)\*/\s*$#Us'

			), '', $str);

		// eliminate extraneous space
		return trim($str);
	}

	/**
	 * decodes a JSON string into appropriate variable
	 *
	 * @param string $str  JSON-formatted string
	 * @param boolean $useArray  whether to use associative array to represent object data
	 * @return mixed   number, boolean, string, array, or object corresponding to given JSON input string.
	 *    Note that decode() always returns strings in ASCII or UTF-8 format!
	 * @access   public
	 */
	public static function decode($str, $useArray=true)
	{
		return json_decode($str, $useArray, 512, JSON_THROW_ON_ERROR);
	}

	/**
	 * This function returns any UTF-8 encoded text as a list of
	 * Unicode values:
	 * @param string $str string to convert
	 * @return string
	 * @author Scott Michael Reynen <scott@randomchaos.com>
	 * @link   http://www.randomchaos.com/document.php?source=php_and_unicode
	 * @see	unicodeToUTF8()
	 */
	protected static function utf8ToUnicode( &$str )
	{
		$unicode = array();
		$values = array();
		$lookingFor = 1;

		for ($i = 0; $i < strlen( $str ); $i++ )
		{
			$thisValue = ord( $str[ $i ] );
			if ( $thisValue < 128 )
				$unicode[] = $thisValue;
			else
			{
				if ( count( $values ) == 0 )
					$lookingFor = ( $thisValue < 224 ) ? 2 : 3;
				$values[] = $thisValue;
				if ( count( $values ) == $lookingFor )
				{
					$number = ( $lookingFor == 3 ) ?
						( ( $values[0] % 16 ) * 4096 ) + ( ( $values[1] % 64 ) * 64 ) + ( $values[2] % 64 ):
						( ( $values[0] % 32 ) * 64 ) + ( $values[1] % 64 );
					$unicode[] = $number;
					$values = array();
					$lookingFor = 1;
				}
			}
		}
		return $unicode;
	}

	/**
	 * This function converts a Unicode array back to its UTF-8 representation
	 * @param string $str string to convert
	 * @return string
	 * @author Scott Michael Reynen <scott@randomchaos.com>
	 * @link   http://www.randomchaos.com/document.php?source=php_and_unicode
	 * @see	utf8ToUnicode()
	 */
	protected static function unicodeToUTF8( &$str )
	{
		$utf8 = '';
		foreach( $str as $unicode )
		{
			if ( $unicode < 128 )
			{
				$utf8.= chr( $unicode );
			}
			elseif ( $unicode < 2048 )
			{
				$utf8.= chr( 192 +  ( ( $unicode - ( $unicode % 64 ) ) / 64 ) );
				$utf8.= chr( 128 + ( $unicode % 64 ) );
			}
			else
			{
				$utf8.= chr( 224 + ( ( $unicode - ( $unicode % 4096 ) ) / 4096 ) );
				$utf8.= chr( 128 + ( ( ( $unicode % 4096 ) - ( $unicode % 64 ) ) / 64 ) );
				$utf8.= chr( 128 + ( $unicode % 64 ) );
			}
		}
		return $utf8;
	}

	/**
	 * UTF-8 to UTF-16BE conversion.
	 *
	 * Maybe really UCS-2 without mb_string due to utf8ToUnicode limits
	 * @param string $str string to convert
	 * @param boolean $bom whether to output BOM header
	 * @return string
	 */
	protected static function utf8ToUTF16BE(&$str, $bom = false)
	{
		$out = $bom ? "\xFE\xFF" : '';
		if(function_exists('mb_convert_encoding'))
			return $out.mb_convert_encoding($str,'UTF-16BE','UTF-8');

		$uni = self::utf8ToUnicode($str);
		foreach($uni as $cp)
			$out .= pack('n',$cp);
		return $out;
	}

	/**
	 * UTF-8 to UTF-16BE conversion.
	 *
	 * Maybe really UCS-2 without mb_string due to utf8ToUnicode limits
	 * @param string $str string to convert
	 * @return string
	 */
	protected static function utf16beToUTF8(&$str)
	{
		$uni = unpack('n*',$str);
		return self::unicodeToUTF8($uni);
	}
}
