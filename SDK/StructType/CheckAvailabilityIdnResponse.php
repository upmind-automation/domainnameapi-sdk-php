<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckAvailabilityIdnResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CheckAvailabilityIdnResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckAvailabilityIdnResponse extends BaseMethodResponse
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
     * The CheckAvailabilityIdnResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdnResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdnResponse $CheckAvailabilityIdnResult = null;
    /**
     * Constructor method for CheckAvailabilityIdnResponse
     * @uses CheckAvailabilityIdnResponse::setDomainAvailabilityInfoList()
     * @uses CheckAvailabilityIdnResponse::setCheckAvailabilityIdnResult()
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainAvailabilityInfo $domainAvailabilityInfoList
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdnResponse $checkAvailabilityIdnResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainAvailabilityInfo $domainAvailabilityInfoList = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdnResponse $checkAvailabilityIdnResult = null)
    {
        $this
            ->setDomainAvailabilityInfoList($domainAvailabilityInfoList)
            ->setCheckAvailabilityIdnResult($checkAvailabilityIdnResult);
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
        return $this->DomainAvailabilityInfoList ?? null;
    }
    /**
     * Set DomainAvailabilityInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainAvailabilityInfo $domainAvailabilityInfoList
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdnResponse
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
     * Get CheckAvailabilityIdnResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdnResponse|null
     */
    public function getCheckAvailabilityIdnResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdnResponse
    {
        return $this->CheckAvailabilityIdnResult ?? null;
    }
    /**
     * Set CheckAvailabilityIdnResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdnResponse $checkAvailabilityIdnResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdnResponse
     */
    public function setCheckAvailabilityIdnResult(?\Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdnResponse $checkAvailabilityIdnResult = null): self
    {
        if (is_null($checkAvailabilityIdnResult) || (is_array($checkAvailabilityIdnResult) && empty($checkAvailabilityIdnResult))) {
            unset($this->CheckAvailabilityIdnResult);
        } else {
            $this->CheckAvailabilityIdnResult = $checkAvailabilityIdnResult;
        }
        
        return $this;
    }
}
