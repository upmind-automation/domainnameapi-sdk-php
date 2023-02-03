<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDetailsFromRegistryResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetDetailsFromRegistryResponse
 * @subpackage Structs
 */
class GetDetailsFromRegistryResponse extends BaseMethodResponse
{
    /**
     * The GetDetailsFromRegistryResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsFromRegistryResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsFromRegistryResponse $GetDetailsFromRegistryResult = null;
    /**
     * The DomainInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $DomainInfo = null;
    /**
     * Constructor method for GetDetailsFromRegistryResponse
     * @uses GetDetailsFromRegistryResponse::setGetDetailsFromRegistryResult()
     * @uses GetDetailsFromRegistryResponse::setDomainInfo()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsFromRegistryResponse $getDetailsFromRegistryResult
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsFromRegistryResponse $getDetailsFromRegistryResult = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo = null)
    {
        $this
            ->setGetDetailsFromRegistryResult($getDetailsFromRegistryResult)
            ->setDomainInfo($domainInfo);
    }
    /**
     * Get GetDetailsFromRegistryResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsFromRegistryResponse|null
     */
    public function getGetDetailsFromRegistryResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsFromRegistryResponse
    {
        return isset($this->GetDetailsFromRegistryResult) ? $this->GetDetailsFromRegistryResult : null;
    }
    /**
     * Set GetDetailsFromRegistryResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsFromRegistryResponse $getDetailsFromRegistryResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsFromRegistryResponse
     */
    public function setGetDetailsFromRegistryResult(?\Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsFromRegistryResponse $getDetailsFromRegistryResult = null): self
    {
        if (is_null($getDetailsFromRegistryResult) || (is_array($getDetailsFromRegistryResult) && empty($getDetailsFromRegistryResult))) {
            unset($this->GetDetailsFromRegistryResult);
        } else {
            $this->GetDetailsFromRegistryResult = $getDetailsFromRegistryResult;
        }
        
        return $this;
    }
    /**
     * Get DomainInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo|null
     */
    public function getDomainInfo(): ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
    {
        return isset($this->DomainInfo) ? $this->DomainInfo : null;
    }
    /**
     * Set DomainInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsFromRegistryResponse
     */
    public function setDomainInfo(?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo = null): self
    {
        if (is_null($domainInfo) || (is_array($domainInfo) && empty($domainInfo))) {
            unset($this->DomainInfo);
        } else {
            $this->DomainInfo = $domainInfo;
        }
        
        return $this;
    }
}
