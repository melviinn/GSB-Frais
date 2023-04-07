<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sq', array (
  'validators' => 
  array (
    'This value should be false.' => 'Kjo vlerë duhet të jetë e pavërtetë (false).',
    'This value should be true.' => 'Kjo vlerë duhet të jetë e vërtetë (true).',
    'This value should be of type {{ type }}.' => 'Kjo vlerë duhet të jetë e llojit {{ type }}.',
    'This value should be blank.' => 'Kjo vlerë duhet të jetë e zbrazët.',
    'The value you selected is not a valid choice.' => 'Vlera që keni zgjedhur nuk është alternativë e vlefshme.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Duhet të zgjedhni së paku {{ limit }} alternativë.|Duhet të zgjedhni së paku {{ limit }} alternativa.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Duhet të zgjedhni më së shumti {{ limit }} alternativë.|Duhet të zgjedhni më së shumti {{ limit }} alternativa.',
    'One or more of the given values is invalid.' => 'Një apo më shumë nga vlerat e dhëna janë të pavlefshme.',
    'This field was not expected.' => 'Kjo fushë nuk pritej.',
    'This field is missing.' => 'Kjo fushë mungon.',
    'This value is not a valid date.' => 'Kjo vlerë nuk është datë e vlefshme.',
    'This value is not a valid datetime.' => 'Kjo vlerë nuk është datë-kohë e vlefshme.',
    'This value is not a valid email address.' => 'Kjo vlerë nuk është adresë email-i e vlefshme.',
    'The file could not be found.' => 'File nuk mund të gjindej.',
    'The file is not readable.' => 'File nuk është i lexueshëm.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'File është shumë i madh ({{ size }} {{ suffix }}). Madhësia maksimale e lejuar është {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Lloji mime i file-it është i pavlefshëm ({{ type }}). Llojet mime të lejuara janë {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Kjo vlerë duhet të jetë {{ limit }} ose më pak.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Kjo vlerë është shumë e gjatë. Duhet të përmbaj {{ limit }} karakter ose më pak.|Kjo vlerë është shumë e gjatë. Duhet të përmbaj {{ limit }} karaktere ose më pak.',
    'This value should be {{ limit }} or more.' => 'Kjo vlerë duhet të jetë {{ limit }} ose më shumë.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Kjo vlerë është shumë e shkurtër. Duhet të përmbaj {{ limit }} karakter ose më shumë.|Kjo vlerë është shumë e shkurtër. Duhet të përmbaj {{ limit }} karaktere ose më shumë.',
    'This value should not be blank.' => 'Kjo vlerë nuk duhet të jetë e zbrazët.',
    'This value should not be null.' => 'Kjo vlerë nuk duhet të jetë null.',
    'This value should be null.' => 'Kjo vlerë duhet të jetë null.',
    'This value is not valid.' => 'Kjo vlerë nuk është e vlefshme.',
    'This value is not a valid time.' => 'Kjo vlerë nuk është kohë e vlefshme.',
    'This value is not a valid URL.' => 'Kjo vlerë nuk është URL e vlefshme.',
    'The two values should be equal.' => 'Këto dy vlera duhet të jenë të barabarta.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ky file është shumë i madh. Madhësia maksimale e lejuar është {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Ky file është shumë i madh.',
    'The file could not be uploaded.' => 'Ky file nuk mund të ngarkohet.',
    'This value should be a valid number.' => 'Kjo vlerë duhet të jetë numër i vlefshëm.',
    'This file is not a valid image.' => 'Ky file nuk është imazh i vlefshëm.',
    'This is not a valid IP address.' => 'Kjo adresë IP nuk është e vlefshme.',
    'This value is not a valid language.' => 'Kjo vlerë nuk është gjuhë e vlefshme.',
    'This value is not a valid locale.' => 'Kjo vlerë nuk është nje locale i vlefshëm.',
    'This value is not a valid country.' => 'Kjo vlerë nuk është shtet i vlefshëm.',
    'This value is already used.' => 'Kjo vlerë është tashmë në përdorim.',
    'The size of the image could not be detected.' => 'Madhësia e imazhit nuk mund të zbulohet.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Gjerësia e imazhit është shumë e madhe ({{ width }}px). Gjerësia maksimale e lejuar është {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Gjerësia e imazhit është shumë e vogël ({{ width }}px). Gjerësia minimale e pritur është {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Gjatësia e imazhit është shumë e madhe ({{ height }}px). Gjatësia maksimale e lejuar është {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Gjatësia e imazhit është shumë e vogël ({{ height }}px). Gjatësia minimale e pritur është {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Kjo vlerë duhet të jetë fjalëkalimi aktual i përdoruesit.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Kjo vlerë duhet të ketë saktësisht {{ limit }} karakter.|Kjo vlerë duhet të ketë saktësisht {{ limit }} karaktere.',
    'The file was only partially uploaded.' => 'Ky file është ngarkuar pjesërisht.',
    'No file was uploaded.' => 'Nuk është ngarkuar ndonjë file.',
    'No temporary folder was configured in php.ini.' => 'Asnjë folder i përkohshëm nuk është konfiguruar në php.ini.',
    'Cannot write temporary file to disk.' => 'Nuk mund të shkruhet file i përkohshëm në disk.',
    'A PHP extension caused the upload to fail.' => 'Një ekstension i PHP-së shkaktoi dështimin e ngarkimit.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ky koleksion duhet të përmbajë {{ limit }} element ose më shumë.|Ky koleksion duhet të përmbajë {{ limit }} elemente ose më shumë.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ky koleksion duhet të përmbajë {{ limit }} element ose më pak.|Ky koleksion duhet të përmbajë {{ limit }} elemente ose më pak.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ky koleksion duhet të përmbajë saktësisht {{ limit }} element.|Ky koleksion duhet të përmbajë saktësisht {{ limit }} elemente.',
    'Invalid card number.' => 'Numër karte i pavlefshëm.',
    'Unsupported card type or invalid card number.' => 'Lloj karte i papranuar ose numër karte i pavlefshëm.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ky nuk është një numër i vlefshëm ndërkombëtar i llogarisë bankare (IBAN).',
    'This value is not a valid ISBN-10.' => 'Kjo vlerë nuk është një ISBN-10 e vlefshme.',
    'This value is not a valid ISBN-13.' => 'Kjo vlerë nuk është një ISBN-13 e vlefshme.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Kjo vlerë nuk është as ISBN-10 e vlefshme as ISBN-13 e vlefshme.',
    'This value is not a valid ISSN.' => 'Kjo vlerë nuk është një ISSN e vlefshme.',
    'This value is not a valid currency.' => 'Kjo vlerë nuk është një monedhë e vlefshme.',
    'This value should be equal to {{ compared_value }}.' => 'Kjo vlerë duhet të jetë e barabartë me {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Kjo vlerë duhet të jetë më e madhe se {{ compared_value }}. ',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Kjo vlerë duhet të jetë më e madhe ose e barabartë me {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Kjo vlerë duhet të jetë identike me {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Kjo vlerë duhet të jetë më vogël se {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Kjo vlerë duhet të jetë më e vogël ose e barabartë me {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Kjo vlerë nuk duhet të jetë e barabartë me {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Kjo vlerë nuk duhet të jetë identike me {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Raporti i imazhit është shumë i madh ({{ ratio }}). Raporti maksimal i lejuar është {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Raporti i imazhit është shumë i vogël ({{ ratio }}). Raporti minimal pritet të jetë {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Imazhi është katror ({{ width }}x{{ height }}px). Imazhet katrore nuk janë të lejuara.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Imazhi është i orientuar horizontalisht ({{ width }}x{{ height }}px). Imazhet e orientuara horizontalisht nuk lejohen.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Imazhi është i orientuar vertikalisht ({{ width }}x{{ height }}px). Imazhet orientuara vertikalisht nuk lejohen.',
    'An empty file is not allowed.' => 'Një file i zbrazët nuk lejohet.',
    'The host could not be resolved.' => 'Host-i nuk mund te zbulohej.',
    'This value does not match the expected {{ charset }} charset.' => 'Kjo vlerë nuk përputhet me kodifikimin e karaktereve {{ charset }} që pritej.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ky nuk është një Kod Identifikues i Biznesit (BIC) i vleflshem.',
    'Error' => 'Gabim',
    'This is not a valid UUID.' => 'Ky nuk është një UUID i vlefshëm.',
    'This value should be a multiple of {{ compared_value }}.' => 'Kjo vlerë duhet të jetë një shumëfish i {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ky Kod Identifikues i Biznesit (BIC) nuk është i lidhur me IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Kjo vlerë duhet të jetë JSON i vlefshëm.',
    'This collection should contain only unique elements.' => 'Ky koleksion duhet të përmbajë vetëm elementë unikë.',
    'This value should be positive.' => 'Kjo vlerë duhet të jetë pozitive.',
    'This value should be either positive or zero.' => 'Kjo vlerë duhet të jetë pozitive ose zero.',
    'This value should be negative.' => 'Kjo vlerë duhet të jetë negative.',
    'This value should be either negative or zero.' => 'Kjo vlerë duhet të jetë negative ose zero.',
    'This value is not a valid timezone.' => 'Kjo vlerë nuk është një zonë e vlefshme kohore.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ky fjalëkalim është zbuluar në një shkelje të të dhënave, nuk duhet të përdoret. Ju lutemi përdorni një fjalëkalim tjetër.',
    'This value should be between {{ min }} and {{ max }}.' => 'Kjo vlerë duhet të jetë ndërmjet {{ min }} dhe {{ max }}.',
    'This value is not a valid hostname.' => 'Kjo vlerë nuk është një emër i vlefshëm hosti.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Numri i elementeve në këtë koleksion duhet të jetë një shumëfish i {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Kjo vlerë duhet të plotësojë të paktën njërën nga kufizimet e mëposhtme:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Secili element i këtij koleksioni duhet të përmbushë kufizimet e veta.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Kjo vlerë nuk është një numër i vlefshëm identifikues ndërkombëtar i sigurisë (ISIN).',
    'This form should not contain extra fields.' => 'Kjo formë nuk duhet të përmbajë fusha shtesë.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Skedari i ngarkuar ishte shumë i madh. Ju lutemi provoni të ngarkoni një skedar më të vogël.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Vlera CSRF është e pavlefshme. Ju lutemi provoni të ridërgoni formën.',
    'This value is not a valid HTML5 color.' => 'Kjo vlerë nuk është një ngjyrë e vlefshme HTML5.',
    'Please enter a valid birthdate.' => 'Ju lutemi shkruani një datëlindje të vlefshme.',
    'The selected choice is invalid.' => 'Opsioni i zgjedhur është i pavlefshëm.',
    'The collection is invalid.' => 'Koleksioni është i pavlefshëm.',
    'Please select a valid color.' => 'Ju lutemi zgjidhni një ngjyrë të vlefshme.',
    'Please select a valid country.' => 'Ju lutemi zgjidhni një shtet të vlefshëm.',
    'Please select a valid currency.' => 'Ju lutemi zgjidhni një monedhë të vlefshme.',
    'Please choose a valid date interval.' => 'Ju lutemi zgjidhni një interval të vlefshëm të datës.',
    'Please enter a valid date and time.' => 'Ju lutemi shkruani një datë dhe orë të vlefshme.',
    'Please enter a valid date.' => 'Ju lutemi shkruani një datë të vlefshme.',
    'Please select a valid file.' => 'Ju lutemi zgjidhni një skedar të vlefshëm.',
    'The hidden field is invalid.' => 'Fusha e fshehur është e pavlefshme.',
    'Please enter an integer.' => 'Ju lutemi shkruani një numër të plotë.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Ju lutemi zgjidhni një lokale të vlefshme.',
    'Please enter a valid money amount.' => 'Ju lutemi shkruani një shumë të vlefshme parash.',
    'Please enter a number.' => 'Ju lutemi shkruani një numër.',
    'The password is invalid.' => 'Fjalëkalimi është i pavlefshëm.',
    'Please enter a percentage value.' => 'Ju lutemi shkruani një vlerë përqindjeje.',
    'The values do not match.' => 'Vlerat nuk përputhen.',
    'Please enter a valid time.' => 'Ju lutemi shkruani një kohë të vlefshme.',
    'Please select a valid timezone.' => 'Ju lutemi zgjidhni një zonë kohore të vlefshme.',
    'Please enter a valid URL.' => 'Ju lutemi shkruani një URL të vlefshme.',
    'Please enter a valid search term.' => 'Ju lutemi shkruani një term të vlefshëm kërkimi.',
    'Please provide a valid phone number.' => 'Ju lutemi jepni një numër telefoni të vlefshëm.',
    'The checkbox has an invalid value.' => 'Kutia e zgjedhjes ka një vlerë të pavlefshme.',
    'Please enter a valid email address.' => 'Ju lutemi shkruani një adresë të vlefshme emaili.',
    'Please select a valid option.' => 'Ju lutemi zgjidhni një opsion të vlefshëm.',
    'Please select a valid range.' => 'Ju lutemi zgjidhni një diapazon të vlefshëm.',
    'Please enter a valid week.' => 'Ju lutemi shkruani një javë të vlefshme.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ndodhi një problem në autentikim.',
    'Authentication credentials could not be found.' => 'Kredencialet e autentikimit nuk mund të gjendeshin.',
    'Authentication request could not be processed due to a system problem.' => 'Kërkesa për autentikim nuk mund të përpunohej për shkak të një problemi në sistem.',
    'Invalid credentials.' => 'Kredenciale të pavlefshme.',
    'Cookie has already been used by someone else.' => 'Cookie është përdorur tashmë nga dikush tjetër.',
    'Not privileged to request the resource.' => 'Nuk është i privilegjuar të kërkojë burimin.',
    'Invalid CSRF token.' => 'Identifikues i pavlefshëm CSRF.',
    'No authentication provider found to support the authentication token.' => 'Asnjë ofrues i vërtetimit nuk u gjet që të mbështesë simbolin e vërtetimit.',
    'No session available, it either timed out or cookies are not enabled.' => 'Nuk ka asnjë sesion të vlefshëm, i ka skaduar koha ose cookies nuk janë aktivizuar.',
    'No token could be found.' => 'Asnjë simbol identifikimi nuk mund të gjendej.',
    'Username could not be found.' => 'Emri i përdoruesit nuk mund të gjendej.',
    'Account has expired.' => 'Llogaria ka skaduar.',
    'Credentials have expired.' => 'Kredencialet kanë skaduar.',
    'Account is disabled.' => 'Llogaria është çaktivizuar.',
    'Account is locked.' => 'Llogaria është e kyçur.',
    'Too many failed login attempts, please try again later.' => 'Shumë përpjekje të dështuara autentikimi, provo përsëri më vonë.',
    'Invalid or expired login link.' => 'Link hyrje i pavlefshëm ose i skaduar.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid password entered!',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Email not found!',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
