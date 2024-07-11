<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TransferResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TransferResponse extends BaseMethodResponse
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
     * The TransferResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\TransferResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\TransferResponse $TransferResult = null;
    /**
     * Constructor method for TransferResponse
     * @uses TransferResponse::setDomainInfo()
     * @uses TransferResponse::setTransferResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\TransferResponse $transferResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\TransferResponse $transferResult = null)
    {
        $this
            ->setDomainInfo($domainInfo)
            ->setTransferResult($transferResult);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TransferResponse
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
     * Get TransferResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TransferResponse|null
     */
    public function getTransferResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\TransferResponse
    {
        return $this->TransferResult ?? null;
    }
    /**
     * Set TransferResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\TransferResponse $transferResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TransferResponse
     */
    public function setTransferResult(?\Upmind\DomainNameApiSdk\SDK\StructType\TransferResponse $transferResult = null): self
    {
        if (is_null($transferResult) || (is_array($transferResult) && empty($transferResult))) {
            unset($this->TransferResult);
        } else {
            $this->TransferResult = $transferResult;
        }
        
        return $this;
    }
}
