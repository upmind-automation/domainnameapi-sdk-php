<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisableTheftProtectionLockResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DisableTheftProtectionLockResponse
 * @subpackage Structs
 */
class DisableTheftProtectionLockResponse extends BaseMethodResponse
{
    /**
     * The DisableTheftProtectionLockResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\DisableTheftProtectionLockResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\DisableTheftProtectionLockResponse $DisableTheftProtectionLockResult = null;
    /**
     * Constructor method for DisableTheftProtectionLockResponse
     * @uses DisableTheftProtectionLockResponse::setDisableTheftProtectionLockResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DisableTheftProtectionLockResponse $disableTheftProtectionLockResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\DisableTheftProtectionLockResponse $disableTheftProtectionLockResult = null)
    {
        $this
            ->setDisableTheftProtectionLockResult($disableTheftProtectionLockResult);
    }
    /**
     * Get DisableTheftProtectionLockResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DisableTheftProtectionLockResponse|null
     */
    public function getDisableTheftProtectionLockResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\DisableTheftProtectionLockResponse
    {
        return isset($this->DisableTheftProtectionLockResult) ? $this->DisableTheftProtectionLockResult : null;
    }
    /**
     * Set DisableTheftProtectionLockResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DisableTheftProtectionLockResponse $disableTheftProtectionLockResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DisableTheftProtectionLockResponse
     */
    public function setDisableTheftProtectionLockResult(?\Upmind\DomainNameApiSdk\SDK\StructType\DisableTheftProtectionLockResponse $disableTheftProtectionLockResult = null): self
    {
        if (is_null($disableTheftProtectionLockResult) || (is_array($disableTheftProtectionLockResult) && empty($disableTheftProtectionLockResult))) {
            unset($this->DisableTheftProtectionLockResult);
        } else {
            $this->DisableTheftProtectionLockResult = $disableTheftProtectionLockResult;
        }
        
        return $this;
    }
}
