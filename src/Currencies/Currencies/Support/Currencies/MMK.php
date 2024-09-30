<?php

namespace Macmotp\Currencies\Support\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currencies\Support\CurrencyCode;
use Macmotp\Currencies\Support\CurrencyFlag;
use Macmotp\Currencies\Support\CurrencyFormat;
use Macmotp\Currencies\Support\CurrencyInterface;
use Macmotp\Currencies\Support\CurrencyName;

/**
 * Burmese Kyat
 */
final class MMK extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::MMK);
        $this->setCode(CurrencyCode::MMK);
        $this->setSymbol('Ks');
        $this->setFlag(CurrencyFlag::MMK);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: true,
            showSymbolOrCodeOnLeft: true,
            showDecimals: false,
            decimalSeparator: '/',
            thousandsSeparator: ',',
            numberOfDecimals: 2,
            subunitLevel: 2,
        ));
    }
}
