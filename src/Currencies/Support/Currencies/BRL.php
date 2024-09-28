<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * Brazilian Real
 */
final class BRL extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::BRL);
        $this->setCode(CurrencyCode::BRL);
        $this->setSymbol('R$');
        $this->setFlag(CurrencyFlag::BRL);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: true,
            showSymbolOrCodeOnLeft: true,
            showDecimals: true,
            decimalSeparator: ',',
            thousandsSeparator: '.',
            numberOfDecimals: 2,
            subunitLevel: 2,
        ));
    }
}
