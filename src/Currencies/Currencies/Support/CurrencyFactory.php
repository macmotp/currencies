<?php

namespace Macmotp\Currencies\Support;

use Macmotp\Currencies\Exceptions\InvalidCurrencyCodeException;
use Macmotp\Currencies\Support\Currencies\AED;
use Macmotp\Currencies\Support\Currencies\AFN;
use Macmotp\Currencies\Support\Currencies\ALL;
use Macmotp\Currencies\Support\Currencies\AMD;
use Macmotp\Currencies\Support\Currencies\ANG;
use Macmotp\Currencies\Support\Currencies\AOA;
use Macmotp\Currencies\Support\Currencies\ARS;
use Macmotp\Currencies\Support\Currencies\AUD;
use Macmotp\Currencies\Support\Currencies\AWG;
use Macmotp\Currencies\Support\Currencies\AZN;
use Macmotp\Currencies\Support\Currencies\BAM;
use Macmotp\Currencies\Support\Currencies\BBD;
use Macmotp\Currencies\Support\Currencies\BDT;
use Macmotp\Currencies\Support\Currencies\BGN;
use Macmotp\Currencies\Support\Currencies\BHD;
use Macmotp\Currencies\Support\Currencies\BIF;
use Macmotp\Currencies\Support\Currencies\BMD;
use Macmotp\Currencies\Support\Currencies\BND;
use Macmotp\Currencies\Support\Currencies\BOB;
use Macmotp\Currencies\Support\Currencies\BRL;
use Macmotp\Currencies\Support\Currencies\BSD;
use Macmotp\Currencies\Support\Currencies\BTC;
use Macmotp\Currencies\Support\Currencies\BTN;
use Macmotp\Currencies\Support\Currencies\BWP;
use Macmotp\Currencies\Support\Currencies\BYN;
use Macmotp\Currencies\Support\Currencies\BZD;
use Macmotp\Currencies\Support\Currencies\CAD;
use Macmotp\Currencies\Support\Currencies\CDF;
use Macmotp\Currencies\Support\Currencies\CHF;
use Macmotp\Currencies\Support\Currencies\CLP;
use Macmotp\Currencies\Support\Currencies\CNY;
use Macmotp\Currencies\Support\Currencies\COP;
use Macmotp\Currencies\Support\Currencies\CRC;
use Macmotp\Currencies\Support\Currencies\CUP;
use Macmotp\Currencies\Support\Currencies\CVE;
use Macmotp\Currencies\Support\Currencies\CZK;
use Macmotp\Currencies\Support\Currencies\DJF;
use Macmotp\Currencies\Support\Currencies\DKK;
use Macmotp\Currencies\Support\Currencies\DOP;
use Macmotp\Currencies\Support\Currencies\DZD;
use Macmotp\Currencies\Support\Currencies\EGP;
use Macmotp\Currencies\Support\Currencies\ERN;
use Macmotp\Currencies\Support\Currencies\ETB;
use Macmotp\Currencies\Support\Currencies\EUR;
use Macmotp\Currencies\Support\Currencies\FJD;
use Macmotp\Currencies\Support\Currencies\FKP;
use Macmotp\Currencies\Support\Currencies\GBP;
use Macmotp\Currencies\Support\Currencies\GEL;
use Macmotp\Currencies\Support\Currencies\GHS;
use Macmotp\Currencies\Support\Currencies\GIP;
use Macmotp\Currencies\Support\Currencies\GMD;
use Macmotp\Currencies\Support\Currencies\GNF;
use Macmotp\Currencies\Support\Currencies\GTQ;
use Macmotp\Currencies\Support\Currencies\GYD;
use Macmotp\Currencies\Support\Currencies\HKD;
use Macmotp\Currencies\Support\Currencies\HNL;
use Macmotp\Currencies\Support\Currencies\HTG;
use Macmotp\Currencies\Support\Currencies\HUF;
use Macmotp\Currencies\Support\Currencies\IDR;
use Macmotp\Currencies\Support\Currencies\ILS;
use Macmotp\Currencies\Support\Currencies\INR;
use Macmotp\Currencies\Support\Currencies\IQD;
use Macmotp\Currencies\Support\Currencies\IRR;
use Macmotp\Currencies\Support\Currencies\ISK;
use Macmotp\Currencies\Support\Currencies\JMD;
use Macmotp\Currencies\Support\Currencies\JOD;
use Macmotp\Currencies\Support\Currencies\JPY;
use Macmotp\Currencies\Support\Currencies\KES;
use Macmotp\Currencies\Support\Currencies\KGS;
use Macmotp\Currencies\Support\Currencies\KHR;
use Macmotp\Currencies\Support\Currencies\KMF;
use Macmotp\Currencies\Support\Currencies\KPW;
use Macmotp\Currencies\Support\Currencies\KRW;
use Macmotp\Currencies\Support\Currencies\KWD;
use Macmotp\Currencies\Support\Currencies\KYD;
use Macmotp\Currencies\Support\Currencies\KZT;
use Macmotp\Currencies\Support\Currencies\LAK;
use Macmotp\Currencies\Support\Currencies\LBP;
use Macmotp\Currencies\Support\Currencies\LKR;
use Macmotp\Currencies\Support\Currencies\LRD;
use Macmotp\Currencies\Support\Currencies\LSL;
use Macmotp\Currencies\Support\Currencies\LYD;
use Macmotp\Currencies\Support\Currencies\MAD;
use Macmotp\Currencies\Support\Currencies\MDL;
use Macmotp\Currencies\Support\Currencies\MGA;
use Macmotp\Currencies\Support\Currencies\MKD;
use Macmotp\Currencies\Support\Currencies\MMK;
use Macmotp\Currencies\Support\Currencies\MNT;
use Macmotp\Currencies\Support\Currencies\MOP;
use Macmotp\Currencies\Support\Currencies\MRU;
use Macmotp\Currencies\Support\Currencies\MUR;
use Macmotp\Currencies\Support\Currencies\MVR;
use Macmotp\Currencies\Support\Currencies\MWK;
use Macmotp\Currencies\Support\Currencies\MXN;
use Macmotp\Currencies\Support\Currencies\MYR;
use Macmotp\Currencies\Support\Currencies\MZN;
use Macmotp\Currencies\Support\Currencies\NAD;
use Macmotp\Currencies\Support\Currencies\NGN;
use Macmotp\Currencies\Support\Currencies\NIO;
use Macmotp\Currencies\Support\Currencies\NOK;
use Macmotp\Currencies\Support\Currencies\NPR;
use Macmotp\Currencies\Support\Currencies\NZD;
use Macmotp\Currencies\Support\Currencies\OMR;
use Macmotp\Currencies\Support\Currencies\PAB;
use Macmotp\Currencies\Support\Currencies\PEN;
use Macmotp\Currencies\Support\Currencies\PGK;
use Macmotp\Currencies\Support\Currencies\PHP;
use Macmotp\Currencies\Support\Currencies\PKR;
use Macmotp\Currencies\Support\Currencies\PLN;
use Macmotp\Currencies\Support\Currencies\PYG;
use Macmotp\Currencies\Support\Currencies\QAR;
use Macmotp\Currencies\Support\Currencies\RON;
use Macmotp\Currencies\Support\Currencies\RSD;
use Macmotp\Currencies\Support\Currencies\RUB;
use Macmotp\Currencies\Support\Currencies\RWF;
use Macmotp\Currencies\Support\Currencies\SAR;
use Macmotp\Currencies\Support\Currencies\SBD;
use Macmotp\Currencies\Support\Currencies\SCR;
use Macmotp\Currencies\Support\Currencies\SDG;
use Macmotp\Currencies\Support\Currencies\SEK;
use Macmotp\Currencies\Support\Currencies\SGD;
use Macmotp\Currencies\Support\Currencies\SHP;
use Macmotp\Currencies\Support\Currencies\SLE;
use Macmotp\Currencies\Support\Currencies\SOS;
use Macmotp\Currencies\Support\Currencies\SRD;
use Macmotp\Currencies\Support\Currencies\SSP;
use Macmotp\Currencies\Support\Currencies\STN;
use Macmotp\Currencies\Support\Currencies\SYP;
use Macmotp\Currencies\Support\Currencies\SZL;
use Macmotp\Currencies\Support\Currencies\THB;
use Macmotp\Currencies\Support\Currencies\TJS;
use Macmotp\Currencies\Support\Currencies\TMT;
use Macmotp\Currencies\Support\Currencies\TND;
use Macmotp\Currencies\Support\Currencies\TOP;
use Macmotp\Currencies\Support\Currencies\TRY_;
use Macmotp\Currencies\Support\Currencies\TTD;
use Macmotp\Currencies\Support\Currencies\TWD;
use Macmotp\Currencies\Support\Currencies\TZS;
use Macmotp\Currencies\Support\Currencies\UAH;
use Macmotp\Currencies\Support\Currencies\UGX;
use Macmotp\Currencies\Support\Currencies\USD;
use Macmotp\Currencies\Support\Currencies\UYU;
use Macmotp\Currencies\Support\Currencies\UZS;
use Macmotp\Currencies\Support\Currencies\VES;
use Macmotp\Currencies\Support\Currencies\VND;
use Macmotp\Currencies\Support\Currencies\VUV;
use Macmotp\Currencies\Support\Currencies\WST;
use Macmotp\Currencies\Support\Currencies\XAF;
use Macmotp\Currencies\Support\Currencies\XCD;
use Macmotp\Currencies\Support\Currencies\XOF;
use Macmotp\Currencies\Support\Currencies\XPF;
use Macmotp\Currencies\Support\Currencies\YER;
use Macmotp\Currencies\Support\Currencies\ZAR;
use Macmotp\Currencies\Support\Currencies\ZMW;
use Macmotp\Currencies\Support\Currencies\ZWG;
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
                $code = CurrencyCode::from(strtoupper($code));
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
