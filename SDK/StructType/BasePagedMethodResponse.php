<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasePagedMethodResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BasePagedMethodResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BasePagedMethodResponse extends BaseMethodResponse
{
    /**
     * The PageSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageSize = null;
    /**
     * The TotalCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalCount = null;
    /**
     * Constructor method for BasePagedMethodResponse
     * @uses BasePagedMethodResponse::setPageSize()
     * @uses BasePagedMethodResponse::setTotalCount()
     * @param int $pageSize
     * @param int $totalCount
     */
    public function __construct(?int $pageSize = null, ?int $totalCount = null)
    {
        $this
            ->setPageSize($pageSize)
            ->setTotalCount($totalCount);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BasePagedMethodResponse
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
    /**
     * Get TotalCount value
     * @return int|null
     */
    public function getTotalCount(): ?int
    {
        return $this->TotalCount;
    }
    /**
     * Set TotalCount value
     * @param int $totalCount
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BasePagedMethodResponse
     */
    public function setTotalCount(?int $totalCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalCount) && !(is_int($totalCount) || ctype_digit($totalCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalCount, true), gettype($totalCount)), __LINE__);
        }
        $this->TotalCount = $totalCount;
        
        return $this;
    }
}
