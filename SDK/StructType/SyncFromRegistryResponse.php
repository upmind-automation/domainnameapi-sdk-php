<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncFromRegistryResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SyncFromRegistryResponse
 * @subpackage Structs
 */
class SyncFromRegistryResponse extends BaseMethodResponse
{
    /**
     * The SyncFromRegistryResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse $SyncFromRegistryResult = null;
    /**
     * The DomainInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $DomainInfo = null;
    /**
     * Constructor method for SyncFromRegistryResponse
     * @uses SyncFromRegistryResponse::setSyncFromRegistryResult()
     * @uses SyncFromRegistryResponse::setDomainInfo()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse $syncFromRegistryResult
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse $syncFromRegistryResult = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo = null)
    {
        $this
            ->setSyncFromRegistryResult($syncFromRegistryResult)
            ->setDomainInfo($domainInfo);
    }
    /**
     * Get SyncFromRegistryResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse|null
     */
    public function getSyncFromRegistryResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse
    {
        return isset($this->SyncFromRegistryResult) ? $this->SyncFromRegistryResult : null;
    }
    /**
     * Set SyncFromRegistryResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse $syncFromRegistryResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse
     */
    public function setSyncFromRegistryResult(?\Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse $syncFromRegistryResult = null): self
    {
        if (is_null($syncFromRegistryResult) || (is_array($syncFromRegistryResult) && empty($syncFromRegistryResult))) {
            unset($this->SyncFromRegistryResult);
        } else {
            $this->SyncFromRegistryResult = $syncFromRegistryResult;
        }
        
        return $this;
    }
    /**
     * Get DomainInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo|null
     */
    public function getDomainInfo(): ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
    {
        return isset($this->DomainInfo) ? $this->DomainInfo : null;
    }
    /**
     * Set DomainInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse
     */
    public function setDomainInfo(?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo = null): self
    {
        if (is_null($domainInfo) || (is_array($domainInfo) && empty($domainInfo))) {
            unset($this->DomainInfo);
        } else {
            $this->DomainInfo = $domainInfo;
        }
        
        return $this;
    }
}
