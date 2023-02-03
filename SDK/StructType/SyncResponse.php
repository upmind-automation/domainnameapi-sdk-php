<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SyncResponse
 * @subpackage Structs
 */
class SyncResponse extends BaseMethodResponse
{
    /**
     * The SyncResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\SyncResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\SyncResponse $SyncResult = null;
    /**
     * Constructor method for SyncResponse
     * @uses SyncResponse::setSyncResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\SyncResponse $syncResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\SyncResponse $syncResult = null)
    {
        $this
            ->setSyncResult($syncResult);
    }
    /**
     * Get SyncResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SyncResponse|null
     */
    public function getSyncResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\SyncResponse
    {
        return isset($this->SyncResult) ? $this->SyncResult : null;
    }
    /**
     * Set SyncResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\SyncResponse $syncResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SyncResponse
     */
    public function setSyncResult(?\Upmind\DomainNameApiSdk\SDK\StructType\SyncResponse $syncResult = null): self
    {
        if (is_null($syncResult) || (is_array($syncResult) && empty($syncResult))) {
            unset($this->SyncResult);
        } else {
            $this->SyncResult = $syncResult;
        }
        
        return $this;
    }
}
