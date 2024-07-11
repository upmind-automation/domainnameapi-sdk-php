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
#[\AllowDynamicProperties]
class SyncFromRegistryResponse extends BaseMethodResponse
{
    /**
     * The DomainInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $DomainInfo = null;
    /**
     * The SyncFromRegistryResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse $SyncFromRegistryResult = null;
    /**
     * Constructor method for SyncFromRegistryResponse
     * @uses SyncFromRegistryResponse::setDomainInfo()
     * @uses SyncFromRegistryResponse::setSyncFromRegistryResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse $syncFromRegistryResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse $syncFromRegistryResult = null)
    {
        $this
            ->setDomainInfo($domainInfo)
            ->setSyncFromRegistryResult($syncFromRegistryResult);
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
        return $this->DomainInfo ?? null;
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
    /**
     * Get SyncFromRegistryResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse|null
     */
    public function getSyncFromRegistryResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse
    {
        return $this->SyncFromRegistryResult ?? null;
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
}
