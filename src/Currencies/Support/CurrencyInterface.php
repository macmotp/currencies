<?php

namespace Macmotp\Support;

use Macmotp\Support\Currencies\Formats\CurrencyFormat;

/**
 * Interface Currency
 *
 * All currencies are adopting ISO 4217 standard
 * https://en.wikipedia.org/wiki/ISO_4217#List_of_ISO_4217_currency_codes
 *
 * Updated on September 2024
 */
interface CurrencyInterface
{
    /**
     * Set Name
     *
     * @param CurrencyName $name
     *
     * @return CurrencyInterface
     */
    public function setName(CurrencyName $name): CurrencyInterface;

    /**
     * Set Code
     *
     * @param CurrencyCode $code
     *
     * @return CurrencyInterface
     */
    public function setCode(CurrencyCode $code): CurrencyInterface;

    /**
     * Set Symbol
     *
     * @param string $symbol
     *
     * @return CurrencyInterface
     */
    public function setSymbol(string $symbol): CurrencyInterface;

    /**
     * Set Flag
     *
     * @param CurrencyFlag $flag
     *
     * @return CurrencyInterface
     */
    public function setFlag(CurrencyFlag $flag): CurrencyInterface;

    /**
     * Set Currency Format
     *
     * @param CurrencyFormat $currencyFormat
     *
     * @return CurrencyInterface
     */
    public function setFormat(CurrencyFormat $currencyFormat): CurrencyInterface;

    /**
     * Get Name
     *
     * @return CurrencyName
     */
    public function getName(): CurrencyName;

    /**
     * Get Code
     *
     * @return CurrencyCode
     */
    public function getCode(): CurrencyCode;

    /**
     * Get Symbol
     *
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Get Flag
     *
     * @return CurrencyFlag
     */
    public function getFlag(): CurrencyFlag;

    /**
     * Get Currency Format
     *
     * @return CurrencyFormat
     */
    public function getFormat(): CurrencyFormat;
}
