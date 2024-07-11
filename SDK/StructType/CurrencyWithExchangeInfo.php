<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyWithExchangeInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CurrencyWithExchangeInfo
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CurrencyWithExchangeInfo extends CurrencyInfo
{
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Date = null;
    /**
     * The Exchange
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Exchange = null;
    /**
     * Constructor method for CurrencyWithExchangeInfo
     * @uses CurrencyWithExchangeInfo::setDate()
     * @uses CurrencyWithExchangeInfo::setExchange()
     * @param string $date
     * @param float $exchange
     */
    public function __construct(?string $date = null, ?float $exchange = null)
    {
        $this
            ->setDate($date)
            ->setExchange($exchange);
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CurrencyWithExchangeInfo
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        
        return $this;
    }
    /**
     * Get Exchange value
     * @return float|null
     */
    public function getExchange(): ?float
    {
        return $this->Exchange;
    }
    /**
     * Set Exchange value
     * @param float $exchange
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CurrencyWithExchangeInfo
     */
    public function setExchange(?float $exchange = null): self
    {
        // validation for constraint: float
        if (!is_null($exchange) && !(is_float($exchange) || is_numeric($exchange))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($exchange, true), gettype($exchange)), __LINE__);
        }
        $this->Exchange = $exchange;
        
        return $this;
    }
}
