<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * Mexican Peso
 */
final class MXN extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::MXN);
        $this->setCode(CurrencyCode::MXN);
        $this->setSymbol('Mex$');
        $this->setFlag(CurrencyFlag::MXN);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: true,
            showSymbolOrCodeOnLeft: false,
            showDecimals: true,
            decimalSeparator: '.',
            thousandsSeparator: ',',
            numberOfDecimals: 2,
            subunitLevel: 2,
        ));
    }
}
