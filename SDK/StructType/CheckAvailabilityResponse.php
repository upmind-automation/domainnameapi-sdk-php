<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckAvailabilityResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CheckAvailabilityResponse
 * @subpackage Structs
 */
class CheckAvailabilityResponse extends BaseMethodResponse
{
    /**
     * The DomainAvailabilityInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainAvailabilityInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainAvailabilityInfo $DomainAvailabilityInfoList = null;
    /**
     * The CheckAvailabilityResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse $CheckAvailabilityResult = null;
    /**
     * Constructor method for CheckAvailabilityResponse
     * @uses CheckAvailabilityResponse::setDomainAvailabilityInfoList()
     * @uses CheckAvailabilityResponse::setCheckAvailabilityResult()
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainAvailabilityInfo $domainAvailabilityInfoList
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse $checkAvailabilityResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainAvailabilityInfo $domainAvailabilityInfoList = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse $checkAvailabilityResult = null)
    {
        $this
            ->setDomainAvailabilityInfoList($domainAvailabilityInfoList)
            ->setCheckAvailabilityResult($checkAvailabilityResult);
    }
    /**
     * Get DomainAvailabilityInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainAvailabilityInfo|null
     */
    public function getDomainAvailabilityInfoList(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainAvailabilityInfo
    {
        return isset($this->DomainAvailabilityInfoList) ? $this->DomainAvailabilityInfoList : null;
    }
    /**
     * Set DomainAvailabilityInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainAvailabilityInfo $domainAvailabilityInfoList
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse
     */
    public function setDomainAvailabilityInfoList(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainAvailabilityInfo $domainAvailabilityInfoList = null): self
    {
        if (is_null($domainAvailabilityInfoList) || (is_array($domainAvailabilityInfoList) && empty($domainAvailabilityInfoList))) {
            unset($this->DomainAvailabilityInfoList);
        } else {
            $this->DomainAvailabilityInfoList = $domainAvailabilityInfoList;
        }
        
        return $this;
    }
    /**
     * Get CheckAvailabilityResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse|null
     */
    public function getCheckAvailabilityResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse
    {
        return isset($this->CheckAvailabilityResult) ? $this->CheckAvailabilityResult : null;
    }
    /**
     * Set CheckAvailabilityResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse $checkAvailabilityResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse
     */
    public function setCheckAvailabilityResult(?\Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse $checkAvailabilityResult = null): self
    {
        if (is_null($checkAvailabilityResult) || (is_array($checkAvailabilityResult) && empty($checkAvailabilityResult))) {
            unset($this->CheckAvailabilityResult);
        } else {
            $this->CheckAvailabilityResult = $checkAvailabilityResult;
        }
        
        return $this;
    }
}
