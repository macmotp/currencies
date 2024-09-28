<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * Lao Kip
 */
final class LAK extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::LAK);
        $this->setCode(CurrencyCode::LAK);
        $this->setSymbol('₭');
        $this->setFlag(CurrencyFlag::LAK);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: false,
            showSymbolOrCodeOnLeft: true,
            showDecimals: false,
            decimalSeparator: '.',
            thousandsSeparator: ',',
            numberOfDecimals: 2,
            subunitLevel: 2,
        ));
    }
}
