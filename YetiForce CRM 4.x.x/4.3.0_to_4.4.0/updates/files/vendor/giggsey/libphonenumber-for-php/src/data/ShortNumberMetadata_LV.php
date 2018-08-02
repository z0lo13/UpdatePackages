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
	'NationalNumberPattern' => '[018]\\d{1,5}',
	'PossibleLength' => [
	  0 => 2,
	  1 => 3,
	  2 => 4,
	  3 => 5,
	  4 => 6,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'tollFree' => [
	'NationalNumberPattern' => '116\\d{3}',
	'ExampleNumber' => '116000',
	'PossibleLength' => [
	  0 => 6,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'premiumRate' => [
	'NationalNumberPattern' => '1180|8(?:2\\d{3}|[89]\\d{2})',
	'ExampleNumber' => '1180',
	'PossibleLength' => [
	  0 => 4,
	  1 => 5,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'emergency' => [
	'NationalNumberPattern' => '0[123]|11[023]',
	'ExampleNumber' => '112',
	'PossibleLength' => [
	  0 => 2,
	  1 => 3,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'shortCode' => [
	'NationalNumberPattern' => '0[1-4]|1(?:1(?:[02-4]|6(?:000|111)|8[0189])|55|655|77)|821[57]4',
	'ExampleNumber' => '112',
	'PossibleLength' => [
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'standardRate' => [
	'NationalNumberPattern' => '1181',
	'ExampleNumber' => '1181',
	'PossibleLength' => [
	  0 => 4,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'carrierSpecific' => [
	'NationalNumberPattern' => '16\\d{2}',
	'ExampleNumber' => '1655',
	'PossibleLength' => [
	  0 => 4,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'smsServices' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'id' => 'LV',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => [
  ],
  'intlNumberFormat' => [
  ],
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
];