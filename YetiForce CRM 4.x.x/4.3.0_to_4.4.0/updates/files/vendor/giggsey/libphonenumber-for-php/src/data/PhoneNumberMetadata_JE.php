<?php
/**
 * This file has been @generated by a phing task by {@link BuildMetadataPHPFromXml}.
 * See [README.md](README.md#generating-data) for more information.
 *
 * Pull requests changing data in these files will not be accepted. See the
 * [FAQ in the README](README.md#problems-with-invalid-numbers] on how to make
 * metadata changes.
 *
 * Do not modify this file directly!
 */

return [
  'generalDesc' => [
	'NationalNumberPattern' => '(?:1534|(?:[3578]\\d|90)\\d\\d)\\d{6}',
	'PossibleLength' => [
	  0 => 10,
	],
	'PossibleLengthLocalOnly' => [
	  0 => 6,
	],
  ],
  'fixedLine' => [
	'NationalNumberPattern' => '1534[0-24-8]\\d{5}',
	'ExampleNumber' => '1534456789',
	'PossibleLength' => [
	],
	'PossibleLengthLocalOnly' => [
	  0 => 6,
	],
  ],
  'mobile' => [
	'NationalNumberPattern' => '7(?:509\\d|7(?:00[378]|97[7-9])|829\\d|937\\d)\\d{5}',
	'ExampleNumber' => '7797712345',
	'PossibleLength' => [
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'tollFree' => [
	'NationalNumberPattern' => '80(?:07(?:35|81)|8901)\\d{4}',
	'ExampleNumber' => '8007354567',
	'PossibleLength' => [
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'premiumRate' => [
	'NationalNumberPattern' => '(?:871206|90(?:066[59]|1810|71(?:07|55)))\\d{4}',
	'ExampleNumber' => '9018105678',
	'PossibleLength' => [
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'sharedCost' => [
	'NationalNumberPattern' => '8(?:4(?:4(?:4(?:05|42|69)|703)|5(?:041|800))|70002)\\d{4}',
	'ExampleNumber' => '8447034567',
	'PossibleLength' => [
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'personalNumber' => [
	'NationalNumberPattern' => '701511\\d{4}',
	'ExampleNumber' => '7015115678',
	'PossibleLength' => [
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'voip' => [
	'NationalNumberPattern' => '56\\d{8}',
	'ExampleNumber' => '5612345678',
	'PossibleLength' => [
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'pager' => [
	'NationalNumberPattern' => '76(?:0[012]|2[356]|4[0134]|5[49]|6[0-369]|77|81|9[39])\\d{6}',
	'ExampleNumber' => '7640123456',
	'PossibleLength' => [
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'uan' => [
	'NationalNumberPattern' => '3(?:0(?:07(?:35|81)|8901)|3\\d{4}|4(?:4(?:4(?:05|42|69)|703)|5(?:041|800))|7(?:0002|1206))\\d{4}|55\\d{8}',
	'ExampleNumber' => '5512345678',
	'PossibleLength' => [
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'voicemail' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'noInternationalDialling' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'id' => 'JE',
  'countryCode' => 44,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => [
  ],
  'intlNumberFormat' => [
  ],
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
];