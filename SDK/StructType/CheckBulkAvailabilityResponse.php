<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckBulkAvailabilityResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckBulkAvailabilityResponse extends AbstractStructBase
{
    /**
     * The CheckBulkAvailabilityResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse $CheckBulkAvailabilityResult = null;
    /**
     * Constructor method for CheckBulkAvailabilityResponse
     * @uses CheckBulkAvailabilityResponse::setCheckBulkAvailabilityResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse $checkBulkAvailabilityResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse $checkBulkAvailabilityResult = null)
    {
        $this
            ->setCheckBulkAvailabilityResult($checkBulkAvailabilityResult);
    }
    /**
     * Get CheckBulkAvailabilityResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse|null
     */
    public function getCheckBulkAvailabilityResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse
    {
        return $this->CheckBulkAvailabilityResult ?? null;
    }
    /**
     * Set CheckBulkAvailabilityResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse $checkBulkAvailabilityResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckBulkAvailabilityResponse
     */
    public function setCheckBulkAvailabilityResult(?\Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse $checkBulkAvailabilityResult = null): self
    {
        if (is_null($checkBulkAvailabilityResult) || (is_array($checkBulkAvailabilityResult) && empty($checkBulkAvailabilityResult))) {
            unset($this->CheckBulkAvailabilityResult);
        } else {
            $this->CheckBulkAvailabilityResult = $checkBulkAvailabilityResult;
        }
        
        return $this;
    }
}
