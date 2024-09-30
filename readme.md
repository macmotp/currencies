# Curated List of Currencies in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/macmotp/currencies.svg)](https://packagist.org/packages/macmotp/currencies)
[![Total Downloads](https://img.shields.io/packagist/dt/macmotp/currencies.svg)](https://packagist.org/packages/macmotp/currencies)

**Library to Handle Currencies in PHP, simple and light**

Useful for any ecommerce, fintech, or any app that requires 💰.

## Requirements
- PHP >= 8.2

## Installation

Install the package via composer:

```bash
composer require macmotp/currencies
```

**This package is a main dependency for other 2 packages**
- [macmotp/money](https://github.com/macmotp/money);
- [macmotp/locale](https://github.com/macmotp/locale);

## Usage

### Create Currency objects
``` php
use Macmotp\Currency;
use Macmotp\Currencies\Support\CurrencyCode;
use Macmotp\Currencies\Support\CurrencyName;

// All Currencies adopt ISO 4217 standard
$currencyCode = CurrencyCode::USD;

// Create the object
$currency = new Currency($currencyCode);

// You can also input the code as string:
$currency = new Currency('USD');

// Alternative methods:
$currency = Currency::make($currencyCode);
$currency = Currency::fromCode($currencyCode);

echo $currency->toArray();

// [
//    'name' => 'United States Dollar',
//    'code' => 'USD',
//    'symbol' => '$',
//    'flag' => 'us',
//    'format' => [
//       'show_code' => false,
//       'show_symbol' => true,
//       'show_space' => false,
//       'show_symbol_or_code_on_left' => true,
//       'show_decimals' => true,
//       'decimal_separator' => '.',
//       'thousands_separator' => ',',
//       'number_of_decimals' => 2,
//       'subunit_level' => 2,
//    ],
// ]

```
#### List of basic methods
- `getName()`: it returns the name;
- `getCode()`: it returns the code;
- `getSymbol()`: it returns the symbol;
- `getFlag()`: it returns the flag (country code);
- `getFormat()`: it returns the currency format;
- `toArray()`: it converts the object into array;

### List of Currencies in the package
``` php
use Macmotp\Currency;

$list = Currency::all();
// This will return a Illuminate\Support\Collection
```
These are the implemented currencies:
- `AED`: United Arab Emirates Dirham
- `AFN`: Afghan Afghani
- `ALL`: Albanian Lek
- `AMD`: Armenian Dram
- `ANG`: Netherlands Antillean Guilder
- `AOA`: Angolan Kwanza
- `ARS`: Argentine Peso
- `AUD`: Australian Dollar
- `AWG`: Aruban Florin
- `AZN`: Azerbaijani Manat
- `BAM`: Bosnia and Herzegovina Convertible Mark
- `BBD`: Barbados Dollar
- `BDT`: Bangladeshi Taka
- `BGN`: Bulgarian Lev
- `BHD`: Bahraini Dinar
- `BIF`: Burundian Franc
- `BMD`: Bermudian Dollar
- `BND`: Brunei Dollar
- `BOB`: Bolivian Boliviano
- `BRL`: Brazilian Real
- `BSD`: Bahamian Dollar
- `BTC`: Bitcoin
- `BTN`: Bhutanese Ngultrum
- `BWP`: Botswana Pula
- `BYN`: Belarusian Ruble
- `BZD`: Belize Dollar
- `CAD`: Canadian Dollar
- `CDF`: Congolese Franc
- `CHF`: Swiss Franc
- `CLP`: Chilean Peso
- `CNY`: Chinese Yuan - Renminbi
- `COP`: Colombian Peso
- `CRC`: Costa Rican Colón
- `CUP`: Cuban Peso
- `CVE`: Cape Verdean Escudo
- `CZK`: Czech Koruna
- `DJF`: Djiboutian Franc
- `DKK`: Danish Krone
- `DOP`: Dominican Peso
- `DZD`: Algerian Dinar
- `EGP`: Egyptian Pound
- `ERN`: Eritrean Nakfa
- `ETB`: Ethiopian Birr
- `EUR`: Euro
- `FJD`: Fijian Dollar
- `FKP`: Falkland Islands Pound
- `GBP`: British Pound
- `GEL`: Georgian Lari
- `GHS`: Ghanaian Cedi
- `GIP`: Gibraltar Pound
- `GMD`: Gambian Dalasi
- `GNF`: Guinean Franc
- `GTQ`: Guatemalan Quetzal
- `GYD`: Guyanese Dollar
- `HKD`: Hong Kong Dollar
- `HNL`: Honduran Lempira
- `HTG`: Haitian Gourde
- `HUF`: Hungarian Forint
- `IDR`: Indonesian Rupiah
- `ILS`: Israeli New Shekel
- `INR`: Indian Rupee
- `IQD`: Iraqi Dinar
- `IRR`: Iranian Rial
- `ISK`: Icelandic Króna
- `JMD`: Jamaican Dollar
- `JOD`: Jordanian Dinar
- `JPY`: Japanese Yen
- `KES`: Kenyan Shilling
- `KGS`: Kyrgyz Som
- `KHR`: Cambodian Riel
- `KMF`: Comorian Franc
- `KPW`: North Korean Won
- `KRW`: South Korean Won
- `KWD`: Kuwaiti Dinar
- `KYD`: Cayman Islands Dollar
- `KZT`: Kazakhstani Tenge
- `LAK`: Lao Kip
- `LBP`: Lebanese Pound
- `LKR`: Sri Lankan Rupee
- `LRD`: Liberian Dollar
- `LSL`: Lesotho Loti
- `LYD`: Libyan Dinar
- `MAD`: Moroccan Dirham
- `MDL`: Moldovan Leu
- `MGA`: Malagasy Ariary
- `MKD`: Macedonian Denar
- `MMK`: Burmese Kyat
- `MNT`: Mongolian Tögrög
- `MOP`: Macanese Pataca
- `MRU`: Mauritanian Ouguiya
- `MUR`: Mauritian Rupee
- `MVR`: Maldivian Rufiyaa
- `MWK`: Malawian Kwacha
- `MXN`: Mexican Peso
- `MYR`: Malaysian Ringgit
- `MZN`: Mozambican Metical
- `NAD`: Namibian Dollar
- `NGN`: Nigerian Naira
- `NIO`: Nicaraguan Córdoba
- `NOK`: Norwegian Krone
- `NPR`: Nepalese Rupee
- `NZD`: New Zealand Dollar
- `OMR`: Omani Rial
- `PAB`: Panamanian Balboa
- `PEN`: Peruvian Sol
- `PGK`: Papua New Guinean Kina
- `PHP`: Philippine Peso
- `PKR`: Pakistani Rupee
- `PLN`: Polish Złoty
- `PYG`: Paraguayan Guaraní
- `QAR`: Qatari Riyal
- `RON`: Romanian Leu
- `RSD`: Serbian Dinar
- `RUB`: Russian Ruble
- `RWF`: Rwandan Franc
- `SAR`: Saudi Riyal
- `SBD`: Solomon Islands Dollar
- `SCR`: Seychellois Rupee
- `SDG`: Sudanese Pound
- `SEK`: Swedish Krona
- `SGD`: Singapore Dollar
- `SHP`: Saint Helena Pound
- `SLE`: Sierra Leonean Leone
- `SOS`: Somali Shilling
- `SRD`: Surinamese Dollar
- `SSP`: South Sudanese Pound
- `STN`: São Tomé and Príncipe Dobra
- `SYP`: Syrian Pound
- `SZL`: Swazi Lilangeni
- `THB`: Thai Baht
- `TJS`: Tajikistani Somoni
- `TMT`: Turkmenistani Manat
- `TND`: Tunisian Dinar
- `TOP`: Tongan Paʻanga
- `TRY`: Turkish Lira
- `TTD`: Trinidad and Tobago Dollar
- `TWD`: New Taiwan Dollar
- `TZS`: Tanzanian Shilling
- `UAH`: Ukrainian Hryvnia
- `UGX`: Ugandan Shilling
- `USD`: United States Dollar
- `UYU`: Uruguayan Peso
- `UZS`: Uzbekistani Sum
- `VES`: Venezuelan Sovereign Bolívar
- `VND`: Vietnamese Đồng
- `VUV`: Vanuatu Vatu
- `WST`: Samoan Tālā
- `XAF`: Central African CFA Franc
- `XCD`: Eastern Caribbean Dollar
- `XOF`: West African CFA Franc
- `XPF`: CFP Franc
- `YER`: Yemeni Rial
- `ZAR`: South African Rand
- `ZMW`: Zambian Kwacha
- `ZWG`: Zimbabwe Gold

_If you want to add another currency, please open an issue._

## Testing

``` bash
composer test
```

## Changelog

Please see [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing](.github/contributing.md) for details.

## Security Vulnerabilities

Please review [our security policy](.github/security.md) on how to report security vulnerabilities.

## Credits

- [Marco Gava](https://github.com/macmotp)

## License

The MIT License (MIT). Please see [License File](license.md) for more information.
