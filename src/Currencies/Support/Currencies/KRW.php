<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * South Korean Won
 */
final class KRW extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::KRW);
        $this->setCode(CurrencyCode::KRW);
        $this->setSymbol('₩');
        $this->setFlag(CurrencyFlag::KRW);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: false,
            showSymbolOrCodeOnLeft: true,
            showDecimals: false,
            decimalSeparator: '.',
            thousandsSeparator: ',',
            numberOfDecimals: 0,
            subunitLevel: 0,
        ));
    }
}
