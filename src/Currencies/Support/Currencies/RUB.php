<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * Russian Ruble
 */
final class RUB extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::RUB);
        $this->setCode(CurrencyCode::RUB);
        $this->setSymbol('₽');
        $this->setFlag(CurrencyFlag::RUB);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: true,
            showSymbolOrCodeOnLeft: false,
            showDecimals: true,
            decimalSeparator: ',',
            thousandsSeparator: '.',
            numberOfDecimals: 2,
            subunitLevel: 2,
        ));
    }
}
