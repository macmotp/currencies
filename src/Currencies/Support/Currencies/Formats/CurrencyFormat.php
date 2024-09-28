<?php

namespace Macmotp\Support\Currencies\Formats;

use Macmotp\Support\CurrencyInterface;

/**
 * CurrencyFormat Class
 */
final class CurrencyFormat
{
    /**
     * CurrencyFormat constructor
     *
     * @param bool $showSymbol
     * @param bool $showCode
     * @param bool $showSpace
     * @param bool $showSymbolOrCodeOnLeft
     * @param bool $showDecimals
     * @param string $decimalSeparator
     * @param string $thousandsSeparator
     * @param int $numberOfDecimals
     * @param int $subunitLevel
     */
    public function __construct(
        private bool $showSymbol,
        private bool $showCode,
        private bool $showSpace,
        private bool $showSymbolOrCodeOnLeft,
        private bool $showDecimals,
        private string $decimalSeparator,
        private string $thousandsSeparator,
        private int $numberOfDecimals,
        private int $subunitLevel,
    )
    {
        //
    }

    /**
     * Set Show Symbol
     *
     * @param bool $showSymbol
     *
     * @return self
     */
    public function setShowSymbol(bool $showSymbol): self
    {
        $this->showSymbol = $showSymbol;

        return $this;
    }

    /**
     * Set Show Code
     *
     * @param bool $showCode
     *
     * @return self
     */
    public function setShowCode(bool $showCode): self
    {
        $this->showCode = $showCode;

        return $this;
    }

    /**
     * Set Show Space
     *
     * @param bool $showSpace
     *
     * @return self
     */
    public function setShowSpace(bool $showSpace): self
    {
        $this->showSpace = $showSpace;

        return $this;
    }

    /**
     * Set Show Symbol or Code on Left/Right
     * true = left
     * false = right
     *
     * @param bool $showSymbolOrCodeOnLeft
     *
     * @return self
     */
    public function setShowSymbolOrCodeOnLeft(bool $showSymbolOrCodeOnLeft): self
    {
        $this->showSymbolOrCodeOnLeft = $showSymbolOrCodeOnLeft;

        return $this;
    }

    /**
     * Set Show Decimals
     *
     * @param bool $showDecimals
     *
     * @return self
     */
    public function setShowDecimals(bool $showDecimals): self
    {
        $this->showDecimals = $showDecimals;

        return $this;
    }

    /**
     * Set Decimal Separator
     *
     * @param string $decimalSeparator
     *
     * @return self
     */
    public function setDecimalSeparator(string $decimalSeparator): self
    {
        $this->decimalSeparator = $decimalSeparator;

        return $this;
    }

    /**
     * Set Thousands Separator
     *
     * @param string $thousandsSeparator
     *
     * @return self
     */
    public function setThousandsSeparator(string $thousandsSeparator): self
    {
        $this->thousandsSeparator = $thousandsSeparator;

        return $this;
    }

    /**
     * Set Number of Decimals
     *
     * @param int $numberOfDecimals
     *
     * @return self
     */
    public function setNumberOfDecimals(int $numberOfDecimals): self
    {
        $this->numberOfDecimals = $numberOfDecimals;

        return $this;
    }

    /**
     * Set Subunit level
     *
     * @param int $subunitLevel
     *
     * @return self
     */
    public function setSubunitLevel(int $subunitLevel): self
    {
        $this->subunitLevel = $subunitLevel;

        return $this;
    }

    /**
     * Get Show Symbol
     *
     * @return bool
     */
    public function getShowSymbol(): bool
    {
        return $this->showSymbol;
    }

    /**
     * Get Show Code
     *
     * @return bool
     */
    public function getShowCode(): bool
    {
        return $this->showCode;
    }

    /**
     * Get Show Space
     *
     * @return bool
     */
    public function getShowSpace(): bool
    {
        return $this->showSpace;
    }

    /**
     * Get Show Symbol/Code On Left
     *
     * @return bool
     */
    public function getShowSymbolOrCodeOnLeft(): bool
    {
        return $this->showSymbolOrCodeOnLeft;
    }

    /**
     * Get Show Decimals
     *
     * @return bool
     */
    public function getShowDecimals(): bool
    {
        return $this->showDecimals;
    }

    /**
     * Get Decimal Separator Character
     *
     * @return string
     */
    public function getDecimalSeparator(): string
    {
        return $this->decimalSeparator;
    }

    /**
     * Get Thousands Separator Character
     *
     * @return string
     */
    public function getThousandsSeparator(): string
    {
        return $this->thousandsSeparator;
    }

    /**
     * Get the Subunit Level
     *
     * @return int
     */
    public function getSubunitLevel(): int
    {
        return $this->subunitLevel;
    }

    /**
     * Get number of Decimals
     *
     * @return int
     */
    public function getNumberOfDecimals(): int
    {
        return $this->numberOfDecimals;
    }

    /**
     * Convert to Array
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'show_symbol' => $this->getShowSymbol(),
            'show_code' => $this->getShowCode(),
            'show_space' => $this->getShowSpace(),
            'show_symbol_or_code_on_left' => $this->getShowSymbolOrCodeOnLeft(),
            'show_decimals' => $this->getShowDecimals(),
            'decimal_separator' => $this->getDecimalSeparator(),
            'thousands_separator' => $this->getThousandsSeparator(),
            'subunit_level' => $this->getSubunitLevel(),
            'number_of_decimals' => $this->getNumberOfDecimals(),
        ];
    }
}
