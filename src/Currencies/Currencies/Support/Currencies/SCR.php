<?php

namespace Macmotp\Currencies\Support\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currencies\Support\CurrencyCode;
use Macmotp\Currencies\Support\CurrencyFlag;
use Macmotp\Currencies\Support\CurrencyFormat;
use Macmotp\Currencies\Support\CurrencyInterface;
use Macmotp\Currencies\Support\CurrencyName;

/**
 * Seychellois Rupee
 */
final class SCR extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::SCR);
        $this->setCode(CurrencyCode::SCR);
        $this->setSymbol('Rs');
        $this->setFlag(CurrencyFlag::SCR);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: true,
            showSymbolOrCodeOnLeft: true,
            showDecimals: true,
            decimalSeparator: '/',
            thousandsSeparator: ',',
            numberOfDecimals: 2,
            subunitLevel: 2,
        ));
    }
}
