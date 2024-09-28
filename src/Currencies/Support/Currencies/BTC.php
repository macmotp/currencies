<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * Bitcoin
 */
final class BTC extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::BTC);
        $this->setCode(CurrencyCode::BTC);
        $this->setSymbol('₿');
        $this->setFlag(CurrencyFlag::BTC);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: false,
            showSymbolOrCodeOnLeft: true,
            showDecimals: true,
            decimalSeparator: '.',
            thousandsSeparator: ',',
            numberOfDecimals: 8,
            subunitLevel: 8,
        ));
    }
}
