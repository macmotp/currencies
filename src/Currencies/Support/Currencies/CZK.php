<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * Czech Koruna
 */
final class CZK extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::CZK);
        $this->setCode(CurrencyCode::CZK);
        $this->setSymbol('Kč');
        $this->setFlag(CurrencyFlag::CZK);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: true,
            showSymbolOrCodeOnLeft: false,
            showDecimals: false,
            decimalSeparator: ',',
            thousandsSeparator: ' ',
            numberOfDecimals: 2,
            subunitLevel: 2,
        ));
    }
}
