<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * Vanuatu Vatu
 */
final class VUV extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::VUV);
        $this->setCode(CurrencyCode::VUV);
        $this->setSymbol('VT');
        $this->setFlag(CurrencyFlag::VUV);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: true,
            showSymbolOrCodeOnLeft: true,
            showDecimals: false,
            decimalSeparator: '.',
            thousandsSeparator: ',',
            numberOfDecimals: 0,
            subunitLevel: 0,
        ));
    }
}
