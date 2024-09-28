<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * Vietnamese Đồng
 */
final class VND extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::VND);
        $this->setCode(CurrencyCode::VND);
        $this->setSymbol('₫');
        $this->setFlag(CurrencyFlag::VND);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: true,
            showSymbolOrCodeOnLeft: false,
            showDecimals: false,
            decimalSeparator: ',',
            thousandsSeparator: '.',
            numberOfDecimals: 0,
            subunitLevel: 0,
        ));
    }
}
