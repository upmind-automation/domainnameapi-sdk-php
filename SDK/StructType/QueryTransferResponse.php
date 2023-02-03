<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueryTransferResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:QueryTransferResponse
 * @subpackage Structs
 */
class QueryTransferResponse extends BaseMethodResponse
{
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
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExpirationDate = null;
    /**
     * The TransferLog
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TransferLog = null;
    /**
     * The TransferStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TransferStatus = null;
    /**
     * The QueryTransferResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\QueryTransferResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\QueryTransferResponse $QueryTransferResult = null;
    /**
     * Constructor method for QueryTransferResponse
     * @uses QueryTransferResponse::setCreatedDate()
     * @uses QueryTransferResponse::setDomainName()
     * @uses QueryTransferResponse::setExpirationDate()
     * @uses QueryTransferResponse::setTransferLog()
     * @uses QueryTransferResponse::setTransferStatus()
     * @uses QueryTransferResponse::setQueryTransferResult()
     * @param string $createdDate
     * @param string $domainName
     * @param string $expirationDate
     * @param string $transferLog
     * @param string $transferStatus
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\QueryTransferResponse $queryTransferResult
     */
    public function __construct(?string $createdDate = null, ?string $domainName = null, ?string $expirationDate = null, ?string $transferLog = null, ?string $transferStatus = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\QueryTransferResponse $queryTransferResult = null)
    {
        $this
            ->setCreatedDate($createdDate)
            ->setDomainName($domainName)
            ->setExpirationDate($expirationDate)
            ->setTransferLog($transferLog)
            ->setTransferStatus($transferStatus)
            ->setQueryTransferResult($queryTransferResult);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\QueryTransferResponse
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\QueryTransferResponse
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
     * Get ExpirationDate value
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\QueryTransferResponse
     */
    public function setExpirationDate(?string $expirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        
        return $this;
    }
    /**
     * Get TransferLog value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTransferLog(): ?string
    {
        return isset($this->TransferLog) ? $this->TransferLog : null;
    }
    /**
     * Set TransferLog value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $transferLog
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\QueryTransferResponse
     */
    public function setTransferLog(?string $transferLog = null): self
    {
        // validation for constraint: string
        if (!is_null($transferLog) && !is_string($transferLog)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferLog, true), gettype($transferLog)), __LINE__);
        }
        if (is_null($transferLog) || (is_array($transferLog) && empty($transferLog))) {
            unset($this->TransferLog);
        } else {
            $this->TransferLog = $transferLog;
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\QueryTransferResponse
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
    /**
     * Get QueryTransferResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\QueryTransferResponse|null
     */
    public function getQueryTransferResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\QueryTransferResponse
    {
        return isset($this->QueryTransferResult) ? $this->QueryTransferResult : null;
    }
    /**
     * Set QueryTransferResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\QueryTransferResponse $queryTransferResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\QueryTransferResponse
     */
    public function setQueryTransferResult(?\Upmind\DomainNameApiSdk\SDK\StructType\QueryTransferResponse $queryTransferResult = null): self
    {
        if (is_null($queryTransferResult) || (is_array($queryTransferResult) && empty($queryTransferResult))) {
            unset($this->QueryTransferResult);
        } else {
            $this->QueryTransferResult = $queryTransferResult;
        }
        
        return $this;
    }
}
