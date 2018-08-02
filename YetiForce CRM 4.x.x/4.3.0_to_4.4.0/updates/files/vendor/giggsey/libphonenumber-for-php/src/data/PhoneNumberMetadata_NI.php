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
	'NationalNumberPattern' => '(?:1800|[25-8]\\d{3})\\d{4}',
	'PossibleLength' => [
	  0 => 8,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'fixedLine' => [
	'NationalNumberPattern' => '2\\d{7}',
	'ExampleNumber' => '21234567',
	'PossibleLength' => [
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'mobile' => [
	'NationalNumberPattern' => '(?:5(?:5[0-7]|[78]\\d)|6(?:20|3[035]|4[045]|5[05]|77|8[1-9]|9[059])|7[5-8]\\d|8\\d{2})\\d{5}',
	'ExampleNumber' => '81234567',
	'PossibleLength' => [
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'tollFree' => [
	'NationalNumberPattern' => '1800\\d{4}',
	'ExampleNumber' => '18001234',
	'PossibleLength' => [
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
	'PossibleLength' => [
	  0 => -1,
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
  'id' => 'NI',
  'countryCode' => 505,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => [
	0 => [
	  'pattern' => '(\\d{4})(\\d{4})',
	  'format' => '$1 $2',
	  'leadingDigitsPatterns' => [
	  ],
	  'nationalPrefixFormattingRule' => '',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
  ],
  'intlNumberFormat' => [
  ],
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
];