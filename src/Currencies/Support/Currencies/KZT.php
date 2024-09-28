<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * Kazakhstani Tenge
 */
final class KZT extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::KZT);
        $this->setCode(CurrencyCode::KZT);
        $this->setSymbol('₸');
        $this->setFlag(CurrencyFlag::KZT);
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
