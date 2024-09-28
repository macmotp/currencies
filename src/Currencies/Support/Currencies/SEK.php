<?php

namespace Macmotp\Support\Currencies;

use Macmotp\Support\AbstractCurrency;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFlag;
use Macmotp\Support\CurrencyInterface;
use Macmotp\Support\CurrencyName;

/**
 * Swedish Krona
 */
final class SEK extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::SEK);
        $this->setCode(CurrencyCode::SEK);
        $this->setSymbol('kr');
        $this->setFlag(CurrencyFlag::SEK);
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
