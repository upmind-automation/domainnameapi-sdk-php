<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTldListResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetTldListResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTldListResponse extends BaseMethodResponse
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
     * The TldInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldInfo $TldInfoList = null;
    /**
     * The GetTldListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\GetTldListResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\GetTldListResponse $GetTldListResult = null;
    /**
     * Constructor method for GetTldListResponse
     * @uses GetTldListResponse::setPageSize()
     * @uses GetTldListResponse::setTotalCount()
     * @uses GetTldListResponse::setTldInfoList()
     * @uses GetTldListResponse::setGetTldListResult()
     * @param int $pageSize
     * @param int $totalCount
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldInfo $tldInfoList
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetTldListResponse $getTldListResult
     */
    public function __construct(?int $pageSize = null, ?int $totalCount = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldInfo $tldInfoList = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\GetTldListResponse $getTldListResult = null)
    {
        $this
            ->setPageSize($pageSize)
            ->setTotalCount($totalCount)
            ->setTldInfoList($tldInfoList)
            ->setGetTldListResult($getTldListResult);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetTldListResponse
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetTldListResponse
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
    /**
     * Get TldInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldInfo|null
     */
    public function getTldInfoList(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldInfo
    {
        return $this->TldInfoList ?? null;
    }
    /**
     * Set TldInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldInfo $tldInfoList
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetTldListResponse
     */
    public function setTldInfoList(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldInfo $tldInfoList = null): self
    {
        if (is_null($tldInfoList) || (is_array($tldInfoList) && empty($tldInfoList))) {
            unset($this->TldInfoList);
        } else {
            $this->TldInfoList = $tldInfoList;
        }
        
        return $this;
    }
    /**
     * Get GetTldListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetTldListResponse|null
     */
    public function getGetTldListResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\GetTldListResponse
    {
        return $this->GetTldListResult ?? null;
    }
    /**
     * Set GetTldListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetTldListResponse $getTldListResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetTldListResponse
     */
    public function setGetTldListResult(?\Upmind\DomainNameApiSdk\SDK\StructType\GetTldListResponse $getTldListResult = null): self
    {
        if (is_null($getTldListResult) || (is_array($getTldListResult) && empty($getTldListResult))) {
            unset($this->GetTldListResult);
        } else {
            $this->GetTldListResult = $getTldListResult;
        }
        
        return $this;
    }
}
