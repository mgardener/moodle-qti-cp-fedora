<?php

$string['pluginname'] = 'Fedora';

$string['base_url'] = 'Base URL';
$string['content_access_url'] = ' Content access url';
$string['client_certificate_file'] = 'Client certificate file';
$string['client_certificate_key_file'] = 'Client certificate key file';
$string['client_certificate_key_password'] = 'Client certificate key password';
$string['check_target_certificate'] = 'Check target certificate';
$string['target_ca_file'] = 'Target ca file';
$string['basic_login'] = 'Login';
$string['basic_password'] = 'Password';
$string['max_results'] = 'Max results';

$string['base_url_help'] = 'Enter the base url to your fedora repository. <br />Make sure to enter http<b>s</b> if you need secured access as the current implementation doesn\'t support redirections.<p>Default: https://(your domain)/fedora</p>';
$string['content_access_url_help'] = 'Enter the URL used to get the object\'s content. <br />Make sure to enter http<b>s</b> if you need secured access as the current implementation doesn\'t support redirections.<p>Default: https://(your domain)/fedora/objects/$pid/datastreams/$dsID/content</p>';
$string['api_help'] = 'Select an API to access Fedora. The API sets how your fedora instance is accessed. I.e. query methods, metadata, use of collections or not, etc. <p>Default: UniGe</p>';
$string['client_certificate_file_help'] = 'File path to the certificate used for autentication. If not needed leave blank. <p>Default: contact your system administrator.</p>';
$string['client_certificate_key_file_help'] = 'File path to your private key. Used for authentication. If not needed leave blank. <p>Default: contact your system administrator.</p>';
$string['client_certificate_key_password_help'] = 'Password used to access your private key. <p>Default: contact your system administrator.</p>';
$string['check_target_certificate_help'] = 'If \'true\' check if your certificate has been provided by a valid - CA - provider. If blank or \'false\' use the certificate without checking if it comes from a valid CA provider. <p>Default: leave blank.</p>';
$string['target_ca_file_help'] = 'The file path to the CA certificate used to validate your authentication certificate.<p>Default: leave blank.</p>';
$string['basic_login_help'] = 'Login used for basic authentication. Normally this is required to call the M - modification - api.<p>Default: fedoraAdmin.</p>';
$string['basic_password_help'] = 'Password used for basic authentication. <p>Default: contact your system administrator.</p>';
$string['max_results_help'] = 'Maximum number of records returned by Fedora. <p>Default: 250.</p>';

$string['public'] = 'Public';
$string['private'] = 'Private';
$string['api'] = 'API';
$string['field_required'] = 'This field is required';

$string['owner'] = 'Owner';
$string['title'] = 'Title';
$string['label'] = 'Label';
$string['creator'] = 'Creator';
$string['accessRights'] = 'Access rights';
$string['rights'] = 'Rights';
$string['license'] = 'License';
$string['discipline'] = 'Discipline';
$string['collections'] = 'Collections';
$string['aaid'] = 'AAID';
$string['contributor'] = 'Contributor';
$string['publisher'] = 'Publisher';
$string['rightsHolder'] = 'Rights holder';
$string['tableOfContents'] = 'Table of content';
$string['abstract'] = 'Abstract';
$string['subject'] = 'Subject';
$string['description'] = 'Description';
$string['language'] = 'Language';
$string['educationLevel'] = 'Education level';
$string['instructionalMethod'] = 'Instructional method';
$string['issued'] = 'Issued';
$string['alternative'] = 'Alternative';
$string['type'] = 'Type';
$string['extent'] = 'Extent';
$string['source'] = 'Source';
$string['identifier'] = 'Identifier';
$string['summary'] = 'Summary';
$string['author'] = 'Author';
$string['content'] = 'Content';
$string['collaborator'] = 'Collaborator';
$string['classification'] = 'Classification';
$string['federation'] = 'Federation';
$string['institution'] = 'Institution';

$string['file_exists'] = 'File exists';
$string['true'] = 'True';
$string['false'] = 'False';

$string['switch_license_ch'] = 'Attribution 2.5 Switzerland';
$string['switch_license_nc'] = 'Attribution-Noncommercial 2.5 Switzerland';
$string['switch_license_nc_nd'] = 'Attribution-Noncommercial-No Derivative Works 2.5 Switzerland';
$string['switch_license_nc_sa'] = 'Attribution-Noncommercial-Share Alike 2.5 Switzerland';
$string['switch_license_nd'] = 'Attribution-No Derivative Works 2.5 Switzerland';
$string['switch_license_sa'] = 'Attribution-Share Alike 2.5 Switzerland';
$string['switch_license_content_defined'] = 'As defined in content';

$string['switch_discipline_1932'] = 'Arts & Culture';
$string['switch_discipline_5314'] = 'Architecture';
$string['switch_discipline_5575'] = 'Spatial planning';
$string['switch_discipline_6302'] = 'Landscape architecture';
$string['switch_discipline_9202'] = 'Art history';
$string['switch_discipline_8202'] = 'Music';
$string['switch_discipline_2043'] = 'Music education';
$string['switch_discipline_9610'] = 'School and church music';
$string['switch_discipline_3829'] = 'Theatre';
$string['switch_discipline_5395'] = 'Film';
$string['switch_discipline_1497'] = 'Visual arts';
$string['switch_discipline_3119'] = 'Design';
$string['switch_discipline_5103'] = 'Visual communication';
$string['switch_discipline_6095'] = 'Industrial design';
$string['switch_discipline_4832'] = 'Humanities';
$string['switch_discipline_4761'] = 'Philosophy';
$string['switch_discipline_3867'] = 'Theology';
$string['switch_discipline_5633'] = 'Protestant theology';
$string['switch_discipline_9787'] = 'Roman catholic theology';
$string['switch_discipline_6527'] = 'General theology';
$string['switch_discipline_8796'] = 'History';
$string['switch_discipline_7210'] = 'Linguistics & Literature (LL)';
$string['switch_discipline_7408'] = 'Linguistics';
$string['switch_discipline_4391'] = 'German LL';
$string['switch_discipline_9472'] = 'French LL';
$string['switch_discipline_3468'] = 'Italian LL';
$string['switch_discipline_5424'] = 'Rhaeto-Romanic LL';
$string['switch_discipline_9391'] = 'English LL';
$string['switch_discipline_6230'] = 'Other modern European languages';
$string['switch_discipline_9557'] = 'Classical European languages';
$string['switch_discipline_5676'] = 'Other non-European languages';
$string['switch_discipline_7599'] = 'Translation studies';
$string['switch_discipline_1438'] = 'Archeology';
$string['switch_discipline_8637'] = 'Social sciences';
$string['switch_discipline_6005'] = 'Psychology';
$string['switch_discipline_6525'] = 'Sociology';
$string['switch_discipline_7288'] = 'Social work';
$string['switch_discipline_1514'] = 'Political science';
$string['switch_discipline_9619'] = 'Communication and media studies';
$string['switch_discipline_8367'] = 'Ethnology';
$string['switch_discipline_1774'] = 'Gender studies';
$string['switch_discipline_1861'] = 'Law';
$string['switch_discipline_4890'] = 'Business law';
$string['switch_discipline_6950'] = 'Business';
$string['switch_discipline_7290'] = 'Economics';
$string['switch_discipline_1676'] = 'Business Administration';
$string['switch_discipline_4949'] = 'Business Informatics';
$string['switch_discipline_2108'] = 'Facility Management';
$string['switch_discipline_7641'] = 'Hotel business';
$string['switch_discipline_6238'] = 'Tourism';
$string['switch_discipline_2990'] = 'Natural sciences & Mathematics';
$string['switch_discipline_2158'] = 'Mathematics';
$string['switch_discipline_1266'] = 'Computer science';
$string['switch_discipline_8990'] = 'Astronomy';
$string['switch_discipline_6986'] = 'Physics';
$string['switch_discipline_6451'] = 'Chemistry';
$string['switch_discipline_4195'] = 'Biology';
$string['switch_discipline_7793'] = 'Ecology';
$string['switch_discipline_5255'] = 'Earth Sciences';
$string['switch_discipline_7950'] = 'Geography';
$string['switch_discipline_9321'] = 'Technology & Applied sciences';
$string['switch_discipline_7303'] = 'Telecommunication';
$string['switch_discipline_5742'] = 'Electrical Engineering';
$string['switch_discipline_8189'] = 'Mechanical Engineering';
$string['switch_discipline_8502'] = 'Microtechnology';
$string['switch_discipline_5324'] = 'Automoive Engineering';
$string['switch_discipline_1566'] = 'Material sciences';
$string['switch_discipline_7132'] = 'Building Engineering';
$string['switch_discipline_2979'] = 'Forestry';
$string['switch_discipline_3624'] = 'Agriculture';
$string['switch_discipline_1442'] = 'Enology';
$string['switch_discipline_9768'] = 'Food technology';
$string['switch_discipline_5727'] = 'Chemical Engineering';
$string['switch_discipline_1892'] = 'Biotechnology';
$string['switch_discipline_2850'] = 'Environmental Engineering';
$string['switch_discipline_9389'] = 'Construction Science';
$string['switch_discipline_2527'] = 'Civil Engineering';
$string['switch_discipline_9738'] = 'Rural Engineering and Surveying';
$string['switch_discipline_4380'] = 'Production and Enterprise';
$string['switch_discipline_8220'] = 'Health';
$string['switch_discipline_5955'] = 'Human medicine';
$string['switch_discipline_2075'] = 'Dentistry';
$string['switch_discipline_3787'] = 'Veterinary medicine';
$string['switch_discipline_3424'] = 'Pharmacy';
$string['switch_discipline_5516'] = 'Nursing';
$string['switch_discipline_4864'] = 'Therapy';
$string['switch_discipline_7072'] = 'Physiotherapy';
$string['switch_discipline_6688'] = 'Occupational therapy';
$string['switch_discipline_5214'] = 'Education';
$string['switch_discipline_9955'] = 'Teacher education';
$string['switch_discipline_6409'] = 'Primary school';
$string['switch_discipline_7008'] = 'Secondary school I';
$string['switch_discipline_4233'] = 'Secondary school II';
$string['switch_discipline_1672'] = 'Logopedics';
$string['switch_discipline_1406'] = 'Pedagogy';
$string['switch_discipline_2150'] = 'Special education';
$string['switch_discipline_3822'] = 'Orthopedagogy';
$string['switch_discipline_5889'] = 'Interdisciplinary & Other';
$string['switch_discipline_6059'] = 'Information & documentation';
$string['switch_discipline_8683'] = 'Sport';
$string['switch_discipline_5561'] = 'Military sciences';