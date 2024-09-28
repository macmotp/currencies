<?php

namespace Macmotp;

use Illuminate\Support\Collection;
use Macmotp\Exceptions\InvalidCurrencyCodeException;
use Macmotp\Support\Currencies\Formats\CurrencyFormat;
use Macmotp\Support\CurrencyCode;
use Macmotp\Support\CurrencyFactory;
use Macmotp\Support\CurrencyInterface;

/**
 * Class Currency
 */
class Currency
{
    private CurrencyInterface $currency;

    /**
     * Usage: new Currency('USD');
     *
     * @param CurrencyCode|string $currencyCode
     * @throws InvalidCurrencyCodeException
     */
    public function __construct(CurrencyCode|string $currencyCode)
    {
        $this->currency = CurrencyFactory::create($currencyCode);
    }

    /**
     * Usage: Currency::make('USD');
     *
     * @param CurrencyCode|string $currencyCode
     * @return Currency
     * @throws InvalidCurrencyCodeException
     */
    public static function make(CurrencyCode|string $currencyCode): self
    {
        return new self($currencyCode);
    }

    /**
     * Usage: Currency::fromCode('USD');
     *
     * @param CurrencyCode|string $currencyCode
     * @return Currency
     * @throws InvalidCurrencyCodeException
     */
    public static function fromCode(CurrencyCode|string $currencyCode): self
    {
        return new self($currencyCode);
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->currency->getName()->value;
    }

    /**
     * Get Code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->currency->getCode()->value;
    }

    /**
     * Get Symbol
     *
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->currency->getSymbol();
    }

    /**
     * Get Flag
     *
     * @return string
     */
    public function getFlag(): string
    {
        return $this->currency->getFlag()->value;
    }

    /**
     * Get Format
     *
     * @return CurrencyFormat
     */
    public function getFormat(): CurrencyFormat
    {
        return $this->currency->getFormat();
    }

    /**
     * Convert to Array
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
     * Get all Currencies
     *
     * @return Collection
     * @throws InvalidCurrencyCodeException
     */
    public static function all(): Collection
    {
        $collection = new Collection();

        foreach (CurrencyCode::cases() as $currencyCode) {
            $collection->push(CurrencyFactory::create($currencyCode));
        }

        return $collection;
    }
}
