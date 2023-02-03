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
class TransferResponse extends BaseMethodResponse
{
    /**
     * The TransferResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\TransferResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\TransferResponse $TransferResult = null;
    /**
     * The DomainInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $DomainInfo = null;
    /**
     * Constructor method for TransferResponse
     * @uses TransferResponse::setTransferResult()
     * @uses TransferResponse::setDomainInfo()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\TransferResponse $transferResult
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\TransferResponse $transferResult = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo = null)
    {
        $this
            ->setTransferResult($transferResult)
            ->setDomainInfo($domainInfo);
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
        return isset($this->TransferResult) ? $this->TransferResult : null;
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
}
