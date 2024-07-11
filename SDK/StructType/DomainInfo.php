<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomainInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DomainInfo
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DomainInfo extends BaseData
{
    /**
     * The AdministrativeContactId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $AdministrativeContactId = null;
    /**
     * The BillingContactId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $BillingContactId = null;
    /**
     * The IsChildNameServer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsChildNameServer = null;
    /**
     * The LockStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LockStatus = null;
    /**
     * The PrivacyProtectionStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PrivacyProtectionStatus = null;
    /**
     * The RegistrantContactId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RegistrantContactId = null;
    /**
     * The RemainingDay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RemainingDay = null;
    /**
     * The TechnicalContactId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TechnicalContactId = null;
    /**
     * The AdditionalAttributes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $AdditionalAttributes = null;
    /**
     * The Auth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Auth = null;
    /**
     * The ChildNameServerInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo $ChildNameServerInfo = null;
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
     * - nillable: true
     * @var string|null
     */
    protected ?string $ExpirationDate = null;
    /**
     * The NameServerList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $NameServerList = null;
    /**
     * The RGPStatues
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfRGPStatus|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfRGPStatus $RGPStatues = null;
    /**
     * The RenewalMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RenewalMode = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * The StatusCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StatusCode = null;
    /**
     * The TransferDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TransferDate = null;
    /**
     * The UpdatedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $UpdatedDate = null;
    /**
     * Constructor method for DomainInfo
     * @uses DomainInfo::setAdministrativeContactId()
     * @uses DomainInfo::setBillingContactId()
     * @uses DomainInfo::setIsChildNameServer()
     * @uses DomainInfo::setLockStatus()
     * @uses DomainInfo::setPrivacyProtectionStatus()
     * @uses DomainInfo::setRegistrantContactId()
     * @uses DomainInfo::setRemainingDay()
     * @uses DomainInfo::setTechnicalContactId()
     * @uses DomainInfo::setAdditionalAttributes()
     * @uses DomainInfo::setAuth()
     * @uses DomainInfo::setChildNameServerInfo()
     * @uses DomainInfo::setDomainName()
     * @uses DomainInfo::setExpirationDate()
     * @uses DomainInfo::setNameServerList()
     * @uses DomainInfo::setRGPStatues()
     * @uses DomainInfo::setRenewalMode()
     * @uses DomainInfo::setStartDate()
     * @uses DomainInfo::setStatusCode()
     * @uses DomainInfo::setTransferDate()
     * @uses DomainInfo::setUpdatedDate()
     * @param int $administrativeContactId
     * @param int $billingContactId
     * @param bool $isChildNameServer
     * @param bool $lockStatus
     * @param bool $privacyProtectionStatus
     * @param int $registrantContactId
     * @param int $remainingDay
     * @param int $technicalContactId
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes
     * @param string $auth
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo $childNameServerInfo
     * @param string $domainName
     * @param string $expirationDate
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $nameServerList
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfRGPStatus $rGPStatues
     * @param string $renewalMode
     * @param string $startDate
     * @param string $statusCode
     * @param string $transferDate
     * @param string $updatedDate
     */
    public function __construct(?int $administrativeContactId = null, ?int $billingContactId = null, ?bool $isChildNameServer = null, ?bool $lockStatus = null, ?bool $privacyProtectionStatus = null, ?int $registrantContactId = null, ?int $remainingDay = null, ?int $technicalContactId = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes = null, ?string $auth = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo $childNameServerInfo = null, ?string $domainName = null, ?string $expirationDate = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $nameServerList = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfRGPStatus $rGPStatues = null, ?string $renewalMode = null, ?string $startDate = null, ?string $statusCode = null, ?string $transferDate = null, ?string $updatedDate = null)
    {
        $this
            ->setAdministrativeContactId($administrativeContactId)
            ->setBillingContactId($billingContactId)
            ->setIsChildNameServer($isChildNameServer)
            ->setLockStatus($lockStatus)
            ->setPrivacyProtectionStatus($privacyProtectionStatus)
            ->setRegistrantContactId($registrantContactId)
            ->setRemainingDay($remainingDay)
            ->setTechnicalContactId($technicalContactId)
            ->setAdditionalAttributes($additionalAttributes)
            ->setAuth($auth)
            ->setChildNameServerInfo($childNameServerInfo)
            ->setDomainName($domainName)
            ->setExpirationDate($expirationDate)
            ->setNameServerList($nameServerList)
            ->setRGPStatues($rGPStatues)
            ->setRenewalMode($renewalMode)
            ->setStartDate($startDate)
            ->setStatusCode($statusCode)
            ->setTransferDate($transferDate)
            ->setUpdatedDate($updatedDate);
    }
    /**
     * Get AdministrativeContactId value
     * @return int|null
     */
    public function getAdministrativeContactId(): ?int
    {
        return $this->AdministrativeContactId;
    }
    /**
     * Set AdministrativeContactId value
     * @param int $administrativeContactId
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setAdministrativeContactId(?int $administrativeContactId = null): self
    {
        // validation for constraint: int
        if (!is_null($administrativeContactId) && !(is_int($administrativeContactId) || ctype_digit($administrativeContactId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($administrativeContactId, true), gettype($administrativeContactId)), __LINE__);
        }
        $this->AdministrativeContactId = $administrativeContactId;
        
        return $this;
    }
    /**
     * Get BillingContactId value
     * @return int|null
     */
    public function getBillingContactId(): ?int
    {
        return $this->BillingContactId;
    }
    /**
     * Set BillingContactId value
     * @param int $billingContactId
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setBillingContactId(?int $billingContactId = null): self
    {
        // validation for constraint: int
        if (!is_null($billingContactId) && !(is_int($billingContactId) || ctype_digit($billingContactId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingContactId, true), gettype($billingContactId)), __LINE__);
        }
        $this->BillingContactId = $billingContactId;
        
        return $this;
    }
    /**
     * Get IsChildNameServer value
     * @return bool|null
     */
    public function getIsChildNameServer(): ?bool
    {
        return $this->IsChildNameServer;
    }
    /**
     * Set IsChildNameServer value
     * @param bool $isChildNameServer
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setIsChildNameServer(?bool $isChildNameServer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isChildNameServer) && !is_bool($isChildNameServer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isChildNameServer, true), gettype($isChildNameServer)), __LINE__);
        }
        $this->IsChildNameServer = $isChildNameServer;
        
        return $this;
    }
    /**
     * Get LockStatus value
     * @return bool|null
     */
    public function getLockStatus(): ?bool
    {
        return $this->LockStatus;
    }
    /**
     * Set LockStatus value
     * @param bool $lockStatus
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setLockStatus(?bool $lockStatus = null): self
    {
        // validation for constraint: boolean
        if (!is_null($lockStatus) && !is_bool($lockStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lockStatus, true), gettype($lockStatus)), __LINE__);
        }
        $this->LockStatus = $lockStatus;
        
        return $this;
    }
    /**
     * Get PrivacyProtectionStatus value
     * @return bool|null
     */
    public function getPrivacyProtectionStatus(): ?bool
    {
        return $this->PrivacyProtectionStatus;
    }
    /**
     * Set PrivacyProtectionStatus value
     * @param bool $privacyProtectionStatus
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setPrivacyProtectionStatus(?bool $privacyProtectionStatus = null): self
    {
        // validation for constraint: boolean
        if (!is_null($privacyProtectionStatus) && !is_bool($privacyProtectionStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($privacyProtectionStatus, true), gettype($privacyProtectionStatus)), __LINE__);
        }
        $this->PrivacyProtectionStatus = $privacyProtectionStatus;
        
        return $this;
    }
    /**
     * Get RegistrantContactId value
     * @return int|null
     */
    public function getRegistrantContactId(): ?int
    {
        return $this->RegistrantContactId;
    }
    /**
     * Set RegistrantContactId value
     * @param int $registrantContactId
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setRegistrantContactId(?int $registrantContactId = null): self
    {
        // validation for constraint: int
        if (!is_null($registrantContactId) && !(is_int($registrantContactId) || ctype_digit($registrantContactId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($registrantContactId, true), gettype($registrantContactId)), __LINE__);
        }
        $this->RegistrantContactId = $registrantContactId;
        
        return $this;
    }
    /**
     * Get RemainingDay value
     * @return int|null
     */
    public function getRemainingDay(): ?int
    {
        return $this->RemainingDay;
    }
    /**
     * Set RemainingDay value
     * @param int $remainingDay
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setRemainingDay(?int $remainingDay = null): self
    {
        // validation for constraint: int
        if (!is_null($remainingDay) && !(is_int($remainingDay) || ctype_digit($remainingDay))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($remainingDay, true), gettype($remainingDay)), __LINE__);
        }
        $this->RemainingDay = $remainingDay;
        
        return $this;
    }
    /**
     * Get TechnicalContactId value
     * @return int|null
     */
    public function getTechnicalContactId(): ?int
    {
        return $this->TechnicalContactId;
    }
    /**
     * Set TechnicalContactId value
     * @param int $technicalContactId
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setTechnicalContactId(?int $technicalContactId = null): self
    {
        // validation for constraint: int
        if (!is_null($technicalContactId) && !(is_int($technicalContactId) || ctype_digit($technicalContactId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($technicalContactId, true), gettype($technicalContactId)), __LINE__);
        }
        $this->TechnicalContactId = $technicalContactId;
        
        return $this;
    }
    /**
     * Get AdditionalAttributes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring|null
     */
    public function getAdditionalAttributes(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring
    {
        return $this->AdditionalAttributes ?? null;
    }
    /**
     * Set AdditionalAttributes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setAdditionalAttributes(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes = null): self
    {
        if (is_null($additionalAttributes) || (is_array($additionalAttributes) && empty($additionalAttributes))) {
            unset($this->AdditionalAttributes);
        } else {
            $this->AdditionalAttributes = $additionalAttributes;
        }
        
        return $this;
    }
    /**
     * Get Auth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAuth(): ?string
    {
        return $this->Auth ?? null;
    }
    /**
     * Set Auth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $auth
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setAuth(?string $auth = null): self
    {
        // validation for constraint: string
        if (!is_null($auth) && !is_string($auth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($auth, true), gettype($auth)), __LINE__);
        }
        if (is_null($auth) || (is_array($auth) && empty($auth))) {
            unset($this->Auth);
        } else {
            $this->Auth = $auth;
        }
        
        return $this;
    }
    /**
     * Get ChildNameServerInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo|null
     */
    public function getChildNameServerInfo(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo
    {
        return $this->ChildNameServerInfo ?? null;
    }
    /**
     * Set ChildNameServerInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo $childNameServerInfo
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setChildNameServerInfo(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo $childNameServerInfo = null): self
    {
        if (is_null($childNameServerInfo) || (is_array($childNameServerInfo) && empty($childNameServerInfo))) {
            unset($this->ChildNameServerInfo);
        } else {
            $this->ChildNameServerInfo = $childNameServerInfo;
        }
        
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->ExpirationDate ?? null;
    }
    /**
     * Set ExpirationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $expirationDate
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setExpirationDate(?string $expirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        if (is_null($expirationDate) || (is_array($expirationDate) && empty($expirationDate))) {
            unset($this->ExpirationDate);
        } else {
            $this->ExpirationDate = $expirationDate;
        }
        
        return $this;
    }
    /**
     * Get NameServerList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    public function getNameServerList(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring
    {
        return $this->NameServerList ?? null;
    }
    /**
     * Set NameServerList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $nameServerList
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setNameServerList(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $nameServerList = null): self
    {
        if (is_null($nameServerList) || (is_array($nameServerList) && empty($nameServerList))) {
            unset($this->NameServerList);
        } else {
            $this->NameServerList = $nameServerList;
        }
        
        return $this;
    }
    /**
     * Get RGPStatues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfRGPStatus|null
     */
    public function getRGPStatues(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfRGPStatus
    {
        return $this->RGPStatues ?? null;
    }
    /**
     * Set RGPStatues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfRGPStatus $rGPStatues
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setRGPStatues(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfRGPStatus $rGPStatues = null): self
    {
        if (is_null($rGPStatues) || (is_array($rGPStatues) && empty($rGPStatues))) {
            unset($this->RGPStatues);
        } else {
            $this->RGPStatues = $rGPStatues;
        }
        
        return $this;
    }
    /**
     * Get RenewalMode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRenewalMode(): ?string
    {
        return $this->RenewalMode ?? null;
    }
    /**
     * Set RenewalMode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $renewalMode
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setRenewalMode(?string $renewalMode = null): self
    {
        // validation for constraint: string
        if (!is_null($renewalMode) && !is_string($renewalMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($renewalMode, true), gettype($renewalMode)), __LINE__);
        }
        if (is_null($renewalMode) || (is_array($renewalMode) && empty($renewalMode))) {
            unset($this->RenewalMode);
        } else {
            $this->RenewalMode = $renewalMode;
        }
        
        return $this;
    }
    /**
     * Get StartDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate ?? null;
    }
    /**
     * Set StartDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDate
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        if (is_null($startDate) || (is_array($startDate) && empty($startDate))) {
            unset($this->StartDate);
        } else {
            $this->StartDate = $startDate;
        }
        
        return $this;
    }
    /**
     * Get StatusCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatusCode(): ?string
    {
        return $this->StatusCode ?? null;
    }
    /**
     * Set StatusCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $statusCode
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setStatusCode(?string $statusCode = null): self
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusCode, true), gettype($statusCode)), __LINE__);
        }
        if (is_null($statusCode) || (is_array($statusCode) && empty($statusCode))) {
            unset($this->StatusCode);
        } else {
            $this->StatusCode = $statusCode;
        }
        
        return $this;
    }
    /**
     * Get TransferDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTransferDate(): ?string
    {
        return $this->TransferDate ?? null;
    }
    /**
     * Set TransferDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $transferDate
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setTransferDate(?string $transferDate = null): self
    {
        // validation for constraint: string
        if (!is_null($transferDate) && !is_string($transferDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferDate, true), gettype($transferDate)), __LINE__);
        }
        if (is_null($transferDate) || (is_array($transferDate) && empty($transferDate))) {
            unset($this->TransferDate);
        } else {
            $this->TransferDate = $transferDate;
        }
        
        return $this;
    }
    /**
     * Get UpdatedDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUpdatedDate(): ?string
    {
        return $this->UpdatedDate ?? null;
    }
    /**
     * Set UpdatedDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $updatedDate
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
     */
    public function setUpdatedDate(?string $updatedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($updatedDate) && !is_string($updatedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updatedDate, true), gettype($updatedDate)), __LINE__);
        }
        if (is_null($updatedDate) || (is_array($updatedDate) && empty($updatedDate))) {
            unset($this->UpdatedDate);
        } else {
            $this->UpdatedDate = $updatedDate;
        }
        
        return $this;
    }
}
