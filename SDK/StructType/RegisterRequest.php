<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegisterRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RegisterRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RegisterRequest extends BaseMethodRequest
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
     * The LockStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LockStatus = null;
    /**
     * The Period
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Period = null;
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
     * The DomainName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DomainName = null;
    /**
     * The IdnLanguage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $IdnLanguage = null;
    /**
     * The NameServerList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $NameServerList = null;
    /**
     * Constructor method for RegisterRequest
     * @uses RegisterRequest::setAdministrativeContactId()
     * @uses RegisterRequest::setBillingContactId()
     * @uses RegisterRequest::setLockStatus()
     * @uses RegisterRequest::setPeriod()
     * @uses RegisterRequest::setPrivacyProtectionStatus()
     * @uses RegisterRequest::setRegistrantContactId()
     * @uses RegisterRequest::setTechnicalContactId()
     * @uses RegisterRequest::setAdditionalAttributes()
     * @uses RegisterRequest::setDomainName()
     * @uses RegisterRequest::setIdnLanguage()
     * @uses RegisterRequest::setNameServerList()
     * @param int $administrativeContactId
     * @param int $billingContactId
     * @param bool $lockStatus
     * @param int $period
     * @param bool $privacyProtectionStatus
     * @param int $registrantContactId
     * @param int $technicalContactId
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes
     * @param string $domainName
     * @param string $idnLanguage
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $nameServerList
     */
    public function __construct(?int $administrativeContactId = null, ?int $billingContactId = null, ?bool $lockStatus = null, ?int $period = null, ?bool $privacyProtectionStatus = null, ?int $registrantContactId = null, ?int $technicalContactId = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes = null, ?string $domainName = null, ?string $idnLanguage = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $nameServerList = null)
    {
        $this
            ->setAdministrativeContactId($administrativeContactId)
            ->setBillingContactId($billingContactId)
            ->setLockStatus($lockStatus)
            ->setPeriod($period)
            ->setPrivacyProtectionStatus($privacyProtectionStatus)
            ->setRegistrantContactId($registrantContactId)
            ->setTechnicalContactId($technicalContactId)
            ->setAdditionalAttributes($additionalAttributes)
            ->setDomainName($domainName)
            ->setIdnLanguage($idnLanguage)
            ->setNameServerList($nameServerList);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterRequest
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
     * Get Period value
     * @return int|null
     */
    public function getPeriod(): ?int
    {
        return $this->Period;
    }
    /**
     * Set Period value
     * @param int $period
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterRequest
     */
    public function setPeriod(?int $period = null): self
    {
        // validation for constraint: int
        if (!is_null($period) && !(is_int($period) || ctype_digit($period))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($period, true), gettype($period)), __LINE__);
        }
        $this->Period = $period;
        
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterRequest
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
     * Get IdnLanguage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIdnLanguage(): ?string
    {
        return $this->IdnLanguage ?? null;
    }
    /**
     * Set IdnLanguage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $idnLanguage
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterRequest
     */
    public function setIdnLanguage(?string $idnLanguage = null): self
    {
        // validation for constraint: string
        if (!is_null($idnLanguage) && !is_string($idnLanguage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idnLanguage, true), gettype($idnLanguage)), __LINE__);
        }
        if (is_null($idnLanguage) || (is_array($idnLanguage) && empty($idnLanguage))) {
            unset($this->IdnLanguage);
        } else {
            $this->IdnLanguage = $idnLanguage;
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterRequest
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
}
