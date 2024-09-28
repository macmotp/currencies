<?php

namespace Macmotp\Support;

use Macmotp\Exceptions\InvalidCurrencyCodeException;
use Macmotp\Support\Currencies\AED;
use Macmotp\Support\Currencies\AFN;
use Macmotp\Support\Currencies\ALL;
use Macmotp\Support\Currencies\AMD;
use Macmotp\Support\Currencies\ANG;
use Macmotp\Support\Currencies\AOA;
use Macmotp\Support\Currencies\ARS;
use Macmotp\Support\Currencies\AUD;
use Macmotp\Support\Currencies\AWG;
use Macmotp\Support\Currencies\AZN;
use Macmotp\Support\Currencies\BAM;
use Macmotp\Support\Currencies\BBD;
use Macmotp\Support\Currencies\BDT;
use Macmotp\Support\Currencies\BGN;
use Macmotp\Support\Currencies\BHD;
use Macmotp\Support\Currencies\BIF;
use Macmotp\Support\Currencies\BMD;
use Macmotp\Support\Currencies\BND;
use Macmotp\Support\Currencies\BOB;
use Macmotp\Support\Currencies\BRL;
use Macmotp\Support\Currencies\BSD;
use Macmotp\Support\Currencies\BTC;
use Macmotp\Support\Currencies\BTN;
use Macmotp\Support\Currencies\BWP;
use Macmotp\Support\Currencies\BYN;
use Macmotp\Support\Currencies\BZD;
use Macmotp\Support\Currencies\CAD;
use Macmotp\Support\Currencies\CDF;
use Macmotp\Support\Currencies\CHF;
use Macmotp\Support\Currencies\CLP;
use Macmotp\Support\Currencies\CNY;
use Macmotp\Support\Currencies\COP;
use Macmotp\Support\Currencies\CRC;
use Macmotp\Support\Currencies\CUP;
use Macmotp\Support\Currencies\CVE;
use Macmotp\Support\Currencies\CZK;
use Macmotp\Support\Currencies\DJF;
use Macmotp\Support\Currencies\DKK;
use Macmotp\Support\Currencies\DOP;
use Macmotp\Support\Currencies\DZD;
use Macmotp\Support\Currencies\EGP;
use Macmotp\Support\Currencies\ERN;
use Macmotp\Support\Currencies\ETB;
use Macmotp\Support\Currencies\EUR;
use Macmotp\Support\Currencies\FJD;
use Macmotp\Support\Currencies\FKP;
use Macmotp\Support\Currencies\GBP;
use Macmotp\Support\Currencies\GEL;
use Macmotp\Support\Currencies\GHS;
use Macmotp\Support\Currencies\GIP;
use Macmotp\Support\Currencies\GMD;
use Macmotp\Support\Currencies\GNF;
use Macmotp\Support\Currencies\GTQ;
use Macmotp\Support\Currencies\GYD;
use Macmotp\Support\Currencies\HKD;
use Macmotp\Support\Currencies\HNL;
use Macmotp\Support\Currencies\HTG;
use Macmotp\Support\Currencies\HUF;
use Macmotp\Support\Currencies\IDR;
use Macmotp\Support\Currencies\ILS;
use Macmotp\Support\Currencies\INR;
use Macmotp\Support\Currencies\IQD;
use Macmotp\Support\Currencies\IRR;
use Macmotp\Support\Currencies\ISK;
use Macmotp\Support\Currencies\JMD;
use Macmotp\Support\Currencies\JOD;
use Macmotp\Support\Currencies\JPY;
use Macmotp\Support\Currencies\KES;
use Macmotp\Support\Currencies\KGS;
use Macmotp\Support\Currencies\KHR;
use Macmotp\Support\Currencies\KMF;
use Macmotp\Support\Currencies\KPW;
use Macmotp\Support\Currencies\KRW;
use Macmotp\Support\Currencies\KWD;
use Macmotp\Support\Currencies\KYD;
use Macmotp\Support\Currencies\KZT;
use Macmotp\Support\Currencies\LAK;
use Macmotp\Support\Currencies\LBP;
use Macmotp\Support\Currencies\LKR;
use Macmotp\Support\Currencies\LRD;
use Macmotp\Support\Currencies\LSL;
use Macmotp\Support\Currencies\LYD;
use Macmotp\Support\Currencies\MAD;
use Macmotp\Support\Currencies\MDL;
use Macmotp\Support\Currencies\MGA;
use Macmotp\Support\Currencies\MKD;
use Macmotp\Support\Currencies\MMK;
use Macmotp\Support\Currencies\MNT;
use Macmotp\Support\Currencies\MOP;
use Macmotp\Support\Currencies\MRU;
use Macmotp\Support\Currencies\MUR;
use Macmotp\Support\Currencies\MVR;
use Macmotp\Support\Currencies\MWK;
use Macmotp\Support\Currencies\MXN;
use Macmotp\Support\Currencies\MYR;
use Macmotp\Support\Currencies\MZN;
use Macmotp\Support\Currencies\NAD;
use Macmotp\Support\Currencies\NGN;
use Macmotp\Support\Currencies\NIO;
use Macmotp\Support\Currencies\NOK;
use Macmotp\Support\Currencies\NPR;
use Macmotp\Support\Currencies\NZD;
use Macmotp\Support\Currencies\OMR;
use Macmotp\Support\Currencies\PAB;
use Macmotp\Support\Currencies\PEN;
use Macmotp\Support\Currencies\PGK;
use Macmotp\Support\Currencies\PHP;
use Macmotp\Support\Currencies\PKR;
use Macmotp\Support\Currencies\PLN;
use Macmotp\Support\Currencies\PYG;
use Macmotp\Support\Currencies\QAR;
use Macmotp\Support\Currencies\RON;
use Macmotp\Support\Currencies\RSD;
use Macmotp\Support\Currencies\RUB;
use Macmotp\Support\Currencies\RWF;
use Macmotp\Support\Currencies\SAR;
use Macmotp\Support\Currencies\SBD;
use Macmotp\Support\Currencies\SCR;
use Macmotp\Support\Currencies\SDG;
use Macmotp\Support\Currencies\SEK;
use Macmotp\Support\Currencies\SGD;
use Macmotp\Support\Currencies\SHP;
use Macmotp\Support\Currencies\SLE;
use Macmotp\Support\Currencies\SOS;
use Macmotp\Support\Currencies\SRD;
use Macmotp\Support\Currencies\SSP;
use Macmotp\Support\Currencies\STN;
use Macmotp\Support\Currencies\SYP;
use Macmotp\Support\Currencies\SZL;
use Macmotp\Support\Currencies\THB;
use Macmotp\Support\Currencies\TJS;
use Macmotp\Support\Currencies\TMT;
use Macmotp\Support\Currencies\TND;
use Macmotp\Support\Currencies\TOP;
use Macmotp\Support\Currencies\TRY_;
use Macmotp\Support\Currencies\TTD;
use Macmotp\Support\Currencies\TWD;
use Macmotp\Support\Currencies\TZS;
use Macmotp\Support\Currencies\UAH;
use Macmotp\Support\Currencies\UGX;
use Macmotp\Support\Currencies\USD;
use Macmotp\Support\Currencies\UYU;
use Macmotp\Support\Currencies\UZS;
use Macmotp\Support\Currencies\VES;
use Macmotp\Support\Currencies\VND;
use Macmotp\Support\Currencies\VUV;
use Macmotp\Support\Currencies\WST;
use Macmotp\Support\Currencies\XAF;
use Macmotp\Support\Currencies\XCD;
use Macmotp\Support\Currencies\XOF;
use Macmotp\Support\Currencies\XPF;
use Macmotp\Support\Currencies\YER;
use Macmotp\Support\Currencies\ZAR;
use Macmotp\Support\Currencies\ZMW;
use Macmotp\Support\Currencies\ZWG;
use ValueError;

/**
 * CurrencyFactory Class
 */
final class CurrencyFactory
{
    /**
     * Map Currency Codes with related implementation
     *
     * @param CurrencyCode|string $code
     * @return CurrencyInterface
     * @throws InvalidCurrencyCodeException
     */
    public static function create(CurrencyCode|string $code): CurrencyInterface
    {
        if (is_string($code)) {
            try {
                $code = CurrencyCode::from($code);
            } catch (ValueError $e) {
                return throw new InvalidCurrencyCodeException($e->getMessage());
            }
        }

        return match ($code) {
            CurrencyCode::AED => new AED(),
            CurrencyCode::AFN => new AFN(),
            CurrencyCode::ALL => new ALL(),
            CurrencyCode::AMD => new AMD(),
            CurrencyCode::ANG => new ANG(),
            CurrencyCode::AOA => new AOA(),
            CurrencyCode::ARS => new ARS(),
            CurrencyCode::AUD => new AUD(),
            CurrencyCode::AWG => new AWG(),
            CurrencyCode::AZN => new AZN(),
            CurrencyCode::BAM => new BAM(),
            CurrencyCode::BBD => new BBD(),
            CurrencyCode::BDT => new BDT(),
            CurrencyCode::BGN => new BGN(),
            CurrencyCode::BHD => new BHD(),
            CurrencyCode::BIF => new BIF(),
            CurrencyCode::BMD => new BMD(),
            CurrencyCode::BND => new BND(),
            CurrencyCode::BOB => new BOB(),
            CurrencyCode::BRL => new BRL(),
            CurrencyCode::BSD => new BSD(),
            CurrencyCode::BTC => new BTC(),
            CurrencyCode::BTN => new BTN(),
            CurrencyCode::BWP => new BWP(),
            CurrencyCode::BYN => new BYN(),
            CurrencyCode::BZD => new BZD(),
            CurrencyCode::CAD => new CAD(),
            CurrencyCode::CDF => new CDF(),
            CurrencyCode::CHF => new CHF(),
            CurrencyCode::CLP => new CLP(),
            CurrencyCode::CNY => new CNY(),
            CurrencyCode::COP => new COP(),
            CurrencyCode::CRC => new CRC(),
            CurrencyCode::CUP => new CUP(),
            CurrencyCode::CVE => new CVE(),
            CurrencyCode::CZK => new CZK(),
            CurrencyCode::DJF => new DJF(),
            CurrencyCode::DKK => new DKK(),
            CurrencyCode::DOP => new DOP(),
            CurrencyCode::DZD => new DZD(),
            CurrencyCode::EGP => new EGP(),
            CurrencyCode::ERN => new ERN(),
            CurrencyCode::ETB => new ETB(),
            CurrencyCode::EUR => new EUR(),
            CurrencyCode::FJD => new FJD(),
            CurrencyCode::FKP => new FKP(),
            CurrencyCode::GBP => new GBP(),
            CurrencyCode::GEL => new GEL(),
            CurrencyCode::GHS => new GHS(),
            CurrencyCode::GIP => new GIP(),
            CurrencyCode::GMD => new GMD(),
            CurrencyCode::GNF => new GNF(),
            CurrencyCode::GTQ => new GTQ(),
            CurrencyCode::GYD => new GYD(),
            CurrencyCode::HKD => new HKD(),
            CurrencyCode::HNL => new HNL(),
            CurrencyCode::HTG => new HTG(),
            CurrencyCode::HUF => new HUF(),
            CurrencyCode::IDR => new IDR(),
            CurrencyCode::ILS => new ILS(),
            CurrencyCode::INR => new INR(),
            CurrencyCode::IQD => new IQD(),
            CurrencyCode::IRR => new IRR(),
            CurrencyCode::ISK => new ISK(),
            CurrencyCode::JMD => new JMD(),
            CurrencyCode::JOD => new JOD(),
            CurrencyCode::JPY => new JPY(),
            CurrencyCode::KES => new KES(),
            CurrencyCode::KGS => new KGS(),
            CurrencyCode::KHR => new KHR(),
            CurrencyCode::KMF => new KMF(),
            CurrencyCode::KPW => new KPW(),
            CurrencyCode::KRW => new KRW(),
            CurrencyCode::KWD => new KWD(),
            CurrencyCode::KYD => new KYD(),
            CurrencyCode::KZT => new KZT(),
            CurrencyCode::LAK => new LAK(),
            CurrencyCode::LBP => new LBP(),
            CurrencyCode::LKR => new LKR(),
            CurrencyCode::LRD => new LRD(),
            CurrencyCode::LSL => new LSL(),
            CurrencyCode::LYD => new LYD(),
            CurrencyCode::MAD => new MAD(),
            CurrencyCode::MDL => new MDL(),
            CurrencyCode::MGA => new MGA(),
            CurrencyCode::MKD => new MKD(),
            CurrencyCode::MMK => new MMK(),
            CurrencyCode::MNT => new MNT(),
            CurrencyCode::MOP => new MOP(),
            CurrencyCode::MRU => new MRU(),
            CurrencyCode::MUR => new MUR(),
            CurrencyCode::MVR => new MVR(),
            CurrencyCode::MWK => new MWK(),
            CurrencyCode::MXN => new MXN(),
            CurrencyCode::MYR => new MYR(),
            CurrencyCode::MZN => new MZN(),
            CurrencyCode::NAD => new NAD(),
            CurrencyCode::NGN => new NGN(),
            CurrencyCode::NIO => new NIO(),
            CurrencyCode::NOK => new NOK(),
            CurrencyCode::NPR => new NPR(),
            CurrencyCode::NZD => new NZD(),
            CurrencyCode::OMR => new OMR(),
            CurrencyCode::PAB => new PAB(),
            CurrencyCode::PEN => new PEN(),
            CurrencyCode::PGK => new PGK(),
            CurrencyCode::PHP => new PHP(),
            CurrencyCode::PKR => new PKR(),
            CurrencyCode::PLN => new PLN(),
            CurrencyCode::PYG => new PYG(),
            CurrencyCode::QAR => new QAR(),
            CurrencyCode::RON => new RON(),
            CurrencyCode::RSD => new RSD(),
            CurrencyCode::RUB => new RUB(),
            CurrencyCode::RWF => new RWF(),
            CurrencyCode::SAR => new SAR(),
            CurrencyCode::SBD => new SBD(),
            CurrencyCode::SCR => new SCR(),
            CurrencyCode::SDG => new SDG(),
            CurrencyCode::SEK => new SEK(),
            CurrencyCode::SGD => new SGD(),
            CurrencyCode::SHP => new SHP(),
            CurrencyCode::SLE => new SLE(),
            CurrencyCode::SOS => new SOS(),
            CurrencyCode::SRD => new SRD(),
            CurrencyCode::SSP => new SSP(),
            CurrencyCode::STN => new STN(),
            CurrencyCode::SYP => new SYP(),
            CurrencyCode::SZL => new SZL(),
            CurrencyCode::THB => new THB(),
            CurrencyCode::TJS => new TJS(),
            CurrencyCode::TMT => new TMT(),
            CurrencyCode::TND => new TND(),
            CurrencyCode::TOP => new TOP(),
            CurrencyCode::TRY => new TRY_(),
            CurrencyCode::TTD => new TTD(),
            CurrencyCode::TWD => new TWD(),
            CurrencyCode::TZS => new TZS(),
            CurrencyCode::UAH => new UAH(),
            CurrencyCode::UGX => new UGX(),
            CurrencyCode::USD => new USD(),
            CurrencyCode::UYU => new UYU(),
            CurrencyCode::UZS => new UZS(),
            CurrencyCode::VES => new VES(),
            CurrencyCode::VND => new VND(),
            CurrencyCode::VUV => new VUV(),
            CurrencyCode::WST => new WST(),
            CurrencyCode::XAF => new XAF(),
            CurrencyCode::XCD => new XCD(),
            CurrencyCode::XOF => new XOF(),
            CurrencyCode::XPF => new XPF(),
            CurrencyCode::YER => new YER(),
            CurrencyCode::ZAR => new ZAR(),
            CurrencyCode::ZMW => new ZMW(),
            CurrencyCode::ZWG => new ZWG(),
            default => throw new InvalidCurrencyCodeException("Currency not supported: $code->value"),
        };
    }
}
