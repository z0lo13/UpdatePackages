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
	'NationalNumberPattern' => '(?:[37]\\d|6[0-79])\\d{6}|(?:[2-48]\\d|50)\\d{3}',
	'PossibleLength' => [
	  0 => 5,
	  1 => 8,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'fixedLine' => [
	'NationalNumberPattern' => '(?:[24]\\d|3[1-9]|50|8[0-5])\\d{3}|(?:65(?:02[12]|12[56]|22[89]|[3-5]00)|7(?:27\\d{2}|3100|5(?:02[12]|12[56]|22[89]|[34](?:00|81)|500)))\\d{3}',
	'ExampleNumber' => '31234',
	'PossibleLength' => [
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'mobile' => [
	'NationalNumberPattern' => '(?:6(?:200[01]|30[01]\\d)|7(?:200[01]|3(?:0[0-5]\\d|140)))\\d{3}',
	'ExampleNumber' => '72001234',
	'PossibleLength' => [
	  0 => 8,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'tollFree' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'premiumRate' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'sharedCost' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'personalNumber' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'voip' => [
	'NationalNumberPattern' => '30(?:0[01]\\d{2}|12(?:11|20))\\d{2}',
	'ExampleNumber' => '30010000',
	'PossibleLength' => [
	  0 => 8,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'pager' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'uan' => [
	'PossibleLength' => [
	  0 => -1,
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
  'id' => 'KI',
  'countryCode' => 686,
  'internationalPrefix' => '00',
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