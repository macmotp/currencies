<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * Bahamian Dollar
 */
final class BSD extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::BSD);
        $this->setCode(CurrencyCode::BSD);
        $this->setSymbol('B$');
        $this->setFlag(CurrencyFlag::BSD);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: false,
            showSymbolOrCodeOnLeft: true,
            showDecimals: true,
            decimalSeparator: ',',
            thousandsSeparator: '.',
            numberOfDecimals: 2,
            subunitLevel: 2,
        ));
    }
}
