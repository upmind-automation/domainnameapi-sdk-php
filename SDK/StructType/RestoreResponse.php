<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RestoreResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RestoreResponse
 * @subpackage Structs
 */
class RestoreResponse extends BaseMethodResponse
{
    /**
     * The RestoreResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\RestoreResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\RestoreResponse $RestoreResult = null;
    /**
     * Constructor method for RestoreResponse
     * @uses RestoreResponse::setRestoreResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\RestoreResponse $restoreResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\RestoreResponse $restoreResult = null)
    {
        $this
            ->setRestoreResult($restoreResult);
    }
    /**
     * Get RestoreResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RestoreResponse|null
     */
    public function getRestoreResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\RestoreResponse
    {
        return isset($this->RestoreResult) ? $this->RestoreResult : null;
    }
    /**
     * Set RestoreResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\RestoreResponse $restoreResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RestoreResponse
     */
    public function setRestoreResult(?\Upmind\DomainNameApiSdk\SDK\StructType\RestoreResponse $restoreResult = null): self
    {
        if (is_null($restoreResult) || (is_array($restoreResult) && empty($restoreResult))) {
            unset($this->RestoreResult);
        } else {
            $this->RestoreResult = $restoreResult;
        }
        
        return $this;
    }
}
