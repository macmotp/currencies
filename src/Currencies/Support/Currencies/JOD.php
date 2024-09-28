<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * Jordanian Dinar
 */
final class JOD extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::JOD);
        $this->setCode(CurrencyCode::JOD);
        $this->setSymbol('د.أ');
        $this->setFlag(CurrencyFlag::JOD);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: false,
            showSymbolOrCodeOnLeft: true,
            showDecimals: true,
            decimalSeparator: '.',
            thousandsSeparator: ',',
            numberOfDecimals: 3,
            subunitLevel: 3,
        ));
    }
}
