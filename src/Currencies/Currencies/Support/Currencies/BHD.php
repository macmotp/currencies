<?php

namespace Macmotp\Currencies\Support\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currencies\Support\CurrencyCode;
use Macmotp\Currencies\Support\CurrencyFlag;
use Macmotp\Currencies\Support\CurrencyFormat;
use Macmotp\Currencies\Support\CurrencyInterface;
use Macmotp\Currencies\Support\CurrencyName;

/**
 * Bahraini Dinar
 */
final class BHD extends AbstractCurrency implements CurrencyInterface
{
    public function __construct()
    {
        $this->setName(CurrencyName::BHD);
        $this->setCode(CurrencyCode::BHD);
        $this->setSymbol('ب.د');
        $this->setFlag(CurrencyFlag::BHD);
        $this->setFormat(new CurrencyFormat(
            showSymbol: true,
            showCode: false,
            showSpace: false,
            showSymbolOrCodeOnLeft: true,
            showDecimals: true,
            decimalSeparator: ',',
            thousandsSeparator: '.',
            numberOfDecimals: 3,
            subunitLevel: 3,
        ));
    }
}
