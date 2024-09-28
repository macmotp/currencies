<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * Icelandic Króna
 */
final class ISK extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::ISK);
        $this->setCode(CurrencyCode::ISK);
        $this->setSymbol('kr');
        $this->setFlag(CurrencyFlag::ISK);
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
