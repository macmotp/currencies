<?php

namespace Macmotp\Currencies\Support;

/**
 * AbstractCurrency abstract class
 */
abstract class AbstractCurrency implements CurrencyInterface
{
    private CurrencyName $name;
    private CurrencyCode $code;
    private string $symbol;
    private CurrencyFlag $flag;
    private CurrencyFormat $currencyFormat;

    /**
     * Convert the currency into array
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'name' => $this->getName(),
            'code' => $this->getCode(),
            'symbol' => $this->getSymbol(),
            'flag' => $this->getFlag(),
            'format' => $this->getFormat()->toArray(),
        ];
    }

    /**
     * Set Name
     *
     * @param CurrencyName $name
     *
     * @return CurrencyInterface
     */
    public function setName(CurrencyName $name): CurrencyInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set Code
     *
     * @param CurrencyCode $code
     *
     * @return CurrencyInterface
     */
    public function setCode(CurrencyCode $code): CurrencyInterface
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Set Symbol
     *
     * @param string $symbol
     *
     * @return CurrencyInterface
     */
    public function setSymbol(string $symbol): CurrencyInterface
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * Set Flag
     *
     * @param CurrencyFlag $flag
     *
     * @return CurrencyInterface
     */
    public function setFlag(CurrencyFlag $flag): CurrencyInterface
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Set Currency Format
     *
     * @param CurrencyFormat $currencyFormat
     *
     * @return CurrencyInterface
     */
    public function setFormat(CurrencyFormat $currencyFormat): CurrencyInterface
    {
        $this->currencyFormat = $currencyFormat;

        return $this;
    }

    /**
     * Get Name
     *
     * @return CurrencyName
     */
    public function getName(): CurrencyName
    {
        return $this->name;
    }

    /**
     * Get Code
     *
     * @return CurrencyCode
     */
    public function getCode(): CurrencyCode
    {
        return $this->code;
    }

    /**
     * Get Symbol
     *
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * Get Flag
     *
     * @return CurrencyFlag
     */
    public function getFlag(): CurrencyFlag
    {
        return $this->flag;
    }

    /**
     * Get Currency Format
     *
     * @return CurrencyFormat
     */
    public function getFormat(): CurrencyFormat
    {
        return $this->currencyFormat;
    }
}
