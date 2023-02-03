<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetListResponse
 * @subpackage Structs
 */
class GetListResponse extends BasePagedMethodResponse
{
    /**
     * The GetListResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\GetListResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\GetListResponse $GetListResult = null;
    /**
     * The DomainInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainInfo $DomainInfoList = null;
    /**
     * Constructor method for GetListResponse
     * @uses GetListResponse::setGetListResult()
     * @uses GetListResponse::setDomainInfoList()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetListResponse $getListResult
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainInfo $domainInfoList
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\GetListResponse $getListResult = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainInfo $domainInfoList = null)
    {
        $this
            ->setGetListResult($getListResult)
            ->setDomainInfoList($domainInfoList);
    }
    /**
     * Get GetListResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetListResponse|null
     */
    public function getGetListResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\GetListResponse
    {
        return isset($this->GetListResult) ? $this->GetListResult : null;
    }
    /**
     * Set GetListResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetListResponse $getListResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetListResponse
     */
    public function setGetListResult(?\Upmind\DomainNameApiSdk\SDK\StructType\GetListResponse $getListResult = null): self
    {
        if (is_null($getListResult) || (is_array($getListResult) && empty($getListResult))) {
            unset($this->GetListResult);
        } else {
            $this->GetListResult = $getListResult;
        }
        
        return $this;
    }
    /**
     * Get DomainInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainInfo|null
     */
    public function getDomainInfoList(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainInfo
    {
        return isset($this->DomainInfoList) ? $this->DomainInfoList : null;
    }
    /**
     * Set DomainInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainInfo $domainInfoList
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetListResponse
     */
    public function setDomainInfoList(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainInfo $domainInfoList = null): self
    {
        if (is_null($domainInfoList) || (is_array($domainInfoList) && empty($domainInfoList))) {
            unset($this->DomainInfoList);
        } else {
            $this->DomainInfoList = $domainInfoList;
        }
        
        return $this;
    }
}
