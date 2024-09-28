<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * Hungarian Forint
 */
final class HUF extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::HUF);
        $this->setCode(CurrencyCode::HUF);
        $this->setSymbol('Ft');
        $this->setFlag(CurrencyFlag::HUF);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: true,
            showSymbolOrCodeOnLeft: false,
            showDecimals: true,
            decimalSeparator: ',',
            thousandsSeparator: ' ',
            numberOfDecimals: 2,
            subunitLevel: 2,
        ));
    }
}
