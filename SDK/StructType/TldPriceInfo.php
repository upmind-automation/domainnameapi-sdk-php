<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TldPriceInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TldPriceInfo
 * @subpackage Structs
 */
class TldPriceInfo extends AbstractStructBase
{
    /**
     * The OrMore
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $OrMore = null;
    /**
     * The Period
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Period = null;
    /**
     * The Price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Price = null;
    /**
     * The TradeType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TradeType = null;
    /**
     * Constructor method for TldPriceInfo
     * @uses TldPriceInfo::setOrMore()
     * @uses TldPriceInfo::setPeriod()
     * @uses TldPriceInfo::setPrice()
     * @uses TldPriceInfo::setTradeType()
     * @param bool $orMore
     * @param int $period
     * @param float $price
     * @param string $tradeType
     */
    public function __construct(?bool $orMore = null, ?int $period = null, ?float $price = null, ?string $tradeType = null)
    {
        $this
            ->setOrMore($orMore)
            ->setPeriod($period)
            ->setPrice($price)
            ->setTradeType($tradeType);
    }
    /**
     * Get OrMore value
     * @return bool|null
     */
    public function getOrMore(): ?bool
    {
        return $this->OrMore;
    }
    /**
     * Set OrMore value
     * @param bool $orMore
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo
     */
    public function setOrMore(?bool $orMore = null): self
    {
        // validation for constraint: boolean
        if (!is_null($orMore) && !is_bool($orMore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($orMore, true), gettype($orMore)), __LINE__);
        }
        $this->OrMore = $orMore;
        
        return $this;
    }
    /**
     * Get Period value
     * @return int|null
     */
    public function getPeriod(): ?int
    {
        return $this->Period;
    }
    /**
     * Set Period value
     * @param int $period
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo
     */
    public function setPeriod(?int $period = null): self
    {
        // validation for constraint: int
        if (!is_null($period) && !(is_int($period) || ctype_digit($period))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($period, true), gettype($period)), __LINE__);
        }
        $this->Period = $period;
        
        return $this;
    }
    /**
     * Get Price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param float $price
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->Price = $price;
        
        return $this;
    }
    /**
     * Get TradeType value
     * @return string|null
     */
    public function getTradeType(): ?string
    {
        return $this->TradeType;
    }
    /**
     * Set TradeType value
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\TradeType::valueIsValid()
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\TradeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $tradeType
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo
     */
    public function setTradeType(?string $tradeType = null): self
    {
        // validation for constraint: enumeration
        if (!\Upmind\DomainNameApiSdk\SDK\EnumType\TradeType::valueIsValid($tradeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Upmind\DomainNameApiSdk\SDK\EnumType\TradeType', is_array($tradeType) ? implode(', ', $tradeType) : var_export($tradeType, true), implode(', ', \Upmind\DomainNameApiSdk\SDK\EnumType\TradeType::getValidValues())), __LINE__);
        }
        $this->TradeType = $tradeType;
        
        return $this;
    }
}
