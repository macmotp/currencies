<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * Ukrainian Hryvnia
 */
final class UAH extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::UAH);
        $this->setCode(CurrencyCode::UAH);
        $this->setSymbol('₴');
        $this->setFlag(CurrencyFlag::UAH);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: false,
            showSymbolOrCodeOnLeft: true,
            showDecimals: true,
            decimalSeparator: '.',
            thousandsSeparator: ',',
            numberOfDecimals: 2,
            subunitLevel: 2,
        ));
    }
}
