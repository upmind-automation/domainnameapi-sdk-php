<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnableTheftProtectionLockResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EnableTheftProtectionLockResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EnableTheftProtectionLockResponse extends BaseMethodResponse
{
    /**
     * The EnableTheftProtectionLockResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\EnableTheftProtectionLockResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\EnableTheftProtectionLockResponse $EnableTheftProtectionLockResult = null;
    /**
     * Constructor method for EnableTheftProtectionLockResponse
     * @uses EnableTheftProtectionLockResponse::setEnableTheftProtectionLockResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\EnableTheftProtectionLockResponse $enableTheftProtectionLockResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\EnableTheftProtectionLockResponse $enableTheftProtectionLockResult = null)
    {
        $this
            ->setEnableTheftProtectionLockResult($enableTheftProtectionLockResult);
    }
    /**
     * Get EnableTheftProtectionLockResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\EnableTheftProtectionLockResponse|null
     */
    public function getEnableTheftProtectionLockResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\EnableTheftProtectionLockResponse
    {
        return $this->EnableTheftProtectionLockResult ?? null;
    }
    /**
     * Set EnableTheftProtectionLockResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\EnableTheftProtectionLockResponse $enableTheftProtectionLockResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\EnableTheftProtectionLockResponse
     */
    public function setEnableTheftProtectionLockResult(?\Upmind\DomainNameApiSdk\SDK\StructType\EnableTheftProtectionLockResponse $enableTheftProtectionLockResult = null): self
    {
        if (is_null($enableTheftProtectionLockResult) || (is_array($enableTheftProtectionLockResult) && empty($enableTheftProtectionLockResult))) {
            unset($this->EnableTheftProtectionLockResult);
        } else {
            $this->EnableTheftProtectionLockResult = $enableTheftProtectionLockResult;
        }
        
        return $this;
    }
}
