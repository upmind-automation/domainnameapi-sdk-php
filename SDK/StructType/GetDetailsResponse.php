<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDetailsResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetDetailsResponse
 * @subpackage Structs
 */
class GetDetailsResponse extends BaseMethodResponse
{
    /**
     * The GetDetailsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsResponse $GetDetailsResult = null;
    /**
     * The DomainInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $DomainInfo = null;
    /**
     * Constructor method for GetDetailsResponse
     * @uses GetDetailsResponse::setGetDetailsResult()
     * @uses GetDetailsResponse::setDomainInfo()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsResponse $getDetailsResult
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsResponse $getDetailsResult = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo = null)
    {
        $this
            ->setGetDetailsResult($getDetailsResult)
            ->setDomainInfo($domainInfo);
    }
    /**
     * Get GetDetailsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsResponse|null
     */
    public function getGetDetailsResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsResponse
    {
        return isset($this->GetDetailsResult) ? $this->GetDetailsResult : null;
    }
    /**
     * Set GetDetailsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsResponse $getDetailsResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsResponse
     */
    public function setGetDetailsResult(?\Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsResponse $getDetailsResult = null): self
    {
        if (is_null($getDetailsResult) || (is_array($getDetailsResult) && empty($getDetailsResult))) {
            unset($this->GetDetailsResult);
        } else {
            $this->GetDetailsResult = $getDetailsResult;
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsResponse
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
