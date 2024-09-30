<?php

namespace Macmotp\Currencies\Support\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currencies\Support\CurrencyCode;
use Macmotp\Currencies\Support\CurrencyFlag;
use Macmotp\Currencies\Support\CurrencyFormat;
use Macmotp\Currencies\Support\CurrencyInterface;
use Macmotp\Currencies\Support\CurrencyName;

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
