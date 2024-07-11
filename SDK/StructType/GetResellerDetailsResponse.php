<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetResellerDetailsResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetResellerDetailsResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetResellerDetailsResponse extends BaseMethodResponse
{
    /**
     * The ResellerInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ResellerInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ResellerInfo $ResellerInfo = null;
    /**
     * The GetResellerDetailsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\GetResellerDetailsResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\GetResellerDetailsResponse $GetResellerDetailsResult = null;
    /**
     * Constructor method for GetResellerDetailsResponse
     * @uses GetResellerDetailsResponse::setResellerInfo()
     * @uses GetResellerDetailsResponse::setGetResellerDetailsResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ResellerInfo $resellerInfo
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetResellerDetailsResponse $getResellerDetailsResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ResellerInfo $resellerInfo = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\GetResellerDetailsResponse $getResellerDetailsResult = null)
    {
        $this
            ->setResellerInfo($resellerInfo)
            ->setGetResellerDetailsResult($getResellerDetailsResult);
    }
    /**
     * Get ResellerInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ResellerInfo|null
     */
    public function getResellerInfo(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ResellerInfo
    {
        return $this->ResellerInfo ?? null;
    }
    /**
     * Set ResellerInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ResellerInfo $resellerInfo
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetResellerDetailsResponse
     */
    public function setResellerInfo(?\Upmind\DomainNameApiSdk\SDK\StructType\ResellerInfo $resellerInfo = null): self
    {
        if (is_null($resellerInfo) || (is_array($resellerInfo) && empty($resellerInfo))) {
            unset($this->ResellerInfo);
        } else {
            $this->ResellerInfo = $resellerInfo;
        }
        
        return $this;
    }
    /**
     * Get GetResellerDetailsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetResellerDetailsResponse|null
     */
    public function getGetResellerDetailsResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\GetResellerDetailsResponse
    {
        return $this->GetResellerDetailsResult ?? null;
    }
    /**
     * Set GetResellerDetailsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetResellerDetailsResponse $getResellerDetailsResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetResellerDetailsResponse
     */
    public function setGetResellerDetailsResult(?\Upmind\DomainNameApiSdk\SDK\StructType\GetResellerDetailsResponse $getResellerDetailsResult = null): self
    {
        if (is_null($getResellerDetailsResult) || (is_array($getResellerDetailsResult) && empty($getResellerDetailsResult))) {
            unset($this->GetResellerDetailsResult);
        } else {
            $this->GetResellerDetailsResult = $getResellerDetailsResult;
        }
        
        return $this;
    }
}
