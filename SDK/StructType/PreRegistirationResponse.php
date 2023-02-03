<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreRegistirationResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PreRegistirationResponse
 * @subpackage Structs
 */
class PreRegistirationResponse extends BaseMethodResponse
{
    /**
     * The PreRegistirationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\PreRegistirationResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\PreRegistirationResponse $PreRegistirationResult = null;
    /**
     * Constructor method for PreRegistirationResponse
     * @uses PreRegistirationResponse::setPreRegistirationResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\PreRegistirationResponse $preRegistirationResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\PreRegistirationResponse $preRegistirationResult = null)
    {
        $this
            ->setPreRegistirationResult($preRegistirationResult);
    }
    /**
     * Get PreRegistirationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PreRegistirationResponse|null
     */
    public function getPreRegistirationResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\PreRegistirationResponse
    {
        return isset($this->PreRegistirationResult) ? $this->PreRegistirationResult : null;
    }
    /**
     * Set PreRegistirationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\PreRegistirationResponse $preRegistirationResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PreRegistirationResponse
     */
    public function setPreRegistirationResult(?\Upmind\DomainNameApiSdk\SDK\StructType\PreRegistirationResponse $preRegistirationResult = null): self
    {
        if (is_null($preRegistirationResult) || (is_array($preRegistirationResult) && empty($preRegistirationResult))) {
            unset($this->PreRegistirationResult);
        } else {
            $this->PreRegistirationResult = $preRegistirationResult;
        }
        
        return $this;
    }
}
