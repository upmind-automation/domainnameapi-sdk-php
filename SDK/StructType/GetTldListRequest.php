<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTldListRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetTldListRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTldListRequest extends BasePagedMethodRequest
{
    /**
     * The IncludePriceDefinitions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludePriceDefinitions = null;
    /**
     * The OrderColumn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderColumn = null;
    /**
     * The CurrencyId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $CurrencyId = null;
    /**
     * Constructor method for GetTldListRequest
     * @uses GetTldListRequest::setIncludePriceDefinitions()
     * @uses GetTldListRequest::setOrderColumn()
     * @uses GetTldListRequest::setCurrencyId()
     * @param bool $includePriceDefinitions
     * @param string $orderColumn
     * @param int $currencyId
     */
    public function __construct(?bool $includePriceDefinitions = null, ?string $orderColumn = null, ?int $currencyId = null)
    {
        $this
            ->setIncludePriceDefinitions($includePriceDefinitions)
            ->setOrderColumn($orderColumn)
            ->setCurrencyId($currencyId);
    }
    /**
     * Get IncludePriceDefinitions value
     * @return bool|null
     */
    public function getIncludePriceDefinitions(): ?bool
    {
        return $this->IncludePriceDefinitions;
    }
    /**
     * Set IncludePriceDefinitions value
     * @param bool $includePriceDefinitions
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetTldListRequest
     */
    public function setIncludePriceDefinitions(?bool $includePriceDefinitions = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includePriceDefinitions) && !is_bool($includePriceDefinitions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includePriceDefinitions, true), gettype($includePriceDefinitions)), __LINE__);
        }
        $this->IncludePriceDefinitions = $includePriceDefinitions;
        
        return $this;
    }
    /**
     * Get OrderColumn value
     * @return string|null
     */
    public function getOrderColumn(): ?string
    {
        return $this->OrderColumn;
    }
    /**
     * Set OrderColumn value
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\GetTldListOrderColumn::valueIsValid()
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\GetTldListOrderColumn::getValidValues()
     * @throws InvalidArgumentException
     * @param string $orderColumn
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetTldListRequest
     */
    public function setOrderColumn(?string $orderColumn = null): self
    {
        // validation for constraint: enumeration
        if (!\Upmind\DomainNameApiSdk\SDK\EnumType\GetTldListOrderColumn::valueIsValid($orderColumn)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Upmind\DomainNameApiSdk\SDK\EnumType\GetTldListOrderColumn', is_array($orderColumn) ? implode(', ', $orderColumn) : var_export($orderColumn, true), implode(', ', \Upmind\DomainNameApiSdk\SDK\EnumType\GetTldListOrderColumn::getValidValues())), __LINE__);
        }
        $this->OrderColumn = $orderColumn;
        
        return $this;
    }
    /**
     * Get CurrencyId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCurrencyId(): ?int
    {
        return $this->CurrencyId ?? null;
    }
    /**
     * Set CurrencyId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $currencyId
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetTldListRequest
     */
    public function setCurrencyId(?int $currencyId = null): self
    {
        // validation for constraint: int
        if (!is_null($currencyId) && !(is_int($currencyId) || ctype_digit($currencyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($currencyId, true), gettype($currencyId)), __LINE__);
        }
        if (is_null($currencyId) || (is_array($currencyId) && empty($currencyId))) {
            unset($this->CurrencyId);
        } else {
            $this->CurrencyId = $currencyId;
        }
        
        return $this;
    }
}
