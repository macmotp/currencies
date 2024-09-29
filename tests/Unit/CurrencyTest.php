<?php

namespace Macmotp\Currency\Tests\Unit;

use Illuminate\Support\Collection;
use Macmotp\Currency;
use Macmotp\Exceptions\InvalidCurrencyCodeException;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use PHPUnit\Framework\TestCase;

/**
 * Class CurrencyTest
 *
 * @package Macmotp\Currency\Tests\Unit
 * @group Currency
 */
class CurrencyTest extends TestCase
{
    /**
     * @dataProvider listCurrencies
     *
     * @param CurrencyCode $inputCurrency
     * @param string $outputName
     * @param string $outputCode
     * @param string $outputSymbol
     * @param string $outputFlag
     * @return void
     * @throws InvalidCurrencyCodeException
     */
    public function testCurrencyConstructor(
        CurrencyCode $inputCurrency,
        string       $outputName,
        string       $outputCode,
        string       $outputSymbol,
        string       $outputFlag,
    ): void
    {
        $currency = new Currency($inputCurrency);

        $this->assertEquals($outputName, $currency->getName());
        $this->assertEquals($outputCode, $currency->getCode());
        $this->assertEquals($outputSymbol, $currency->getSymbol());
        $this->assertEquals($outputFlag, $currency->getFlag());
    }

    /**
     * @dataProvider listCurrencyFormats
     *
     * @param CurrencyCode $inputCurrency
     * @param bool $showSymbol
     * @param bool $showCode
     * @param bool $showSpace
     * @param bool $showSymbolOrCodeOnLeft
     * @param bool $showDecimals
     * @param string $decimalSeparator
     * @param string $thousandsSeparator
     * @param int $numberOfDecimals
     * @param int $subunitLevel
     * @return void
     * @throws InvalidCurrencyCodeException
     */
    public function testCurrenciesFormats(
        CurrencyCode $inputCurrency,
        bool         $showSymbol,
        bool         $showCode,
        bool         $showSpace,
        bool         $showSymbolOrCodeOnLeft,
        bool         $showDecimals,
        string       $decimalSeparator,
        string       $thousandsSeparator,
        int          $numberOfDecimals,
        int          $subunitLevel,
    ): void
    {
        $currency = new Currency($inputCurrency);

        $this->assertEquals(new CurrencyFormat(
            showSymbol: $showSymbol,
            showCode: $showCode,
            showSpace: $showSpace,
            showSymbolOrCodeOnLeft: $showSymbolOrCodeOnLeft,
            showDecimals: $showDecimals,
            decimalSeparator: $decimalSeparator,
            thousandsSeparator: $thousandsSeparator,
            numberOfDecimals: $numberOfDecimals,
            subunitLevel: $subunitLevel,
        ), $currency->getFormat());
    }

    /**
     * @return void
     * @throws InvalidCurrencyCodeException
     */
    public function testDifferentConstructors(): void
    {
        $currency = new Currency('USD');
        $this->assertEquals(CurrencyCode::USD->value, $currency->getCode());

        $currency = new Currency('usd');
        $this->assertEquals(CurrencyCode::USD->value, $currency->getCode());

        $currency = Currency::make(CurrencyCode::USD);
        $this->assertEquals(CurrencyCode::USD->value, $currency->getCode());

        $currency = Currency::fromCode(CurrencyCode::USD);
        $this->assertEquals(CurrencyCode::USD->value, $currency->getCode());
    }

    /**
     * @return void
     */
    public function testInvalidCurrencyCodeException(): void
    {
        $this->expectException(InvalidCurrencyCodeException::class);

        new Currency('XYZ');
    }

    /**
     * @return void
     */
    public function testToArrayFunction(): void
    {
        $currency = new Currency(CurrencyCode::USD);
        $this->assertEquals([
            'name' => 'United States Dollar',
            'code' => 'USD',
            'symbol' => '$',
            'flag' => 'us',
            'format' => [
                'show_code' => false,
                'show_symbol' => true,
                'show_space' => false,
                'show_symbol_or_code_on_left' => true,
                'show_decimals' => true,
                'decimal_separator' => '.',
                'thousands_separator' => ',',
                'number_of_decimals' => 2,
                'subunit_level' => 2,
            ],
        ], $currency->toArray());
    }

    /**
     * @return void
     * @throws InvalidCurrencyCodeException
     */
    public function testGetAllCurrenciesFunction(): void
    {
        $all = Currency::all();

        $this->assertCount(155, $all);
        $this->assertInstanceOf(Collection::class, $all);
    }

    /**
     * List of different currencies
     *
     * @return array[]
     */
    public static function listCurrencies(): array
    {
        return [
            [CurrencyCode::AED, 'United Arab Emirates Dirham', CurrencyCode::AED->value, 'د.إ', 'ae'],
            [CurrencyCode::AFN, 'Afghan Afghani', CurrencyCode::AFN->value, '؋', 'af'],
            [CurrencyCode::ALL, 'Albanian Lek', CurrencyCode::ALL->value, 'L', 'al'],
            [CurrencyCode::AMD, 'Armenian Dram', CurrencyCode::AMD->value, '֏', 'am'],
            [CurrencyCode::ANG, 'Netherlands Antillean Guilder', CurrencyCode::ANG->value, 'NAƒ', 'cw'],
            [CurrencyCode::AOA, 'Angolan Kwanza', CurrencyCode::AOA->value, 'Kz', 'ao'],
            [CurrencyCode::ARS, 'Argentine Peso', CurrencyCode::ARS->value, 'Arg$', 'ar'],
            [CurrencyCode::AUD, 'Australian Dollar', CurrencyCode::AUD->value, 'A$', 'au'],
            [CurrencyCode::AWG, 'Aruban Florin', CurrencyCode::AWG->value, 'Aƒ', 'aw'],
            [CurrencyCode::AZN, 'Azerbaijani Manat', CurrencyCode::AZN->value, '₼', 'az'],
            [CurrencyCode::BAM, 'Bosnia and Herzegovina Convertible Mark', CurrencyCode::BAM->value, 'KM', 'ba'],
            [CurrencyCode::BBD, 'Barbados Dollar', CurrencyCode::BBD->value, '$', 'bb'],
            [CurrencyCode::BDT, 'Bangladeshi Taka', CurrencyCode::BDT->value, '৳', 'bd'],
            [CurrencyCode::BGN, 'Bulgarian Lev', CurrencyCode::BGN->value, 'лв', 'bg'],
            [CurrencyCode::BHD, 'Bahraini Dinar', CurrencyCode::BHD->value, 'ب.د', 'bh'],
            [CurrencyCode::BIF, 'Burundian Franc', CurrencyCode::BIF->value, 'FBu', 'bi'],
            [CurrencyCode::BMD, 'Bermudian Dollar', CurrencyCode::BMD->value, '$', 'bm'],
            [CurrencyCode::BND, 'Brunei Dollar', CurrencyCode::BND->value, 'B$', 'bn'],
            [CurrencyCode::BOB, 'Bolivian Boliviano', CurrencyCode::BOB->value, 'Bs', 'bo'],
            [CurrencyCode::BRL, 'Brazilian Real', CurrencyCode::BRL->value, 'R$', 'br'],
            [CurrencyCode::BSD, 'Bahamian Dollar', CurrencyCode::BSD->value, 'B$', 'bs'],
            [CurrencyCode::BTC, 'Bitcoin', CurrencyCode::BTC->value, '₿', '--'],
            [CurrencyCode::BTN, 'Bhutanese Ngultrum', CurrencyCode::BTN->value, 'Nu.', 'bt'],
            [CurrencyCode::BWP, 'Botswana Pula', CurrencyCode::BWP->value, 'P', 'bw'],
            [CurrencyCode::BYN, 'Belarusian Ruble', CurrencyCode::BYN->value, 'Br', 'by'],
            [CurrencyCode::BZD, 'Belize Dollar', CurrencyCode::BZD->value, 'BZ$', 'bz'],
            [CurrencyCode::CAD, 'Canadian Dollar', CurrencyCode::CAD->value, 'C$', 'ca'],
            [CurrencyCode::CDF, 'Congolese Franc', CurrencyCode::CDF->value, 'FC', 'cd'],
            [CurrencyCode::CHF, 'Swiss Franc', CurrencyCode::CHF->value, 'F', 'ch'],
            [CurrencyCode::CLP, 'Chilean Peso', CurrencyCode::CLP->value, '$', 'cl'],
            [CurrencyCode::CNY, 'Chinese Yuan - Renminbi', CurrencyCode::CNY->value, '¥', 'cn'],
            [CurrencyCode::COP, 'Colombian Peso', CurrencyCode::COP->value, '$', 'co'],
            [CurrencyCode::CRC, 'Costa Rican Colón', CurrencyCode::CRC->value, '₡', 'cr'],
            [CurrencyCode::CUP, 'Cuban Peso', CurrencyCode::CUP->value, '$', 'cu'],
            [CurrencyCode::CVE, 'Cape Verdean Escudo', CurrencyCode::CVE->value, '$', 'cv'],
            [CurrencyCode::CZK, 'Czech Koruna', CurrencyCode::CZK->value, 'Kč', 'cz'],
            [CurrencyCode::DJF, 'Djiboutian Franc', CurrencyCode::DJF->value, 'Fdj', 'dj'],
            [CurrencyCode::DKK, 'Danish Krone', CurrencyCode::DKK->value, 'kr.', 'dk'],
            [CurrencyCode::DOP, 'Dominican Peso', CurrencyCode::DOP->value, '$', 'do'],
            [CurrencyCode::DZD, 'Algerian Dinar', CurrencyCode::DZD->value, 'د.ج', 'dz'],
            [CurrencyCode::EGP, 'Egyptian Pound', CurrencyCode::EGP->value, 'E£', 'eg'],
            [CurrencyCode::ERN, 'Eritrean Nakfa', CurrencyCode::ERN->value, 'Nkf', 'er'],
            [CurrencyCode::ETB, 'Ethiopian Birr', CurrencyCode::ETB->value, 'Br', 'et'],
            [CurrencyCode::EUR, 'Euro', CurrencyCode::EUR->value, '€', 'eu'],
            [CurrencyCode::FJD, 'Fijian Dollar', CurrencyCode::FJD->value, 'FJ$', 'fj'],
            [CurrencyCode::FKP, 'Falkland Islands Pound', CurrencyCode::FKP->value, '£', 'fk'],
            [CurrencyCode::GBP, 'British Pound', CurrencyCode::GBP->value, '£', 'gb'],
            [CurrencyCode::GEL, 'Georgian Lari', CurrencyCode::GEL->value, '₾', 'ge'],
            [CurrencyCode::GHS, 'Ghanaian Cedi', CurrencyCode::GHS->value, 'GH₵', 'gh'],
            [CurrencyCode::GIP, 'Gibraltar Pound', CurrencyCode::GIP->value, '£', 'gi'],
            [CurrencyCode::GMD, 'Gambian Dalasi', CurrencyCode::GMD->value, 'D', 'gm'],
            [CurrencyCode::GNF, 'Guinean Franc', CurrencyCode::GNF->value, 'Fr', 'gn'],
            [CurrencyCode::GTQ, 'Guatemalan Quetzal', CurrencyCode::GTQ->value, 'Q', 'gt'],
            [CurrencyCode::GYD, 'Guyanese Dollar', CurrencyCode::GYD->value, 'G$', 'gy'],
            [CurrencyCode::HKD, 'Hong Kong Dollar', CurrencyCode::HKD->value, 'HK$', 'hk'],
            [CurrencyCode::HNL, 'Honduran Lempira', CurrencyCode::HNL->value, 'L', 'hn'],
            [CurrencyCode::HTG, 'Haitian Gourde', CurrencyCode::HTG->value, 'G', 'ht'],
            [CurrencyCode::HUF, 'Hungarian Forint', CurrencyCode::HUF->value, 'Ft', 'hu'],
            [CurrencyCode::IDR, 'Indonesian Rupiah', CurrencyCode::IDR->value, 'Rp', 'id'],
            [CurrencyCode::ILS, 'Israeli New Shekel', CurrencyCode::ILS->value, '₪', 'il'],
            [CurrencyCode::INR, 'Indian Rupee', CurrencyCode::INR->value, '₹', 'in'],
            [CurrencyCode::IQD, 'Iraqi Dinar', CurrencyCode::IQD->value, 'ع.د', 'iq'],
            [CurrencyCode::IRR, 'Iranian Rial', CurrencyCode::IRR->value, '﷼', 'ir'],
            [CurrencyCode::ISK, 'Icelandic Króna', CurrencyCode::ISK->value, 'kr', 'is'],
            [CurrencyCode::JMD, 'Jamaican Dollar', CurrencyCode::JMD->value, 'J$', 'jm'],
            [CurrencyCode::JOD, 'Jordanian Dinar', CurrencyCode::JOD->value, 'د.أ', 'jo'],
            [CurrencyCode::JPY, 'Japanese Yen', CurrencyCode::JPY->value, '¥', 'jp'],
            [CurrencyCode::KES, 'Kenyan Shilling', CurrencyCode::KES->value, 'Sh', 'ke'],
            [CurrencyCode::KGS, 'Kyrgyz Som', CurrencyCode::KGS->value, '⃀', 'kg'],
            [CurrencyCode::KHR, 'Cambodian Riel', CurrencyCode::KHR->value, '៛', 'kh'],
            [CurrencyCode::KMF, 'Comorian Franc', CurrencyCode::KMF->value, 'FC', 'km'],
            [CurrencyCode::KPW, 'North Korean Won', CurrencyCode::KPW->value, '₩', 'kp'],
            [CurrencyCode::KRW, 'South Korean Won', CurrencyCode::KRW->value, '₩', 'kr'],
            [CurrencyCode::KWD, 'Kuwaiti Dinar', CurrencyCode::KWD->value, 'د.ك', 'kw'],
            [CurrencyCode::KYD, 'Cayman Islands Dollar', CurrencyCode::KYD->value, '$', 'ky'],
            [CurrencyCode::KZT, 'Kazakhstani Tenge', CurrencyCode::KZT->value, '₸', 'kz'],
            [CurrencyCode::LAK, 'Lao Kip', CurrencyCode::LAK->value, '₭', 'la'],
            [CurrencyCode::LBP, 'Lebanese Pound', CurrencyCode::LBP->value, 'LL', 'lb'],
            [CurrencyCode::LKR, 'Sri Lankan Rupee', CurrencyCode::LKR->value, 'Rs', 'lk'],
            [CurrencyCode::LRD, 'Liberian Dollar', CurrencyCode::LRD->value, 'L$', 'lr'],
            [CurrencyCode::LSL, 'Lesotho Loti', CurrencyCode::LSL->value, 'L', 'ls'],
            [CurrencyCode::LYD, 'Libyan Dinar', CurrencyCode::LYD->value, 'ل.د', 'ly'],
            [CurrencyCode::MAD, 'Moroccan Dirham', CurrencyCode::MAD->value, 'DH', 'ma'],
            [CurrencyCode::MDL, 'Moldovan Leu', CurrencyCode::MDL->value, 'L', 'md'],
            [CurrencyCode::MGA, 'Malagasy Ariary', CurrencyCode::MGA->value, 'Ar', 'mg'],
            [CurrencyCode::MKD, 'Macedonian Denar', CurrencyCode::MKD->value, 'ден', 'mk'],
            [CurrencyCode::MMK, 'Burmese Kyat', CurrencyCode::MMK->value, 'Ks', 'mm'],
            [CurrencyCode::MNT, 'Mongolian Tögrög', CurrencyCode::MNT->value, '₮', 'mn'],
            [CurrencyCode::MOP, 'Macanese Pataca', CurrencyCode::MOP->value, 'MOP$', 'mo'],
            [CurrencyCode::MRU, 'Mauritanian Ouguiya', CurrencyCode::MRU->value, 'UM', 'mr'],
            [CurrencyCode::MUR, 'Mauritian Rupee', CurrencyCode::MUR->value, 'Rs', 'mu'],
            [CurrencyCode::MVR, 'Maldivian Rufiyaa', CurrencyCode::MVR->value, 'Rf', 'mv'],
            [CurrencyCode::MWK, 'Malawian Kwacha', CurrencyCode::MWK->value, 'K', 'mw'],
            [CurrencyCode::MXN, 'Mexican Peso', CurrencyCode::MXN->value, 'Mex$', 'mx'],
            [CurrencyCode::MYR, 'Malaysian Ringgit', CurrencyCode::MYR->value, 'RM', 'my'],
            [CurrencyCode::MZN, 'Mozambican Metical', CurrencyCode::MZN->value, 'MT', 'mz'],
            [CurrencyCode::NAD, 'Namibian Dollar', CurrencyCode::NAD->value, 'N$', 'na'],
            [CurrencyCode::NGN, 'Nigerian Naira', CurrencyCode::NGN->value, '₦', 'ng'],
            [CurrencyCode::NIO, 'Nicaraguan Córdoba', CurrencyCode::NIO->value, 'C$', 'ni'],
            [CurrencyCode::NOK, 'Norwegian Krone', CurrencyCode::NOK->value, 'kr', 'no'],
            [CurrencyCode::NPR, 'Nepalese Rupee', CurrencyCode::NPR->value, 'रु.', 'np'],
            [CurrencyCode::NZD, 'New Zealand Dollar', CurrencyCode::NZD->value, 'NZ$', 'nz'],
            [CurrencyCode::OMR, 'Omani Rial', CurrencyCode::OMR->value, '.ر.ع', 'om'],
            [CurrencyCode::PAB, 'Panamanian Balboa', CurrencyCode::PAB->value, 'B/.', 'pa'],
            [CurrencyCode::PEN, 'Peruvian Sol', CurrencyCode::PEN->value, 'S/', 'pe'],
            [CurrencyCode::PGK, 'Papua New Guinean Kina', CurrencyCode::PGK->value, 'K', 'pg'],
            [CurrencyCode::PHP, 'Philippine Peso', CurrencyCode::PHP->value, '₱', 'ph'],
            [CurrencyCode::PKR, 'Pakistani Rupee', CurrencyCode::PKR->value, 'Rs', 'pk'],
            [CurrencyCode::PLN, 'Polish Złoty', CurrencyCode::PLN->value, 'zł', 'pl'],
            [CurrencyCode::PYG, 'Paraguayan Guaraní', CurrencyCode::PYG->value, '₲', 'py'],
            [CurrencyCode::QAR, 'Qatari Riyal', CurrencyCode::QAR->value, 'ر.ق', 'qa'],
            [CurrencyCode::RON, 'Romanian Leu', CurrencyCode::RON->value, 'lei', 'ro'],
            [CurrencyCode::RSD, 'Serbian Dinar', CurrencyCode::RSD->value, 'Дин.', 'rs'],
            [CurrencyCode::RUB, 'Russian Ruble', CurrencyCode::RUB->value, '₽', 'ru'],
            [CurrencyCode::RWF, 'Rwandan Franc', CurrencyCode::RWF->value, 'FRw', 'rw'],
            [CurrencyCode::SAR, 'Saudi Riyal', CurrencyCode::SAR->value, 'ر.س', 'sa'],
            [CurrencyCode::SBD, 'Solomon Islands Dollar', CurrencyCode::SBD->value, 'SI$', 'sb'],
            [CurrencyCode::SCR, 'Seychellois Rupee', CurrencyCode::SCR->value, 'Rs', 'sc'],
            [CurrencyCode::SDG, 'Sudanese Pound', CurrencyCode::SDG->value, 'ج.س', 'sd'],
            [CurrencyCode::SEK, 'Swedish Krona', CurrencyCode::SEK->value, 'kr', 'se'],
            [CurrencyCode::SGD, 'Singapore Dollar', CurrencyCode::SGD->value, 'S$', 'sg'],
            [CurrencyCode::SHP, 'Saint Helena Pound', CurrencyCode::SHP->value, '£', 'sh'],
            [CurrencyCode::SLE, 'Sierra Leonean Leone', CurrencyCode::SLE->value, 'Le', 'sl'],
            [CurrencyCode::SOS, 'Somali Shilling', CurrencyCode::SOS->value, 'Sh.So.', 'so'],
            [CurrencyCode::SRD, 'Surinamese Dollar', CurrencyCode::SRD->value, 'Sur$', 'sr'],
            [CurrencyCode::SSP, 'South Sudanese Pound', CurrencyCode::SSP->value, 'SS£', 'ss'],
            [CurrencyCode::STN, 'São Tomé and Príncipe Dobra', CurrencyCode::STN->value, 'Db', 'st'],
            [CurrencyCode::SYP, 'Syrian Pound', CurrencyCode::SYP->value, 'ل.س', 'sy'],
            [CurrencyCode::SZL, 'Swazi Lilangeni', CurrencyCode::SZL->value, 'L', 'sz'],
            [CurrencyCode::THB, 'Thai Baht', CurrencyCode::THB->value, '฿', 'th'],
            [CurrencyCode::TJS, 'Tajikistani Somoni', CurrencyCode::TJS->value, 'SM', 'tj'],
            [CurrencyCode::TMT, 'Turkmenistani Manat', CurrencyCode::TMT->value, 'm', 'tm'],
            [CurrencyCode::TND, 'Tunisian Dinar', CurrencyCode::TND->value, 'د.ت', 'tn'],
            [CurrencyCode::TOP, 'Tongan Pa\'anga', CurrencyCode::TOP->value, 'T$', 'to'],
            [CurrencyCode::TRY, 'Turkish Lira', CurrencyCode::TRY->value, '₺', 'tr'],
            [CurrencyCode::TTD, 'Trinidad and Tobago Dollar', CurrencyCode::TTD->value, 'TT$', 'tt'],
            [CurrencyCode::TWD, 'New Taiwan Dollar', CurrencyCode::TWD->value, 'NT$', 'tw'],
            [CurrencyCode::TZS, 'Tanzanian Shilling', CurrencyCode::TZS->value, 'Shs', 'tz'],
            [CurrencyCode::UAH, 'Ukrainian Hryvnia', CurrencyCode::UAH->value, '₴', 'ua'],
            [CurrencyCode::UGX, 'Ugandan Shilling', CurrencyCode::UGX->value, 'Shs', 'ug'],
            [CurrencyCode::USD, 'United States Dollar', CurrencyCode::USD->value, '$', 'us'],
            [CurrencyCode::UYU, 'Uruguayan Peso', CurrencyCode::UYU->value, '$U', 'uy'],
            [CurrencyCode::UZS, 'Uzbekistani Sum', CurrencyCode::UZS->value, 'sum', 'uz'],
            [CurrencyCode::VES, 'Venezuelan Sovereign Bolívar', CurrencyCode::VES->value, 'Bs.S', 've'],
            [CurrencyCode::VND, 'Vietnamese Đồng', CurrencyCode::VND->value, '₫', 'vn'],
            [CurrencyCode::VUV, 'Vanuatu Vatu', CurrencyCode::VUV->value, 'VT', 'vu'],
            [CurrencyCode::WST, 'Samoan Tālā', CurrencyCode::WST->value, '$', 'ws'],
            [CurrencyCode::XAF, 'Central African CFA Franc', CurrencyCode::XAF->value, 'F.CFA', 'cf'],
            [CurrencyCode::XCD, 'Eastern Caribbean Dollar', CurrencyCode::XCD->value, 'EC$', 'ag'],
            [CurrencyCode::XOF, 'West African CFA Franc', CurrencyCode::XOF->value, 'F.CFA', 'tg'],
            [CurrencyCode::XPF, 'CFP Franc', CurrencyCode::XPF->value, '₣', 'pf'],
            [CurrencyCode::YER, 'Yemeni Rial', CurrencyCode::YER->value, '﷼', 'ye'],
            [CurrencyCode::ZAR, 'South African Rand', CurrencyCode::ZAR->value, 'R', 'za'],
            [CurrencyCode::ZMW, 'Zambian Kwacha', CurrencyCode::ZMW->value, 'K', 'zm'],
            [CurrencyCode::ZWG, 'Zimbabwe Gold', CurrencyCode::ZWG->value, 'ZiG', 'zw'],
        ];
    }

    /**
     * List of different currencies formats
     *
     * @return array[]
     */
    public static function listCurrencyFormats(): array
    {
        return [
            [CurrencyCode::AED, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::AFN, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::ALL, true, false, true, false, true, '.', ',', 2, 2],
            [CurrencyCode::AMD, true, false, false, true, false, '.', ',', 2, 2],
            [CurrencyCode::ANG, true, false, false, true, true, ',', '.', 2, 2],
            [CurrencyCode::AOA, true, false, true, false, false, '.', ',', 2, 2],
            [CurrencyCode::ARS, true, false, true, true, false, ',', '.', 2, 2],
            [CurrencyCode::AUD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::AWG, true, false, true, true, true, '.', ',', 2, 2],
            [CurrencyCode::AZN, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::BAM, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::BBD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::BDT, true, false, false, true, false, '.', ',', 2, 2],
            [CurrencyCode::BGN, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::BHD, true, false, false, true, true, ',', '.', 3, 3],
            [CurrencyCode::BIF, true, false, true, false, false, '.', ',', 0, 0],
            [CurrencyCode::BMD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::BND, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::BOB, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::BRL, true, false, true, true, true, ',', '.', 2, 2],
            [CurrencyCode::BSD, true, false, false, true, true, ',', '.', 2, 2],
            [CurrencyCode::BTC, true, false, false, true, true, '.', ',', 8, 8],
            [CurrencyCode::BTN, true, false, false, true, false, '.', ',', 2, 2],
            [CurrencyCode::BWP, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::BYN, true, false, true, true, true, '.', ',', 2, 2],
            [CurrencyCode::BZD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::CAD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::CDF, true, false, false, true, false, '.', ',', 2, 2],
            [CurrencyCode::CHF, true, false, true, false, true, '.', ',', 2, 2],
            [CurrencyCode::CLP, true, false, false, true, false, ',', '.', 0, 0],
            [CurrencyCode::CNY, true, false, false, true, true, '.', ',', 1, 1],
            [CurrencyCode::COP, true, false, false, true, false, ',', '.', 2, 2],
            [CurrencyCode::CRC, true, false, false, true, false, ',', '.', 2, 2],
            [CurrencyCode::CUP, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::CVE, true, false, false, true, false, '.', ',', 2, 2],
            [CurrencyCode::CZK, true, false, true, false, false, ',', ' ', 2, 2],
            [CurrencyCode::DJF, true, false, true, false, false, '.', ',', 0, 0],
            [CurrencyCode::DKK, true, false, true, false, true, ',', '.', 2, 2],
            [CurrencyCode::DOP, true, false, false, false, false, '.', ',', 2, 2],
            [CurrencyCode::DZD, true, false, false, true, false, '.', ',', 2, 2],
            [CurrencyCode::EGP, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::ERN, true, false, true, false, true, '.', ',', 2, 2],
            [CurrencyCode::ETB, true, false, true, false, true, '.', ',', 2, 2],
            [CurrencyCode::EUR, true, false, false, true, true, ',', ' ', 2, 2],
            [CurrencyCode::FJD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::FKP, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::GBP, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::GEL, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::GHS, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::GIP, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::GMD, true, false, true, false, true, '.', ',', 2, 2],
            [CurrencyCode::GNF, true, false, true, false, false, '.', ',', 0, 0],
            [CurrencyCode::GTQ, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::GYD, true, false, false, true, false, '.', ',', 2, 2],
            [CurrencyCode::HKD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::HNL, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::HTG, true, false, true, true, true, '.', ',', 2, 2],
            [CurrencyCode::HUF, true, false, true, false, true, ',', ' ', 2, 2],
            [CurrencyCode::IDR, true, false, true, false, false, ',', '.', 2, 2],
            [CurrencyCode::ILS, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::INR, true, false, false, true, false, '.', ',', 2, 2],
            [CurrencyCode::IQD, true, false, false, true, false, '.', ',', 3, 3],
            [CurrencyCode::IRR, true, false, false, true, false, '.', ',', 0, 0],
            [CurrencyCode::ISK, true, false, true, false, false, ',', '.', 0, 0],
            [CurrencyCode::JMD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::JOD, true, false, false, true, true, '.', ',', 3, 3],
            [CurrencyCode::JPY, true, false, false, true, false, '.', ',', 0, 0],
            [CurrencyCode::KES, true, false, false, true, false, '/', ',', 2, 2],
            [CurrencyCode::KGS, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::KHR, true, false, false, false, false, '.', ',', 2, 2],
            [CurrencyCode::KMF, true, false, true, false, false, '.', ',', 0, 0],
            [CurrencyCode::KPW, true, false, false, true, false, '.', ',', 2, 2],
            [CurrencyCode::KRW, true, false, false, true, false, '.', ',', 0, 0],
            [CurrencyCode::KWD, true, false, false, true, true, '.', ',', 3, 3],
            [CurrencyCode::KYD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::KZT, true, false, false, true, false, '.', ',', 2, 2],
            [CurrencyCode::LAK, true, false, false, true, false, '.', ',', 2, 2],
            [CurrencyCode::LBP, true, false, true, true, false, '.', ',', 2, 2],
            [CurrencyCode::LKR, true, false, true, true, false, '/', ',', 2, 2],
            [CurrencyCode::LRD, true, false, false, true, false, '.', ',', 2, 2],
            [CurrencyCode::LSL, true, false, false, true, false, '.', ',', 2, 2],
            [CurrencyCode::LYD, true, false, false, true, true, '.', ',', 3, 3],
            [CurrencyCode::MAD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::MDL, true, false, true, false, true, '.', ',', 2, 2],
            [CurrencyCode::MGA, true, false, true, false, false, '.', ',', 2, 2],
            [CurrencyCode::MKD, true, false, true, false, false, '.', ',', 2, 2],
            [CurrencyCode::MMK, true, false, true, true, false, '/', ',', 2, 2],
            [CurrencyCode::MNT, true, false, false, true, false, '.', ',', 2, 2],
            [CurrencyCode::MOP, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::MRU, true, false, true, false, false, '.', ',', 2, 2],
            [CurrencyCode::MUR, true, false, true, true, true, '/', ',', 2, 2],
            [CurrencyCode::MVR, true, false, true, true, true, '.', ',', 2, 2],
            [CurrencyCode::MWK, true, false, false, true, false, '.', ',', 2, 2],
            [CurrencyCode::MXN, true, false, true, false, true, '.', ',', 2, 2],
            [CurrencyCode::MYR, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::MZN, true, false, false, true, false, ',', '.', 2, 2],
            [CurrencyCode::NAD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::NGN, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::NIO, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::NOK, true, false, true, false, true, ',', '.', 2, 2],
            [CurrencyCode::NPR, true, false, true, true, true, '.', ',', 2, 2],
            [CurrencyCode::NZD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::OMR, true, false, false, true, true, '.', ',', 3, 3],
            [CurrencyCode::PAB, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::PEN, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::PGK, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::PHP, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::PKR, true, false, true, true, false, '/', ',', 2, 2],
            [CurrencyCode::PLN, true, false, true, false, true, ',', ' ', 2, 2],
            [CurrencyCode::PYG, true, false, false, true, false, '.', ',', 0, 0],
            [CurrencyCode::QAR, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::RON, true, false, true, false, true, ',', '.', 2, 2],
            [CurrencyCode::RSD, true, false, true, true, false, '.', ',', 2, 2],
            [CurrencyCode::RUB, true, false, true, false, true, ',', '.', 2, 2],
            [CurrencyCode::RWF, true, false, true, false, false, '.', ',', 0, 0],
            [CurrencyCode::SAR, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::SBD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::SCR, true, false, true, true, true, '/', ',', 2, 2],
            [CurrencyCode::SDG, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::SEK, true, false, true, false, true, ',', ' ', 2, 2],
            [CurrencyCode::SGD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::SHP, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::SLE, true, false, true, true, true, '.', ',', 2, 2],
            [CurrencyCode::SOS, true, false, true, false, true, '.', ',', 2, 2],
            [CurrencyCode::SRD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::SSP, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::STN, true, false, true, false, true, '.', ',', 2, 2],
            [CurrencyCode::SYP, true, false, false, true, false, '.', ',', 2, 2],
            [CurrencyCode::SZL, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::THB, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::TJS, true, false, true, true, true, '.', ',', 2, 2],
            [CurrencyCode::TMT, true, false, true, false, true, '.', ',', 2, 2],
            [CurrencyCode::TND, true, false, false, true, true, '.', ',', 3, 3],
            [CurrencyCode::TOP, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::TRY, true, false, false, true, true, ',', '.', 2, 2],
            [CurrencyCode::TTD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::TWD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::TZS, true, false, false, true, false, '/', ',', 2, 2],
            [CurrencyCode::UAH, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::UGX, true, false, false, true, false, '/', ',', 0, 0],
            [CurrencyCode::USD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::UYU, true, false, false, true, false, ',', '.', 2, 2],
            [CurrencyCode::UZS, true, false, true, false, false, '.', ',', 2, 2],
            [CurrencyCode::VES, true, false, true, true, false, '.', ',', 2, 2],
            [CurrencyCode::VND, true, false, true, false, false, ',', '.', 0, 0],
            [CurrencyCode::VUV, true, false, true, true, false, '.', ',', 0, 0],
            [CurrencyCode::WST, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::XAF, true, false, true, false, false, '.', ',', 0, 0],
            [CurrencyCode::XCD, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::XOF, true, false, true, false, false, ',', ' ', 0, 0],
            [CurrencyCode::XPF, true, false, true, true, false, '.', ',', 0, 0],
            [CurrencyCode::YER, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::ZAR, true, false, false, true, true, '.', ',', 2, 2],
            [CurrencyCode::ZMW, true, false, false, false, true, '.', ',', 2, 2],
            [CurrencyCode::ZWG, true, false, false, true, true, '.', ',', 2, 2],
        ];
    }
}
