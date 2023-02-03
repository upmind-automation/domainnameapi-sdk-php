<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelTransferResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CancelTransferResponse
 * @subpackage Structs
 */
class CancelTransferResponse extends BaseMethodResponse
{
    /**
     * The CancelTransferResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\CancelTransferResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\CancelTransferResponse $CancelTransferResult = null;
    /**
     * The CreatedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreatedDate = null;
    /**
     * The DomainName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DomainName = null;
    /**
     * The TransferStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TransferStatus = null;
    /**
     * Constructor method for CancelTransferResponse
     * @uses CancelTransferResponse::setCancelTransferResult()
     * @uses CancelTransferResponse::setCreatedDate()
     * @uses CancelTransferResponse::setDomainName()
     * @uses CancelTransferResponse::setTransferStatus()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CancelTransferResponse $cancelTransferResult
     * @param string $createdDate
     * @param string $domainName
     * @param string $transferStatus
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\CancelTransferResponse $cancelTransferResult = null, ?string $createdDate = null, ?string $domainName = null, ?string $transferStatus = null)
    {
        $this
            ->setCancelTransferResult($cancelTransferResult)
            ->setCreatedDate($createdDate)
            ->setDomainName($domainName)
            ->setTransferStatus($transferStatus);
    }
    /**
     * Get CancelTransferResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CancelTransferResponse|null
     */
    public function getCancelTransferResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\CancelTransferResponse
    {
        return isset($this->CancelTransferResult) ? $this->CancelTransferResult : null;
    }
    /**
     * Set CancelTransferResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CancelTransferResponse $cancelTransferResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CancelTransferResponse
     */
    public function setCancelTransferResult(?\Upmind\DomainNameApiSdk\SDK\StructType\CancelTransferResponse $cancelTransferResult = null): self
    {
        if (is_null($cancelTransferResult) || (is_array($cancelTransferResult) && empty($cancelTransferResult))) {
            unset($this->CancelTransferResult);
        } else {
            $this->CancelTransferResult = $cancelTransferResult;
        }
        
        return $this;
    }
    /**
     * Get CreatedDate value
     * @return string|null
     */
    public function getCreatedDate(): ?string
    {
        return $this->CreatedDate;
    }
    /**
     * Set CreatedDate value
     * @param string $createdDate
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CancelTransferResponse
     */
    public function setCreatedDate(?string $createdDate = null): self
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdDate, true), gettype($createdDate)), __LINE__);
        }
        $this->CreatedDate = $createdDate;
        
        return $this;
    }
    /**
     * Get DomainName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDomainName(): ?string
    {
        return isset($this->DomainName) ? $this->DomainName : null;
    }
    /**
     * Set DomainName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $domainName
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CancelTransferResponse
     */
    public function setDomainName(?string $domainName = null): self
    {
        // validation for constraint: string
        if (!is_null($domainName) && !is_string($domainName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domainName, true), gettype($domainName)), __LINE__);
        }
        if (is_null($domainName) || (is_array($domainName) && empty($domainName))) {
            unset($this->DomainName);
        } else {
            $this->DomainName = $domainName;
        }
        
        return $this;
    }
    /**
     * Get TransferStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTransferStatus(): ?string
    {
        return isset($this->TransferStatus) ? $this->TransferStatus : null;
    }
    /**
     * Set TransferStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $transferStatus
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CancelTransferResponse
     */
    public function setTransferStatus(?string $transferStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($transferStatus) && !is_string($transferStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferStatus, true), gettype($transferStatus)), __LINE__);
        }
        if (is_null($transferStatus) || (is_array($transferStatus) && empty($transferStatus))) {
            unset($this->TransferStatus);
        } else {
            $this->TransferStatus = $transferStatus;
        }
        
        return $this;
    }
}
