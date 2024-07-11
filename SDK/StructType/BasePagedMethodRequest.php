<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasePagedMethodRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BasePagedMethodRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BasePagedMethodRequest extends BaseMethodRequest
{
    /**
     * The OrderDirection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderDirection = null;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageNumber = null;
    /**
     * The PageSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageSize = null;
    /**
     * Constructor method for BasePagedMethodRequest
     * @uses BasePagedMethodRequest::setOrderDirection()
     * @uses BasePagedMethodRequest::setPageNumber()
     * @uses BasePagedMethodRequest::setPageSize()
     * @param string $orderDirection
     * @param int $pageNumber
     * @param int $pageSize
     */
    public function __construct(?string $orderDirection = null, ?int $pageNumber = null, ?int $pageSize = null)
    {
        $this
            ->setOrderDirection($orderDirection)
            ->setPageNumber($pageNumber)
            ->setPageSize($pageSize);
    }
    /**
     * Get OrderDirection value
     * @return string|null
     */
    public function getOrderDirection(): ?string
    {
        return $this->OrderDirection;
    }
    /**
     * Set OrderDirection value
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\OrderDirection::valueIsValid()
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\OrderDirection::getValidValues()
     * @throws InvalidArgumentException
     * @param string $orderDirection
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BasePagedMethodRequest
     */
    public function setOrderDirection(?string $orderDirection = null): self
    {
        // validation for constraint: enumeration
        if (!\Upmind\DomainNameApiSdk\SDK\EnumType\OrderDirection::valueIsValid($orderDirection)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Upmind\DomainNameApiSdk\SDK\EnumType\OrderDirection', is_array($orderDirection) ? implode(', ', $orderDirection) : var_export($orderDirection, true), implode(', ', \Upmind\DomainNameApiSdk\SDK\EnumType\OrderDirection::getValidValues())), __LINE__);
        }
        $this->OrderDirection = $orderDirection;
        
        return $this;
    }
    /**
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber(): ?int
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BasePagedMethodRequest
     */
    public function setPageNumber(?int $pageNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !(is_int($pageNumber) || ctype_digit($pageNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNumber, true), gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
        
        return $this;
    }
    /**
     * Get PageSize value
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->PageSize;
    }
    /**
     * Set PageSize value
     * @param int $pageSize
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BasePagedMethodRequest
     */
    public function setPageSize(?int $pageSize = null): self
    {
        // validation for constraint: int
        if (!is_null($pageSize) && !(is_int($pageSize) || ctype_digit($pageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageSize, true), gettype($pageSize)), __LINE__);
        }
        $this->PageSize = $pageSize;
        
        return $this;
    }
}
