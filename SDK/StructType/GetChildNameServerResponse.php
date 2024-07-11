<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetChildNameServerResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetChildNameServerResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetChildNameServerResponse extends BaseMethodResponse
{
    /**
     * The ChildNameServerInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo $ChildNameServerInfo = null;
    /**
     * The GetChildNameServerResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServerResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServerResponse $GetChildNameServerResult = null;
    /**
     * Constructor method for GetChildNameServerResponse
     * @uses GetChildNameServerResponse::setChildNameServerInfo()
     * @uses GetChildNameServerResponse::setGetChildNameServerResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo $childNameServerInfo
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServerResponse $getChildNameServerResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo $childNameServerInfo = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServerResponse $getChildNameServerResult = null)
    {
        $this
            ->setChildNameServerInfo($childNameServerInfo)
            ->setGetChildNameServerResult($getChildNameServerResult);
    }
    /**
     * Get ChildNameServerInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo|null
     */
    public function getChildNameServerInfo(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo
    {
        return $this->ChildNameServerInfo ?? null;
    }
    /**
     * Set ChildNameServerInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo $childNameServerInfo
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServerResponse
     */
    public function setChildNameServerInfo(?\Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo $childNameServerInfo = null): self
    {
        if (is_null($childNameServerInfo) || (is_array($childNameServerInfo) && empty($childNameServerInfo))) {
            unset($this->ChildNameServerInfo);
        } else {
            $this->ChildNameServerInfo = $childNameServerInfo;
        }
        
        return $this;
    }
    /**
     * Get GetChildNameServerResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServerResponse|null
     */
    public function getGetChildNameServerResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServerResponse
    {
        return $this->GetChildNameServerResult ?? null;
    }
    /**
     * Set GetChildNameServerResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServerResponse $getChildNameServerResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServerResponse
     */
    public function setGetChildNameServerResult(?\Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServerResponse $getChildNameServerResult = null): self
    {
        if (is_null($getChildNameServerResult) || (is_array($getChildNameServerResult) && empty($getChildNameServerResult))) {
            unset($this->GetChildNameServerResult);
        } else {
            $this->GetChildNameServerResult = $getChildNameServerResult;
        }
        
        return $this;
    }
}
