<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetListRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetListRequest extends BasePagedMethodRequest
{
    /**
     * The OrderColumn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderColumn = null;
    /**
     * The DomainName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DomainName = null;
    /**
     * The DomainStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DomainStatus = null;
    /**
     * The ExpirationDateEnd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ExpirationDateEnd = null;
    /**
     * The ExpirationDateStart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ExpirationDateStart = null;
    /**
     * The StartDateEnd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartDateEnd = null;
    /**
     * The StartDateStart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartDateStart = null;
    /**
     * Constructor method for GetListRequest
     * @uses GetListRequest::setOrderColumn()
     * @uses GetListRequest::setDomainName()
     * @uses GetListRequest::setDomainStatus()
     * @uses GetListRequest::setExpirationDateEnd()
     * @uses GetListRequest::setExpirationDateStart()
     * @uses GetListRequest::setStartDateEnd()
     * @uses GetListRequest::setStartDateStart()
     * @param string $orderColumn
     * @param string $domainName
     * @param string $domainStatus
     * @param string $expirationDateEnd
     * @param string $expirationDateStart
     * @param string $startDateEnd
     * @param string $startDateStart
     */
    public function __construct(?string $orderColumn = null, ?string $domainName = null, ?string $domainStatus = null, ?string $expirationDateEnd = null, ?string $expirationDateStart = null, ?string $startDateEnd = null, ?string $startDateStart = null)
    {
        $this
            ->setOrderColumn($orderColumn)
            ->setDomainName($domainName)
            ->setDomainStatus($domainStatus)
            ->setExpirationDateEnd($expirationDateEnd)
            ->setExpirationDateStart($expirationDateStart)
            ->setStartDateEnd($startDateEnd)
            ->setStartDateStart($startDateStart);
    }
    /**
     * Get OrderColumn value
     * @return string|null
     */
    public function getOrderColumn(): ?string
    {
        return $this->OrderColumn;
    }
    /**
     * Set OrderColumn value
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\GetDomainListOrderColumn::valueIsValid()
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\GetDomainListOrderColumn::getValidValues()
     * @throws InvalidArgumentException
     * @param string $orderColumn
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetListRequest
     */
    public function setOrderColumn(?string $orderColumn = null): self
    {
        // validation for constraint: enumeration
        if (!\Upmind\DomainNameApiSdk\SDK\EnumType\GetDomainListOrderColumn::valueIsValid($orderColumn)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Upmind\DomainNameApiSdk\SDK\EnumType\GetDomainListOrderColumn', is_array($orderColumn) ? implode(', ', $orderColumn) : var_export($orderColumn, true), implode(', ', \Upmind\DomainNameApiSdk\SDK\EnumType\GetDomainListOrderColumn::getValidValues())), __LINE__);
        }
        $this->OrderColumn = $orderColumn;
        
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
        return $this->DomainName ?? null;
    }
    /**
     * Set DomainName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $domainName
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetListRequest
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
     * Get DomainStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDomainStatus(): ?string
    {
        return $this->DomainStatus ?? null;
    }
    /**
     * Set DomainStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $domainStatus
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetListRequest
     */
    public function setDomainStatus(?string $domainStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($domainStatus) && !is_string($domainStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domainStatus, true), gettype($domainStatus)), __LINE__);
        }
        if (is_null($domainStatus) || (is_array($domainStatus) && empty($domainStatus))) {
            unset($this->DomainStatus);
        } else {
            $this->DomainStatus = $domainStatus;
        }
        
        return $this;
    }
    /**
     * Get ExpirationDateEnd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExpirationDateEnd(): ?string
    {
        return $this->ExpirationDateEnd ?? null;
    }
    /**
     * Set ExpirationDateEnd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $expirationDateEnd
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetListRequest
     */
    public function setExpirationDateEnd(?string $expirationDateEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDateEnd) && !is_string($expirationDateEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDateEnd, true), gettype($expirationDateEnd)), __LINE__);
        }
        if (is_null($expirationDateEnd) || (is_array($expirationDateEnd) && empty($expirationDateEnd))) {
            unset($this->ExpirationDateEnd);
        } else {
            $this->ExpirationDateEnd = $expirationDateEnd;
        }
        
        return $this;
    }
    /**
     * Get ExpirationDateStart value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExpirationDateStart(): ?string
    {
        return $this->ExpirationDateStart ?? null;
    }
    /**
     * Set ExpirationDateStart value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $expirationDateStart
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetListRequest
     */
    public function setExpirationDateStart(?string $expirationDateStart = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDateStart) && !is_string($expirationDateStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDateStart, true), gettype($expirationDateStart)), __LINE__);
        }
        if (is_null($expirationDateStart) || (is_array($expirationDateStart) && empty($expirationDateStart))) {
            unset($this->ExpirationDateStart);
        } else {
            $this->ExpirationDateStart = $expirationDateStart;
        }
        
        return $this;
    }
    /**
     * Get StartDateEnd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDateEnd(): ?string
    {
        return $this->StartDateEnd ?? null;
    }
    /**
     * Set StartDateEnd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDateEnd
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetListRequest
     */
    public function setStartDateEnd(?string $startDateEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($startDateEnd) && !is_string($startDateEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDateEnd, true), gettype($startDateEnd)), __LINE__);
        }
        if (is_null($startDateEnd) || (is_array($startDateEnd) && empty($startDateEnd))) {
            unset($this->StartDateEnd);
        } else {
            $this->StartDateEnd = $startDateEnd;
        }
        
        return $this;
    }
    /**
     * Get StartDateStart value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDateStart(): ?string
    {
        return $this->StartDateStart ?? null;
    }
    /**
     * Set StartDateStart value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDateStart
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetListRequest
     */
    public function setStartDateStart(?string $startDateStart = null): self
    {
        // validation for constraint: string
        if (!is_null($startDateStart) && !is_string($startDateStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDateStart, true), gettype($startDateStart)), __LINE__);
        }
        if (is_null($startDateStart) || (is_array($startDateStart) && empty($startDateStart))) {
            unset($this->StartDateStart);
        } else {
            $this->StartDateStart = $startDateStart;
        }
        
        return $this;
    }
}
