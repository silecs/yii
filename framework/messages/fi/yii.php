<?php
/**
 * Message translations.
 *
 * This file is automatically generated by 'yiic message' command.
 * It contains the localizable messages extracted from source code.
 * You may modify this file by translating the extracted messages.
 *
 * Each array element represents the translation (value) of a message (key).
 * If the value is empty, the message is considered as not translated.
 * Messages that no longer need translation will have their translations
 * enclosed between a pair of '@@' marks.
 *
 * Message string can be used with plural forms format. Check i18n section
 * of the guide for details.
 *
 * NOTE, this file must be saved in UTF-8 encoding.
 */
return array (
  'Can not generate multiple insert command with empty data set.' => 'Tyhjällä tietojoukolla ei voida luoda useita insert-komentoja.',
  'Encryption key length can be {keyLengths}.' => 'Salausavaimen pituus voi olla {keyLengths}.',
  'Encryption key length must be between {minLength} and {maxLength}.' => 'Salausavaimen pituus täytyy olla {minLength} ja {maxLength} väliltä.',
  'Encryption key should be a string.' => 'Salausavaimen tulee olla merkkijono.',
  'Failed to validate key. Supported key lengths of cipher not known.' => 'Avain kelpoisuustarkistus epäonnistui. Salakirjoitusjärjestelmän tuettuja avainpituuksia ei tiedetä.',
  'No encryption key specified.' => 'Salausavainta ei ole määritetty.',
  'Unable to upload the file "{file}" because of an unrecognized error.' => 'Ei voi ladata tiedostoa "{file}" tuntemattoman virheen vuoksi.',
  '"{path}" is not a valid directory.' => '"{path}" ei ole kelvollinen hakemisto.',
  '&lt; Previous' => '&lt; Edellinen',
  '&lt;&lt; First' => '&lt;&lt; Ensimmäinen',
  'A PHP extension stopped the file upload.' => 'PHP-laajennus on pysäyttänyt tiedoston latauksen.',
  'Action class {class} must implement the "run" method.' => '{class}-toimintaluokan pitää toteuttaa "run"-metodi',
  'Active Record requires a "db" CDbConnection application component.' => 'Active record vaatii "db" CDbConnection -sovelluskomponentin.',
  'Active record "{class}" has an invalid configuration for relation "{relation}". It must specify the relation type, the related active record class and the foreign key.' => 'Active record -luokalla "{class}" on virheellinen konfiguraatio relaatiolle "{relation}". Sen pitää määrittää relaation tyyppi, siihen liittyvä active record -luokka ja viiteavain (fk).',
  'Active record "{class}" is trying to select an invalid column "{column}". Note, the column must exist in the table or be an expression with alias.' => 'Active record -luokka "{class}" yrittää valita virheellisen kentän "{column}". Huomaathan, että kentän pitää olla olemassa taulussa tai olla lauseke aliaksella.',
  'Adding a foreign key constraint to an existing table is not supported by SQLite.' => 'SQLite ei tue viiteavaimen (fk) lisäystä olemassa olevaan tauluun.',
  'Adding a primary key after table has been created is not supported by SQLite.' => 'SQLite ei tue perusavaimen (pk) lisäystä taulun luonnin jälkeen.',
  'Alias "{alias}" is invalid. Make sure it points to an existing PHP file and the file is readable.' => 'Alias "{alias}" on virheellinen. Varmista, että se osoittaa olemassa olevaan PHP-tiedostoon ja että tiedosto on luettavissa.',
  'Alias "{alias}" is invalid. Make sure it points to an existing directory or file.' => 'Alias "{alias}" on virheellinen. Varmista, että se osoittaa olemassa olevaan hakemistoon tai tiedostoon.',
  'Altering a DB column is not supported by SQLite.' => 'SQLite ei tue kentän muokkausta.',
  'Application Log' => 'Sovellusloki',
  'Application base path "{path}" is not a valid directory.' => 'Sovelluksen base-polku "{path}" ei ole kelvollinen hakemisto.',
  'Application runtime path "{path}" is not valid. Please make sure it is a directory writable by the Web server process.' => 'Sovelluksen runtime-polku "{path}" ei ole kelvollinen. Varmista, että web-palvelimen prosessilla on kirjoitusoikeus hakemistoon.',
  'Authorization item "{item}" has already been assigned to user "{user}".' => 'Auktorisointiosio "{item}" on jo osoitettu käyttäjälle "{user}".',
  'Base path "{path}" is not a valid directory.' => 'Base-polku "{path}" ei ole kelvollinen hakemisto.',
  'CApcCache requires PHP apc extension to be loaded.' => 'CApcCache edellyttää, että PHP:n apc-laajennus on ladattu.',
  'CAssetManager.basePath "{path}" is invalid. Please make sure the directory exists and is writable by the Web server process.' => 'CAssetManager.basePath "{path}" on virheellinen. Varmista, että hakemisto on olemassa ja että web-palvelimen prosessilla on kirjoitusoikeus siihen.',
  'CCacheHttpSession.cacheID is invalid. Please make sure "{id}" refers to a valid cache application component.' => 'CCacheHttpSession.cacheID on virheellinen. Varmista, että "{id}" viittaa kelvolliseen sovelluksen cache-komponenttiin.',
  'CCaptchaValidator.action "{id}" is invalid. Unable to find such an action in the current controller.' => 'CCaptchaValidator.action "{id}" on virheellinen. Nykyisestä käsittelijästä ei löydy kyseistä toimintoa.',
  'CDbAuthManager.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => 'CDbAuthManager.connectionID "{id}" on virheellinen. Varmista, että ID viittaa sovelluksen CDbConnection-komponenttiin.',
  'CDbCache.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => 'CDbCache.connectionID "{id}" on virheellinen. Varmista että ID viittaa sovelluksen CDbConnection-komponenttiin. ',
  'CDbCacheDependency.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => 'CDbCacheDependency.connectionID "{id}" on virheellinen. Varmista, että ID viittaa sovelluksen CDbConnection-komponenttiin.',
  'CDbCacheDependency.sql cannot be empty.' => 'CDbCacheDependency.sql ei voi olla thjä.',
  'CDbCommand failed to execute the SQL statement: {error}' => 'CDbCommand ei voinut suorittaa SQL-komentoa: {error}',
  'CDbCommand failed to prepare the SQL statement: {error}' => 'CDbCommand ei voinut valmistella SQL-komentoa: {error}',
  'CDbCommand::execute() failed: {error}. The SQL statement executed was: {sql}.' => 'CDbCommand::execute() epäonnistui: {error}. Suoritettu SQL-komento oli: {sql}.',
  'CDbCommand::{method}() failed: {error}. The SQL statement executed was: {sql}.' => 'CDbCommand::{method}() epäonnistui: {error}. Suoritettu SQL-komento oli: {sql}.',
  'CDbConnection does not support reading schema for {driver} database.' => 'CDbConnection ei tue skeeman lukua {driver}-tietokannalla.',
  'CDbConnection failed to open the DB connection.' => 'CDbConnection ei voinut avata tietokantayhteyttä.',
  'CDbConnection is unable to find PDO class "{className}". Make sure PDO is installed correctly.' => 'CDbConnection ei löydä PDO-luokkaa "{className}". Varmista että PDO on asennettu oikein.',
  'CDbDataReader cannot rewind. It is a forward-only reader.' => 'CDbDataReader ei voi kelata taaksepäin. Se lukee vain eteenpäin.',
  'CDbHttpSession.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => 'CDbHttpSession.connectionID "{id}" on virheellinen. Varmista, että ID viittaa sovelluksen CDbConnection-komponenttiin.',
  'CDbLogRoute.connectionID "{id}" does not point to a valid CDbConnection application component.' => 'CDbLogRoute.connectionID "{id}" ei osoita kelvolliseen sovelluksen CDbConnection-komponenttiin.',
  'CDbMessageSource.connectionID is invalid. Please make sure "{id}" refers to a valid database application component.' => 'CDbMessageSource.connectionID on virheellinen. Varmista, että "{id}" kelvolliseen sovelluksen database-komponenttiin.',
  'CDbTestFixture.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => 'CDbTestFixture.connectionID "{id}" on virheellinen. Varmista , että ID viittaa sovelluksen CDbConnection-komponenttiin.',
  'CDbTransaction is inactive and cannot perform commit or roll back operations.' => 'CDbTransaction ei ole aktiivinen eikä se voi suorittaa commit- tai roll back -operaatioita.',
  'CDirectoryCacheDependency.directory cannot be empty.' => 'CDirectoryCacheDependency.directory ei voi olla tyhjä.',
  'CFileCacheDependency.fileName cannot be empty.' => 'CFileCacheDependency.fileName ei voi olla tyhjä.',
  'CFileLogRoute.logPath "{path}" does not point to a valid directory. Make sure the directory exists and is writable by the Web server process.' => 'CFileLogRoute.logPath "{path}" ei osoita kelvolliseen hakemistoon. Varmista, että hakemisto on olemassa ja että web-palvelimen prosessilla on kirjoitusoikeus siihen.',
  'CFilterChain can only take objects implementing the IFilter interface.' => 'CFilterChain voi ottaa vastaan vain oliota, jotka toteuttavat IFilter-rajapinnan.',
  'CFlexWidget.baseUrl cannot be empty.' => 'CFlexWidget.baseUrl ei voi olla tyhjä.',
  'CFlexWidget.name cannot be empty.' => 'CFlexWidget.name ei voi olla tyhjä.',
  'CGlobalStateCacheDependency.stateName cannot be empty.' => 'CGlobalStateCacheDependency.stateName ei voi olla tyhjä.',
  'CHttpCacheFilter.lastModified contained a value that could not be understood by strtotime()' => 'CHttpCacheFilter.lastModified sisälsi arvon, jota strtotime() ei ymmärtänyt',
  'CHttpCookieCollection can only hold CHttpCookie objects.' => 'CHttpCookieCollection hyväksyy vain CHttpCookie-olioita.',
  'CHttpRequest is unable to determine the entry script URL.' => 'CHttpRequest ei pysty määrittämään sisääntuloskriptin URL:ia.',
  'CHttpRequest is unable to determine the path info of the request.' => 'CHttpRequest ei pysty määrittämään pyynnön polkutietoa.',
  'CHttpRequest is unable to determine the request URI.' => 'CHttpRequest ei pysty määrittämään pyynnön URI:a.',
  'CHttpSession.cookieMode can only be "none", "allow" or "only".' => 'CHttpSession.cookieMode voi olla vain "none", "allow" tai "only".',
  'CHttpSession.gcProbability "{value}" is invalid. It must be a float between 0 and 100.' => 'CHttpSession.gcProbability "{value}" on virheellinen. Sen pitää olla liukuluku nollan ja sadan väliltä.',
  'CHttpSession.savePath "{path}" is not a valid directory.' => 'CHttpSession.savePath "{path}" ei ole kelvollinen hakemisto.',
  'CMemCache requires PHP {extension} extension to be loaded.' => 'CMemCache vaatii, että PHP:n {extension} -laajennus on ladattu.',
  'CMemCache server configuration must be an array.' => 'CMemCachen palvelinkonfiguraation pitää olla taulukko.',
  'CMemCache server configuration must have "host" value.' => 'CMemCachen palvelinkonfiguraatiossa pitää olla "host"-arvo.',
  'CProfileLogRoute found a mismatching code block "{token}". Make sure the calls to Yii::beginProfile() and Yii::endProfile() be properly nested.' => 'CProfileLogRoute löysi yhteensopimattoman koodilohkon "{token}". Varmista, että Yii::beginProfile() ja Yii::endProfile() -kutsut on sisennetty oikein.',
  'CProfileLogRoute.report "{report}" is invalid. Valid values include "summary" and "callstack".' => 'CProfileLogRoute.report "{report}" on virheellinen. Arvoiksi kelpaavat "summary" ja "callstack".',
  'CSecurityManager requires PHP mcrypt extension to be loaded in order to use data encryption feature.' => 'CSecurityManager vaatii, että PHP:n mcrypt-laajennus on ladattu, jotta tiedonsalaustoiminnallisuutta voi käyttää.',
  'CSecurityManager.validationKey cannot be empty.' => 'CSecurityManager.validationKey ei voi olla tyhjä.',
  'CSecurityManager::generateRandomString() cannot generate random string in the current environment.' => 'CSecurityManager::generateRandomString() ei pysty generoimaan satunnaista merkkijonoa nykyisessä ympäristössä.',
  'CTypedList<{type}> can only hold objects of {type} class.' => 'CTypedList<{type}> hyväksyy vain {type}-luokan olioita.',
  'CTypedMap<{type}> can only hold objects of {type} class.' => 'CTypedMap<{type}> hyväksyy vain {type}-luokan olioita.',
  'CUrlManager.UrlFormat must be either "path" or "get".' => 'CUrlManager.UrlFormat pitää olla joko "path" tai "get".',
  'CWinCache requires PHP wincache extension to be loaded.' => 'CWinCache vaatii, että PHP:n wincache-laajennus on ladattu.',
  'CWinCache user cache is disabled. Please set wincache.ucenabled to On in your php.ini.' => 'CWinCache user cache on pois käytöstä. Aseta php.ini-tiedostoon wincache.ucenabled-arvoksi "On".',
  'CXCache requires PHP XCache extension to be loaded.' => 'CXCache vaatii, että PHP:n XCache-laajennus on ladattu.',
  'CZendDataCache requires PHP Zend Data Cache extension to be loaded.' => 'CZendDataCache vaatii, että PHP:n Zend Data Cache -laajennus on ladattu.',
  'Cannot add "{child}" as a child of "{name}". A loop has been detected.' => 'Kohdetta "{child}" ei voida lisätä kohteen "{name}" lapseksi. Silmukka havaittu.',
  'Cannot add "{child}" as a child of "{parent}". A loop has been detected.' => 'Kohdetta "{child}" ei voida lisätä kohteen "{parent}" lapseksi. Silmukka havaittu.',
  'Cannot add "{name}" as a child of itself.' => 'Kohdetta "{name}" ei voida lisätä itsensä lapseksi.',
  'Cannot add an item of type "{child}" to an item of type "{parent}".' => 'Kohdetta tyyppiä "{child}" ei voida lisätä  kohteeseen tyyppiä "{parent}".',
  'Class name "{class}" does not match class file "{file}".' => 'Luokan nimi "{class}" ei vastaa luokkatiedostoa "{file}".',
  'Column name must be either a string or an array.' => 'Kentän nimen pitää olla joko merkkijono tai taulukko.',
  'Dropping DB column is not supported by SQLite.' => 'SQLite ei tue kentän poistoa.',
  'Dropping a foreign key constraint is not supported by SQLite.' => 'SQLite ei tue viiteavaimen (fk) poistoa.',
  'Either "{parent}" or "{child}" does not exist.' => 'Joko "{parent}" tai "{child}" ei ole olemassa.',
  'Error: Table "{table}" does not have a primary key.' => 'Virhe: Taululla "{table}" ei ole perusavainta (pk)',
  'Error: Table "{table}" has a composite primary key which is not supported by crud command.' => 'Virhe: Taululla "{table}" on komposiitti-perusavain (pk), jota crud-komento ei tue.',
  'Event "{class}.{event}" is attached with an invalid handler "{handler}".' => 'Tapahtuma "{class}.{event}" on liitetty virheellisellä käsittelijällä "{handler}".',
  'Event "{class}.{event}" is not defined.' => 'Tapahtumaa "{class}.{event}" ei ole määritelty.',
  'Extension path "{path}" does not exist.' => 'Laajennuspolkua "{path}" ei ole olemassa.',
  'Failed to initialize the mcrypt module.' => 'Ei voitu alustaa mcrypt-moduulia.',
  'Failed to set unsafe attribute "{attribute}" of "{class}".' => 'Ei voitu asettaa "{class}"-luokan turvatonta attribuuttia "{attribute}".',
  'Failed to start session.' => 'Ei voitu aloittaa sessiota.',
  'Failed to write the uploaded file "{file}" to disk.' => 'Ladattua tiedostoa "{file}" ei voitu kirjoittaa levylle.',
  'Filter "{filter}" is invalid. Controller "{class}" does not have the filter method "filter{filter}".' => 'Suodatin "{filter}" on virheellinen. Käsittelijällä "{class}" ei ole suodattimen metodia "filter{filter}".',
  'GD with FreeType or ImageMagick PHP extensions are required.' => 'GD FreeType-tuella tai ImageMagick PHP -laajennuksia tarvitaan.',
  'Get a new code' => 'Pyydä uusi koodi',
  'Go to page: ' => 'Siirry sivulle: ',
  'In order to use MIME-type validation provided by CFileValidator fileinfo PECL extension should be installed.' => 'fileinfo PECL -laajennus tulee asentaa, jotta voit käyttää CFileValidatorin tarjoamaa MIME-tyyppivalidointia.',
  'Internal error while generating hash.' => 'Tiivistettä generoitaessa tapahtui sisäinen virhe.',
  'Invalid MO file revision: {revision}.' => 'Virheellinen MO-tiedoston revisio: {revision}.',
  'Invalid MO file: {file} (magic: {magic}).' => 'Virheellinen MO-tiedosto: {file} (magic: {magic}).',
  'Invalid enumerable value "{value}". Please make sure it is among ({enum}).' => 'Virheellinen lueteltu arvo "{value}". Varmista, että se on kuuluu joukkoon ({enum}).',
  'Invalid expression for CHttpCacheFilter.lastModifiedExpression: The evaluation result "{value}" could not be understood by strtotime()' => 'Virheellinen CHttpCacheFilter.lastModifiedExpressionin lauseke: strtotime() ei ymmärtänyt evaluoinnin tulosta "{value}".',
  'Invalid operator "{operator}".' => 'Virheellinen operaattori "{operator}".',
  'Last &gt;&gt;' => 'Viimeinen &gt;&gt;',
  'List data must be an array or an object implementing Traversable.' => 'Listan datan pitää olla taulukko tai olio, joka toteuttaa Traversablen.',
  'List index "{index}" is out of bound.' => 'Listan indeksi "{index}" on rajojen ulkopuolella.',
  'Login Required' => 'Kirjautuminen vaaditaan',
  'Map data must be an array or an object implementing Traversable.' => 'Map datan pitää olla taulukko tai olio, joka toteuttaa Traversablen.',
  'Missing the temporary folder to store the uploaded file "{file}".' => 'Väliaikaishakemisto ladatun tiedoston "{file}" tallentamiseen puuttuu.',
  'Next &gt;' => 'Seuraava &gt;',
  'No' => 'Ei',
  'No columns are being updated for table "{table}".' => 'Yksikään kenttä ei päivity tauluun "{table}".',
  'No counter columns are being updated for table "{table}".' => 'Yksikään laskurikenttä ei päivity tauluun "{table}".',
  'Object configuration must be an array containing a "class" element.' => 'Olion konfiguraation pitää olla taulukko, joka sisältää "class"-elementin.',
  'Only SHA1 and MD5 hashing algorithms are supported when using PHP 5.1.1 or below.' => 'Ainoastaan SHA-1 ja MD5 -tiivistealgoritmit ovat tuettuja, kun käytössä on PHP 5.1.1 tai vanhempi.',
  'Please fix the following input errors:' => 'Korjaa seuraavat virheelliset tiedot:',
  'Powered by {yii}.' => 'Powered by {yii}.',
  'Property "{class}.{property}" is not defined.' => 'Ominaisuutta "{class}.{property}" ei ole määritelty.',
  'Property "{class}.{property}" is read only.' => 'Ominaisuus "{class}.{property}" on vain luettavissa.',
  'Property CMaskedTextField.mask cannot be empty.' => 'CMaskedTextField.mask-ominaisuus ei voi olla tyhjä.',
  'Queue data must be an array or an object implementing Traversable.' => 'Queue datan pitää olla taulukko tai olio, joka toteuttaa Traversablen.',
  'Relation "{name}" is not defined in active record class "{class}".' => 'Relaatiota "{name}" ei ole määritelty active record -luokassa "{class}".',
  'Removing a primary key after table has been created is not supported by SQLite.' => 'SQLite ei tue perusavaimen (pk) poistoa taulun luonnin jälkeen.',
  'Renaming a DB column is not supported by SQLite.' => 'SQLite ei tue kentän nimeämistä uudelleen.',
  'Script HTML options are not allowed for "CClientScript::POS_LOAD" and "CClientScript::POS_READY".' => '"CClientScript::POS_LOAD" ja "CClientScript::POS_READY" ei salli HTML-optioita.',
  'Stack data must be an array or an object implementing Traversable.' => 'Stack datan pitää olla taulukko tai olio, joka toteuttaa Traversablen.',
  'Table "{table}" does not exist.' => 'Taulua "{table}" ei ole olemassa.',
  'Table "{table}" does not have a column named "{column}".' => 'Talululla "{table}" ei ole "{column}"-nimistä kenttää.',
  'The "db" application component must be configured to be a CDbConnection object.' => 'Sovelluksen "db"-komponentin tulee olla konfiguroituna CDbConnection-olioksi.',
  'The "filter" property must be specified with a valid callback.' => '"filter"-ominaisuudelle pitää määrittää kelvollinen callback.',
  'The "forceCopy" and "linkAssets" cannot be both true.' => '"forceCopy" ja "linkAssets" eivät molemmat voi olla tosi.',
  'The "pattern" property must be specified with a valid regular expression.' => '"pattern"-ominaisuudelle pitää määrittää kelvollisen säännöllinen lausekke.',
  'The "range" property must be specified with a list of values.' => '"range"-ominaisuudelle pitää määrittää arvoluettelo.',
  'The $converter argument must be a valid callback or null.' => '$converter argumentin täytyy olla kelvollinen callback tai null.',
  'The CSRF token could not be verified.' => 'CSRF-tokenia ei voitu todentaa.',
  'The STAT relation "{name}" cannot have child relations.' => 'STAT-relaatiolla "{name}" ei voi olla lapsirelaatioita.',
  'The URL pattern "{pattern}" for route "{route}" is not a valid regular expression.' => 'URL-ratkaisumalli "{pattern}" reitille "{route}" ei ole kelvollinen säännöllinen lauseke.',
  'The active record cannot be deleted because it is new.' => 'Active recordia ei voi poistaa, koska se on uusi.',
  'The active record cannot be inserted to database because it is not new.' => 'Active recordia ei voi lisätä tietokantaan, koska se ei ole uusi.',
  'The active record cannot be updated because it is new.' => 'Active recordia ei voi päivittää, koska se on uusi.',
  'The asset "{asset}" to be published does not exist.' => 'Julkaistavaa assetia "{asset}" ei ole olemassa.',
  'The command path "{path}" is not a valid directory.' => 'Command-polku "{path}" ei ole kelvollinen hakemisto.',
  'The controller path "{path}" is not a valid directory.' => 'Controller-polku "{path}" ei ole kelvollinen hakemisto.',
  'The file "{file}" cannot be uploaded. Only files of these MIME-types are allowed: {mimeTypes}.' => 'Tiedostoa "{file}" ei voitu tallentaa. Sallittuja ovat vain tiedostot, joiden MIME-tyyppi on: {mimeTypes}.',
  'The file "{file}" cannot be uploaded. Only files with these extensions are allowed: {extensions}.' => 'Tiedostoa "{file}" ei voitu tallentaa. Sallittuja ovat vain tiedostot, joiden tiedostopääte on: {extensions}.',
  'The file "{file}" is too large. Its size cannot exceed {limit} bytes.' => 'Tiedosto "{file}" on liian suuri. Tiedostokoon tulee olla pienempi kuin {limit} tavua.',
  'The file "{file}" is too small. Its size cannot be smaller than {limit} bytes.' => 'Tiedosto "{file}" on liian pieni. Tiedostokoon tulee olla suurempi kuin {limit} tavua.',
  'The file "{file}" was only partially uploaded.' => 'Tiedosto "{file}" tallentui vain osittain.',
  'The first element in a filter configuration must be the filter class.' => 'Suodattimen konfiguraation ensimmäisen elementin tulee olla suodattimen luokka.',
  'The format of {attribute} is invalid.' => 'Attribuutin {attribute} muoto on virheellinen.',
  'The item "{name}" does not exist.' => 'Kohdetta "{name}" ei ole olemassa.',
  'The item "{parent}" already has a child "{child}".' => 'Kohteella "{parent}" on jo lapsi "{child}".',
  'The layout path "{path}" is not a valid directory.' => 'Layout-polku "{path}" ei ole kelvollinen hakemisto.',
  'The list is read only.' => 'List on vain luettavissa.',
  'The map is read only.' => 'Map on vain luettavissa.',
  'The module path "{path}" is not a valid directory.' => 'Module-polku "{path}" ei ole kelvollinen hakemisto.',
  'The pattern for 12 hour format must be "h" or "hh".' => '12-tuntisen ajan muodon pitää olla "h" tai "hh".',
  'The pattern for 24 hour format must be "H" or "HH".' => '24-tuntisen ajan muodon pitää olla "H" tai "HH".',
  'The pattern for AM/PM marker must be "a".' => 'AM/PM-kellonaikamerkin muodon pitää olla "a".',
  'The pattern for day in month must be "F".' => 'Päivän muodon pitää olla "F"',
  'The pattern for day in year must be "D", "DD" or "DDD".' => 'Vuoden päivän muodon pitää olla "D", "DD" tai "DDD".',
  'The pattern for day of the month must be "d" or "dd".' => 'Kuukaudenpäivän muodon pitää olla "d" tai "dd"',
  'The pattern for day of the week must be "E", "EE", "EEE", "EEEE", "EEEEE", "e", "ee", "eee", "eeee", "eeeee", "c", "cccc" or "ccccc".' => 'Viikonpäivän muodon pitää olla "E", "EE", "EEE", "EEEE", "EEEEE", "e", "ee", "eee", "eeee", "eeeee", "c", "cccc" tai "ccccc".',
  'The pattern for era must be "G", "GG", "GGG", "GGGG" or "GGGGG".' => 'Aikakauden muodon pitää olla "G", "GG", "GGG", "GGGG" tai "GGGGG".',
  'The pattern for hour in AM/PM must be "K" or "KK".' => 'Tunnin muoto AM/PM-muodossa pitää olla "K" tai "KK".',
  'The pattern for hour in day must be "k" or "kk".' => 'Tunnin muodon pitää olla "k" tai "kk".',
  'The pattern for minutes must be "m" or "mm".' => 'Minuutin muodon pitää olla "m" tai "mm".',
  'The pattern for month must be "M", "MM", "MMM", "MMMM", "L", "LL", "LLL" or "LLLL".' => 'Kuukauden muodon pitää olla "M", "MM", "MMM", "MMMM", "L", "LL", "LLL" tai "LLLL".',
  'The pattern for seconds must be "s" or "ss".' => 'Sekunnin muodon pitää olla "s" tai "ss".',
  'The pattern for time zone must be "z" or "v".' => 'Aikavyöhykkeen muodon pitää olla "z" tai "v".',
  'The pattern for week in month must be "W".' => 'Kuukauden viikon muodon pitää olla "W".',
  'The pattern for week in year must be "w".' => 'Vuoden viikon muodon pitää olla "w".',
  'The queue is empty.' => 'Jono on tyhjä.',
  'The relation "{relation}" in active record class "{class}" is not specified correctly: the join table "{joinTable}" given in the foreign key cannot be found in the database.' => 'Relaation "{relation}" active record -luokkaa "{class}" ei ole määritelty oikein: Viiteavaimelle (fk) annettua liitostaulua "{joinTable}" ei löydy tietokannasta.',
  'The relation "{relation}" in active record class "{class}" is specified with a foreign key "{key}" that does not point to the parent table "{table}".' => 'Relaation "{relation}" active record -luokalle "{class}" on määritelty viiteavain (fk) "{key}", joka ei osoita ylätauluun "{table}".',
  'The relation "{relation}" in active record class "{class}" is specified with an incomplete foreign key. The foreign key must consist of columns referencing both joining tables.' => 'Relaation "{relation}" active record -luokalle "{class}" on määritelty puutteellinen viiteavain (fk). Viiteavaimen (fk) tulee koostua kentistä, jotka viittaavat molempiin liitostauluihin.',
  'The relation "{relation}" in active record class "{class}" is specified with an invalid foreign key "{key}". There is no such column in the table "{table}".' => 'Relaation "{relation}" active record -luokalle "{class}" on määritelty virheellinen viiteavain (fk) "{key}". Taulussa "{table}" ei ole kyseistä kenttää.',
  'The relation "{relation}" in active record class "{class}" is specified with an invalid foreign key. The columns in the key must match the primary keys of the table "{table}".' => 'Relaation "{relation}" active record -luokalle "{class}" on määritelty virheellinen viiteavain (fk). Avaimen kenttien tulee vastata taulun "{table}" perusavaimia (pk).',
  'The relation "{relation}" in active record class "{class}" is specified with an invalid foreign key. The format of the foreign key must be "joinTable(fk1,fk2,...)".' => 'Relaation "{relation}" active record -luokalle "{class}" on määritelty virheellinen viiteavain (fk). Viiteavaimen (fk) muodon pitää olla "liitostaulu(fk1,fk2,...)".',
  'The requested view "{name}" was not found.' => 'Pyydettyä näkymää "{name}" ei löytynyt.',
  'The stack is empty.' => 'Stack on tyhjä.',
  'The system is unable to find the requested action "{action}".' => 'Järjestelmä ei löydä pyydettyä toimintoa "{action}".',
  'The system view path "{path}" is not a valid directory.' => 'Järjestelmän view-polku "{path}" ei ole kelvollinen hakemisto.',
  'The table "{table}" for active record class "{class}" cannot be found in the database.' => 'Active record -luokan "{class}" taulua "{table}" ei löydy tietokannasta.',
  'The value for the column "{column}" is not supplied when querying the table "{table}".' => 'Kyseltäessä taulua "{table}", kentän "{column}" arvoa ei annettu.',
  'The verification code is incorrect.' => 'Vahvistuskoodi on virheellinen.',
  'The view path "{path}" is not a valid directory.' => 'View-polku "{path}" ei ole kelvollinen hakemisto.',
  'Theme directory "{directory}" does not exist.' => 'Theme-hakemistoa "{directory}" ei ole olemassa.',
  'This content requires the <a href="http://www.adobe.com/go/getflash/">Adobe Flash Player</a>.' => 'Tämä sisältö vaatii <a href="http://www.adobe.com/go/getflash/">Adobe Flash Playerin</a>.',
  'Unable to add an item whose name is the same as an existing item.' => 'Samannimistä kohdetta ei voi lisätä jo olemassa olevaan kohteeseen.',
  'Unable to change the item name. The name "{name}" is already used by another item.' => 'Kohteen nimeä ei voi vaihtaa. Nimi "{name}" on jo toisen kohteen käytössä.',
  'Unable to create application state file "{file}". Make sure the directory containing the file exists and is writable by the Web server process.' => 'Sovelluksen tilatiedostoa ei voitu luoda. Varmista, että web-palvelimen prosessilla on kirjoitusoikeus hakemistoon, jossa tiedosto sijaitsee, ja että hakemisto on olemassa.',
  'Unable to find "{column}" in table "{table}".' => 'Taulusta "{table}" ei löydy kenttää "{column}".',
  'Unable to generate random string.' => 'Satunnaista merkkijonoa ei pysty generoimaan.',
  'Unable to lock file "{file}" for reading.' => 'Tiedoston "{file}" lukitseminen lukua varten epäonnistui.',
  'Unable to lock file "{file}" for writing.' => 'Tiedoston "{file}" lukitseminen kirjoitusta varten epäonnistui.',
  'Unable to read file "{file}".' => 'Tiedostoa "{file}" ei voida lukea.',
  'Unable to replay the action "{object}.{method}". The method does not exist.' => 'Toimintoa "{object}.{method}" ei voida toistaa. Metodia ei ole olemassa.',
  'Unable to resolve the request "{route}".' => 'Pyynnön selvittäminen "{route}" epäonnistui.',
  'Unable to write file "{file}".' => 'Tiedoston tallennus "{file}" epäonnistui.',
  'Unknown authorization item "{name}".' => 'Tuntematon auktorisointikohde "{name}".',
  'Unknown operator "{operator}".' => 'Tuntematon operaattori "{operator}".',
  'Unknown type "{type}".' => 'Tuntematon tyyppi "{type}".',
  'Unrecognized locale "{locale}".' => 'Tunnistamaton kielitunnus "{locale}".',
  'View file "{file}" does not exist.' => 'Näkymätiedostoa "{file}" ei ole olemassa.',
  'Yes' => 'Kyllä',
  'Yii application can only be created once.' => 'Yii-sovellus voidaan luoda vain kerran.',
  'You are not authorized to perform this action.' => 'Sinulla ei ole tarvittavia oikeuksia toiminnon suorittamiseen.',
  'Your request is invalid.' => 'Pyyntösi on virheellinen.',
  '{attribute} "{value}" has already been taken.' => '{attribute} "{value}" on jo käytössä.',
  '{attribute} "{value}" is invalid.' => '{attribute} "{value}" on virheellinen.',
  '{attribute} cannot accept more than {limit} files.' => '{attribute} ei hyväksy useampaa kuin {limit} tiedostoa.',
  '{attribute} cannot be blank.' => '{attribute} ei voi olla tyhjä.',
  '{attribute} is in the list.' => '{attribute} on listalla.',
  '{attribute} is invalid.' => '{attribute} on virheellinen.',
  '{attribute} is not a valid URL.' => '{attribute} on virheellinen URL.',
  '{attribute} is not a valid email address.' => '{attribute} on virheellinen sähköpostiosoite.',
  '{attribute} is not in the list.' => '{attribute} ei ole listalla.',
  '{attribute} is of the wrong length (should be {length} characters).' => '{attribute} on väärän pituinen (sen tulisi olla {length} merkkiä).',
  '{attribute} is too big (maximum is {max}).' => '{attribute} on liian suuri (enint. {max}).',
  '{attribute} is too long (maximum is {max} characters).' => '{attribute} on liian pitkä (enint. {max} merkkiä).',
  '{attribute} is too short (minimum is {min} characters).' => '{attribute} on liian lyhyt (väh. {min} merkkiä).',
  '{attribute} is too small (minimum is {min}).' => '{attribute} on liian pieni (väh. {min}).',
  '{attribute} must be a number.' => '{attribute} täytyy olla luku.',
  '{attribute} must be an integer.' => '{attribute} täytyy olla kokonaisluku.',
  '{attribute} must be either {true} or {false}.' => '{attribute} täytyy olla joko {true} tai {false}.',
  '{attribute} must be greater than "{compareValue}".' => '{attribute} täytyy olla suurempi kuin "{compareValue}".',
  '{attribute} must be greater than or equal to "{compareValue}".' => '{attribute} täytyy olla suurempi tai yhtä suuri kuin "{compareValue}".',
  '{attribute} must be less than "{compareValue}".' => '{attribute} täytyy olla pienempi kuin "{compareValue}".',
  '{attribute} must be less than or equal to "{compareValue}".' => '{attribute} täytyy olla pienempi tai yhtä suuri kuin "{compareValue}".',
  '{attribute} must be repeated exactly.' => '{attribute} täytyy toistaa täsmälleen.',
  '{attribute} must be {type}.' => '{attribute} täytyy olla {type}.',
  '{attribute} must be {value}.' => '{attribute} täytyy olla {value}.',
  '{attribute} must not be equal to "{compareValue}".' => '{attribute} ei saa olla yhtä suuri kuin "{compareValue}".',
  '{className} does not support add() functionality.' => '{className} ei tue add()-toiminnallisuutta.',
  '{className} does not support delete() functionality.' => '{className} ei tue delete()-toiminnallisuutta.',
  '{className} does not support flushValues() functionality.' => '{className} ei tue flushValues()-toiminnallisuutta.',
  '{className} does not support get() functionality.' => '{className} ei tue get()-toiminnallisuutta.',
  '{className} does not support set() functionality.' => '{className} ei tue set()-toiminnallisuutta.',
  '{class} and its behaviors do not have a method or closure named "{name}".' => '{class} ja sen käyttäytymismallit eivät sisällä metodia tai sulkeumaa nimeltä "{name}".',
  '{class} does not have relation "{name}".' => '{class} ei sisällä relaatiota "{name}".',
  '{class} does not support fetching all table names.' => '{class} ei tue kaikkien taulujen nimien hakua.',
  '{class} has an invalid validation rule. The rule must specify attributes to be validated and the validator name.' => '{class} sisältää virheellisen validointisäännön. Säännön täytyy määritellä validoitavat attribuutit sekä validaattorin nimi.',
  '{class} must specify "model" and "attribute" or "name" property values.' => '{class}-luokan täytyy määrittää "model"- ja "attribute"- tai "name"-ominaisuuksien arvot.',
  '{class} requires the Blowfish option of the PHP crypt() function. This system does not have it.' => '{class} vaatii PHP crypt()-funktion Blowfish-option. Tästä järjestelmästä se puuttuu.',
  '{class} requires the PHP crypt() function. This system does not have it.' => '{class} vaatii PHP crypt()-funktion. Tästä järjestelmästä se puuttuu.',
  '{class}.allowAutoLogin must be set true in order to use cookie-based authentication.' => '{class}.allowAutoLogin täytyy asettaa arvoon true, jotta evästepohjaista autentikointia voi käyttää.',
  '{class}::$cost must be a number.' => '{class}::$cost täytyy olla luku.',
  '{class}::$cost must be between 4 and 31.' => '{class}::$cost täytyy olla 4 ja 31 väliltä.',
  '{class}::authenticate() must be implemented.' => '{class}::authenticate() täytyy olla toteutettuna.',
  '{controller} cannot find the requested view "{view}".' => '{controller} ei löydä pyydettyä näkymää "{view}".',
  '{controller} contains improperly nested widget tags in its view "{view}". A {widget} widget does not have an endWidget() call.' => '{controller} sisältää virheellisesti sisäkkäisiä widget-tageja "{view}"-näkymässä. {widget}-widget ei sisällä endWidget()-kutsua.',
  '{controller} has an extra endWidget({id}) call in its view.' => '{controller} sisältää ylimääräisen endWidget({id})-kutsun näkymässään.',
  '{n} B' => '{n} tavua',
  '{n} GB' => '{n} Gt',
  '{n} KB' => '{n} kt',
  '{n} MB' => '{n} Mt',
  '{n} TB' => '{n} Tt',
  '{n} byte|{n} bytes' => '{n} tavua|{n} tavua',
  '{n} gigabyte|{n} gigabytes' => '{n} gigatavua|{n} gigatavua',
  '{n} kilobyte|{n} kilobytes' => '{n} kilotavua|{n} kilotavua',
  '{n} megabyte|{n} megabytes' => '{n} megatavua|{n} megatavua',
  '{n} terabyte|{n} terabytes' => '{n} teratavua|{n} teratavua',
  '{widget} cannot find the view "{view}".' => '{widget} ei löydä näkymää "{view}".',
);
