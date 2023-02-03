<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegisterWithContactInfoRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RegisterWithContactInfoRequest
 * @subpackage Structs
 */
class RegisterWithContactInfoRequest extends BaseMethodRequest
{
    /**
     * The AdditionalAttributes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $AdditionalAttributes = null;
    /**
     * The AdministrativeContact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $AdministrativeContact = null;
    /**
     * The BillingContact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $BillingContact = null;
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
     * The LockStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LockStatus = null;
    /**
     * The NameServerList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $NameServerList = null;
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
     * The RegistrantContact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $RegistrantContact = null;
    /**
     * The TechnicalContact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $TechnicalContact = null;
    /**
     * Constructor method for RegisterWithContactInfoRequest
     * @uses RegisterWithContactInfoRequest::setAdditionalAttributes()
     * @uses RegisterWithContactInfoRequest::setAdministrativeContact()
     * @uses RegisterWithContactInfoRequest::setBillingContact()
     * @uses RegisterWithContactInfoRequest::setDomainName()
     * @uses RegisterWithContactInfoRequest::setIdnLanguage()
     * @uses RegisterWithContactInfoRequest::setLockStatus()
     * @uses RegisterWithContactInfoRequest::setNameServerList()
     * @uses RegisterWithContactInfoRequest::setPeriod()
     * @uses RegisterWithContactInfoRequest::setPrivacyProtectionStatus()
     * @uses RegisterWithContactInfoRequest::setRegistrantContact()
     * @uses RegisterWithContactInfoRequest::setTechnicalContact()
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $administrativeContact
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $billingContact
     * @param string $domainName
     * @param string $idnLanguage
     * @param bool $lockStatus
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $nameServerList
     * @param int $period
     * @param bool $privacyProtectionStatus
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $registrantContact
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $technicalContact
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $administrativeContact = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $billingContact = null, ?string $domainName = null, ?string $idnLanguage = null, ?bool $lockStatus = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $nameServerList = null, ?int $period = null, ?bool $privacyProtectionStatus = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $registrantContact = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $technicalContact = null)
    {
        $this
            ->setAdditionalAttributes($additionalAttributes)
            ->setAdministrativeContact($administrativeContact)
            ->setBillingContact($billingContact)
            ->setDomainName($domainName)
            ->setIdnLanguage($idnLanguage)
            ->setLockStatus($lockStatus)
            ->setNameServerList($nameServerList)
            ->setPeriod($period)
            ->setPrivacyProtectionStatus($privacyProtectionStatus)
            ->setRegistrantContact($registrantContact)
            ->setTechnicalContact($technicalContact);
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
        return isset($this->AdditionalAttributes) ? $this->AdditionalAttributes : null;
    }
    /**
     * Set AdditionalAttributes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterWithContactInfoRequest
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
     * Get AdministrativeContact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo|null
     */
    public function getAdministrativeContact(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
    {
        return isset($this->AdministrativeContact) ? $this->AdministrativeContact : null;
    }
    /**
     * Set AdministrativeContact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $administrativeContact
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterWithContactInfoRequest
     */
    public function setAdministrativeContact(?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $administrativeContact = null): self
    {
        if (is_null($administrativeContact) || (is_array($administrativeContact) && empty($administrativeContact))) {
            unset($this->AdministrativeContact);
        } else {
            $this->AdministrativeContact = $administrativeContact;
        }
        
        return $this;
    }
    /**
     * Get BillingContact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo|null
     */
    public function getBillingContact(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
    {
        return isset($this->BillingContact) ? $this->BillingContact : null;
    }
    /**
     * Set BillingContact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $billingContact
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterWithContactInfoRequest
     */
    public function setBillingContact(?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $billingContact = null): self
    {
        if (is_null($billingContact) || (is_array($billingContact) && empty($billingContact))) {
            unset($this->BillingContact);
        } else {
            $this->BillingContact = $billingContact;
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
        return isset($this->DomainName) ? $this->DomainName : null;
    }
    /**
     * Set DomainName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $domainName
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterWithContactInfoRequest
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
        return isset($this->IdnLanguage) ? $this->IdnLanguage : null;
    }
    /**
     * Set IdnLanguage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $idnLanguage
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterWithContactInfoRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterWithContactInfoRequest
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
     * Get NameServerList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    public function getNameServerList(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring
    {
        return isset($this->NameServerList) ? $this->NameServerList : null;
    }
    /**
     * Set NameServerList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $nameServerList
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterWithContactInfoRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterWithContactInfoRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterWithContactInfoRequest
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
     * Get RegistrantContact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo|null
     */
    public function getRegistrantContact(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
    {
        return isset($this->RegistrantContact) ? $this->RegistrantContact : null;
    }
    /**
     * Set RegistrantContact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $registrantContact
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterWithContactInfoRequest
     */
    public function setRegistrantContact(?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $registrantContact = null): self
    {
        if (is_null($registrantContact) || (is_array($registrantContact) && empty($registrantContact))) {
            unset($this->RegistrantContact);
        } else {
            $this->RegistrantContact = $registrantContact;
        }
        
        return $this;
    }
    /**
     * Get TechnicalContact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo|null
     */
    public function getTechnicalContact(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
    {
        return isset($this->TechnicalContact) ? $this->TechnicalContact : null;
    }
    /**
     * Set TechnicalContact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $technicalContact
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterWithContactInfoRequest
     */
    public function setTechnicalContact(?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $technicalContact = null): self
    {
        if (is_null($technicalContact) || (is_array($technicalContact) && empty($technicalContact))) {
            unset($this->TechnicalContact);
        } else {
            $this->TechnicalContact = $technicalContact;
        }
        
        return $this;
    }
}
