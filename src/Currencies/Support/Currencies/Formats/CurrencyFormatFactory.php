<?php

namespace Macmotp\Support\Currencies\Formats;

use Macmotp\Support\CurrencyCode;

final class CurrencyFormatFactory
{
    /**
     * Map Currency Formats with related Currency
     *
     * @param CurrencyCode $code
     *
     * @return CurrencyFormat
     */
    public static function create(CurrencyCode $code): CurrencyFormat
    {
        return match ($code) {
            CurrencyCode::ALL,
            CurrencyCode::CHF,
            CurrencyCode::ERN,
            CurrencyCode::ETB,
            CurrencyCode::GMD,
            => self::applyDefaultFormat()
                ->setShowSpace(true)
                ->setShowSymbolOrCodeOnLeft(false),

            CurrencyCode::AMD,
            CurrencyCode::BDT,
            CurrencyCode::BTN,
            CurrencyCode::CDF,
            CurrencyCode::CVE,
            CurrencyCode::DZD,
            CurrencyCode::GYD,
            => self::applyDefaultFormat()
                ->setShowDecimals(false),

            CurrencyCode::ANG,
            CurrencyCode::BSD,
            => self::applyDefaultFormat()
                ->setDecimalSeparator(',')
                ->setThousandsSeparator('.'),

            CurrencyCode::AOA,
            => self::applyDefaultFormat()
                ->setShowSpace(true)
                ->setShowSymbolOrCodeOnLeft(false)
                ->setShowDecimals(false),

            CurrencyCode::ARS,
            CurrencyCode::BRL,
            => self::applyDefaultFormat()
                ->setShowSpace(true)
                ->setDecimalSeparator(',')
                ->setThousandsSeparator('.'),

            CurrencyCode::AWG,
            CurrencyCode::BYN,
            => self::applyDefaultFormat()
                ->setShowSpace(true),

            CurrencyCode::BHD,
            => self::applyDefaultFormat()
                ->setDecimalSeparator(',')
                ->setThousandsSeparator('.')
                ->setNumberOfDecimals(3)
                ->setSubunitLevel(3),

            CurrencyCode::BIF,
            CurrencyCode::DJF,
            CurrencyCode::GNF,
            => self::applyDefaultFormat()
                ->setShowSpace(true)
                ->setShowSymbolOrCodeOnLeft(false)
                ->setShowDecimals(false)
                ->setNumberOfDecimals(0)
                ->setSubunitLevel(0),

            CurrencyCode::BTC,
            => self::applyDefaultFormat()
                ->setNumberOfDecimals(8)
                ->setSubunitLevel(8),

            CurrencyCode::CLP,
            => self::applyDefaultFormat()
                ->setShowDecimals(false)
                ->setNumberOfDecimals(0)
                ->setSubunitLevel(0),

            CurrencyCode::CNY,
            => self::applyDefaultFormat()
                ->setNumberOfDecimals(1)
                ->setSubunitLevel(1),

            CurrencyCode::COP,
            CurrencyCode::CRC,
            => self::applyDefaultFormat()
                ->setShowDecimals(false)
                ->setDecimalSeparator(',')
                ->setThousandsSeparator('.'),

            CurrencyCode::CZK,
            => self::applyDefaultFormat()
                ->setShowSpace(true)
                ->setShowSymbolOrCodeOnLeft(false)
                ->setShowDecimals(false)
                ->setDecimalSeparator(',')
                ->setThousandsSeparator(' '),

            CurrencyCode::DKK
            => self::applyDefaultFormat()
                ->setShowSpace(true)
                ->setShowSymbolOrCodeOnLeft(false)
                ->setDecimalSeparator(',')
                ->setThousandsSeparator('.'),

            CurrencyCode::DOP
            => self::applyDefaultFormat()
                ->setShowSymbolOrCodeOnLeft(false)
                ->setShowDecimals(false),

            CurrencyCode::EUR
            => self::applyDefaultFormat()
                ->setDecimalSeparator(',')
                ->setThousandsSeparator(' '),

            // All the following have default format:
            CurrencyCode::AED,
                => self::applyDefaultFormat()
                ->setShowSymbol(true)
                ->setShowCode(false)
                ->setShowSpace(false)
                ->setShowSymbolOrCodeOnLeft(true)
                ->setShowDecimals(true)
                ->setDecimalSeparator('.')
                ->setThousandsSeparator(',')
                ->setNumberOfDecimals(2)
                ->setSubunitLevel(2),

            CurrencyCode::GYD
            => self::applyDefaultFormat()

        ->setShowDecimals(false)
        ,
            // CurrencyCode::AFN,
            // CurrencyCode::AUD,
            // CurrencyCode::AZN,
            // CurrencyCode::BAM,
            // CurrencyCode::BBD,
            // CurrencyCode::BGN,
            // CurrencyCode::BMD,
            // CurrencyCode::BND,
            // CurrencyCode::BOB,
            // CurrencyCode::BWP,
            // CurrencyCode::BZD,
            // CurrencyCode::CAD,
            // CurrencyCode::CUP,
            // CurrencyCode::EGP,
            // CurrencyCode::FJD,
            // CurrencyCode::FKP,
            // CurrencyCode::GBP,
            // CurrencyCode::GEL,
            // CurrencyCode::GHS,
            // CurrencyCode::GIP,
            // CurrencyCode::GTQ,
            default
            => self::applyDefaultFormat(),
        };

    }

    /**
     * Apply the Default Format
     *
     * @return CurrencyFormat
     */
    private static function applyDefaultFormat(): CurrencyFormat
    {
        return new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: false,
            showSymbolOrCodeOnLeft: true,
            showDecimals: true,
            decimalSeparator: '.',
            thousandsSeparator: ',',
            numberOfDecimals: 2,
            subunitLevel: 2,
        );
    }
}
