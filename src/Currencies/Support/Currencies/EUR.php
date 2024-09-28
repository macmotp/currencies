<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * Euro
 */
final class EUR extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::EUR);
        $this->setCode(CurrencyCode::EUR);
        $this->setSymbol('€');
        $this->setFlag(CurrencyFlag::EUR);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: false,
            showSymbolOrCodeOnLeft: true,
            showDecimals: true,
            decimalSeparator: ',',
            thousandsSeparator: ' ',
            numberOfDecimals: 2,
            subunitLevel: 2,
        ));
    }
}
