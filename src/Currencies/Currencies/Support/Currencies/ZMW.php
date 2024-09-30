<?php

namespace Macmotp\Currencies\Support\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currencies\Support\CurrencyCode;
use Macmotp\Currencies\Support\CurrencyFlag;
use Macmotp\Currencies\Support\CurrencyFormat;
use Macmotp\Currencies\Support\CurrencyInterface;
use Macmotp\Currencies\Support\CurrencyName;

/**
 * Zambian Kwacha
 */
final class ZMW extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::ZMW);
        $this->setCode(CurrencyCode::ZMW);
        $this->setSymbol('K');
        $this->setFlag(CurrencyFlag::ZMW);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: false,
            showSymbolOrCodeOnLeft: false,
            showDecimals: true,
            decimalSeparator: '.',
            thousandsSeparator: ',',
            numberOfDecimals: 2,
            subunitLevel: 2,
        ));
    }
}
