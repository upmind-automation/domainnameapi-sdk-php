<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ContactInfo
 * @subpackage Structs
 */
class ContactInfo extends BaseData
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
     * The AddressLine1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AddressLine1 = null;
    /**
     * The AddressLine2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AddressLine2 = null;
    /**
     * The AddressLine3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AddressLine3 = null;
    /**
     * The Auth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Auth = null;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $City = null;
    /**
     * The Company
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Company = null;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Country = null;
    /**
     * The EMail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EMail = null;
    /**
     * The Fax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Fax = null;
    /**
     * The FaxCountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FaxCountryCode = null;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FirstName = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $LastName = null;
    /**
     * The Phone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Phone = null;
    /**
     * The PhoneCountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PhoneCountryCode = null;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $State = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The ZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ZipCode = null;
    /**
     * Constructor method for ContactInfo
     * @uses ContactInfo::setAdditionalAttributes()
     * @uses ContactInfo::setAddressLine1()
     * @uses ContactInfo::setAddressLine2()
     * @uses ContactInfo::setAddressLine3()
     * @uses ContactInfo::setAuth()
     * @uses ContactInfo::setCity()
     * @uses ContactInfo::setCompany()
     * @uses ContactInfo::setCountry()
     * @uses ContactInfo::setEMail()
     * @uses ContactInfo::setFax()
     * @uses ContactInfo::setFaxCountryCode()
     * @uses ContactInfo::setFirstName()
     * @uses ContactInfo::setLastName()
     * @uses ContactInfo::setPhone()
     * @uses ContactInfo::setPhoneCountryCode()
     * @uses ContactInfo::setState()
     * @uses ContactInfo::setType()
     * @uses ContactInfo::setZipCode()
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes
     * @param string $addressLine1
     * @param string $addressLine2
     * @param string $addressLine3
     * @param string $auth
     * @param string $city
     * @param string $company
     * @param string $country
     * @param string $eMail
     * @param string $fax
     * @param string $faxCountryCode
     * @param string $firstName
     * @param string $lastName
     * @param string $phone
     * @param string $phoneCountryCode
     * @param string $state
     * @param string $type
     * @param string $zipCode
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes = null, ?string $addressLine1 = null, ?string $addressLine2 = null, ?string $addressLine3 = null, ?string $auth = null, ?string $city = null, ?string $company = null, ?string $country = null, ?string $eMail = null, ?string $fax = null, ?string $faxCountryCode = null, ?string $firstName = null, ?string $lastName = null, ?string $phone = null, ?string $phoneCountryCode = null, ?string $state = null, ?string $type = null, ?string $zipCode = null)
    {
        $this
            ->setAdditionalAttributes($additionalAttributes)
            ->setAddressLine1($addressLine1)
            ->setAddressLine2($addressLine2)
            ->setAddressLine3($addressLine3)
            ->setAuth($auth)
            ->setCity($city)
            ->setCompany($company)
            ->setCountry($country)
            ->setEMail($eMail)
            ->setFax($fax)
            ->setFaxCountryCode($faxCountryCode)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setPhone($phone)
            ->setPhoneCountryCode($phoneCountryCode)
            ->setState($state)
            ->setType($type)
            ->setZipCode($zipCode);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
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
     * Get AddressLine1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddressLine1(): ?string
    {
        return isset($this->AddressLine1) ? $this->AddressLine1 : null;
    }
    /**
     * Set AddressLine1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addressLine1
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
     */
    public function setAddressLine1(?string $addressLine1 = null): self
    {
        // validation for constraint: string
        if (!is_null($addressLine1) && !is_string($addressLine1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressLine1, true), gettype($addressLine1)), __LINE__);
        }
        if (is_null($addressLine1) || (is_array($addressLine1) && empty($addressLine1))) {
            unset($this->AddressLine1);
        } else {
            $this->AddressLine1 = $addressLine1;
        }
        
        return $this;
    }
    /**
     * Get AddressLine2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddressLine2(): ?string
    {
        return isset($this->AddressLine2) ? $this->AddressLine2 : null;
    }
    /**
     * Set AddressLine2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addressLine2
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
     */
    public function setAddressLine2(?string $addressLine2 = null): self
    {
        // validation for constraint: string
        if (!is_null($addressLine2) && !is_string($addressLine2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressLine2, true), gettype($addressLine2)), __LINE__);
        }
        if (is_null($addressLine2) || (is_array($addressLine2) && empty($addressLine2))) {
            unset($this->AddressLine2);
        } else {
            $this->AddressLine2 = $addressLine2;
        }
        
        return $this;
    }
    /**
     * Get AddressLine3 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddressLine3(): ?string
    {
        return isset($this->AddressLine3) ? $this->AddressLine3 : null;
    }
    /**
     * Set AddressLine3 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addressLine3
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
     */
    public function setAddressLine3(?string $addressLine3 = null): self
    {
        // validation for constraint: string
        if (!is_null($addressLine3) && !is_string($addressLine3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressLine3, true), gettype($addressLine3)), __LINE__);
        }
        if (is_null($addressLine3) || (is_array($addressLine3) && empty($addressLine3))) {
            unset($this->AddressLine3);
        } else {
            $this->AddressLine3 = $addressLine3;
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
        return isset($this->Auth) ? $this->Auth : null;
    }
    /**
     * Set Auth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $auth
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
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
     * Get City value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCity(): ?string
    {
        return isset($this->City) ? $this->City : null;
    }
    /**
     * Set City value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->City);
        } else {
            $this->City = $city;
        }
        
        return $this;
    }
    /**
     * Get Company value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return isset($this->Company) ? $this->Company : null;
    }
    /**
     * Set Company value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $company
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
     */
    public function setCompany(?string $company = null): self
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), gettype($company)), __LINE__);
        }
        if (is_null($company) || (is_array($company) && empty($company))) {
            unset($this->Company);
        } else {
            $this->Company = $company;
        }
        
        return $this;
    }
    /**
     * Get Country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return isset($this->Country) ? $this->Country : null;
    }
    /**
     * Set Country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->Country);
        } else {
            $this->Country = $country;
        }
        
        return $this;
    }
    /**
     * Get EMail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEMail(): ?string
    {
        return isset($this->EMail) ? $this->EMail : null;
    }
    /**
     * Set EMail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $eMail
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
     */
    public function setEMail(?string $eMail = null): self
    {
        // validation for constraint: string
        if (!is_null($eMail) && !is_string($eMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eMail, true), gettype($eMail)), __LINE__);
        }
        if (is_null($eMail) || (is_array($eMail) && empty($eMail))) {
            unset($this->EMail);
        } else {
            $this->EMail = $eMail;
        }
        
        return $this;
    }
    /**
     * Get Fax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFax(): ?string
    {
        return isset($this->Fax) ? $this->Fax : null;
    }
    /**
     * Set Fax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fax
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
     */
    public function setFax(?string $fax = null): self
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        if (is_null($fax) || (is_array($fax) && empty($fax))) {
            unset($this->Fax);
        } else {
            $this->Fax = $fax;
        }
        
        return $this;
    }
    /**
     * Get FaxCountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFaxCountryCode(): ?string
    {
        return isset($this->FaxCountryCode) ? $this->FaxCountryCode : null;
    }
    /**
     * Set FaxCountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $faxCountryCode
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
     */
    public function setFaxCountryCode(?string $faxCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($faxCountryCode) && !is_string($faxCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($faxCountryCode, true), gettype($faxCountryCode)), __LINE__);
        }
        if (is_null($faxCountryCode) || (is_array($faxCountryCode) && empty($faxCountryCode))) {
            unset($this->FaxCountryCode);
        } else {
            $this->FaxCountryCode = $faxCountryCode;
        }
        
        return $this;
    }
    /**
     * Get FirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return isset($this->FirstName) ? $this->FirstName : null;
    }
    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstName
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->FirstName);
        } else {
            $this->FirstName = $firstName;
        }
        
        return $this;
    }
    /**
     * Get LastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return isset($this->LastName) ? $this->LastName : null;
    }
    /**
     * Set LastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastName
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        if (is_null($lastName) || (is_array($lastName) && empty($lastName))) {
            unset($this->LastName);
        } else {
            $this->LastName = $lastName;
        }
        
        return $this;
    }
    /**
     * Get Phone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return isset($this->Phone) ? $this->Phone : null;
    }
    /**
     * Set Phone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phone
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        if (is_null($phone) || (is_array($phone) && empty($phone))) {
            unset($this->Phone);
        } else {
            $this->Phone = $phone;
        }
        
        return $this;
    }
    /**
     * Get PhoneCountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoneCountryCode(): ?string
    {
        return isset($this->PhoneCountryCode) ? $this->PhoneCountryCode : null;
    }
    /**
     * Set PhoneCountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phoneCountryCode
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
     */
    public function setPhoneCountryCode(?string $phoneCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneCountryCode) && !is_string($phoneCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneCountryCode, true), gettype($phoneCountryCode)), __LINE__);
        }
        if (is_null($phoneCountryCode) || (is_array($phoneCountryCode) && empty($phoneCountryCode))) {
            unset($this->PhoneCountryCode);
        } else {
            $this->PhoneCountryCode = $phoneCountryCode;
        }
        
        return $this;
    }
    /**
     * Get State value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getState(): ?string
    {
        return isset($this->State) ? $this->State : null;
    }
    /**
     * Set State value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $state
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        if (is_null($state) || (is_array($state) && empty($state))) {
            unset($this->State);
        } else {
            $this->State = $state;
        }
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\ContactType::valueIsValid()
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\ContactType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Upmind\DomainNameApiSdk\SDK\EnumType\ContactType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Upmind\DomainNameApiSdk\SDK\EnumType\ContactType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Upmind\DomainNameApiSdk\SDK\EnumType\ContactType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get ZipCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return isset($this->ZipCode) ? $this->ZipCode : null;
    }
    /**
     * Set ZipCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $zipCode
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        if (is_null($zipCode) || (is_array($zipCode) && empty($zipCode))) {
            unset($this->ZipCode);
        } else {
            $this->ZipCode = $zipCode;
        }
        
        return $this;
    }
}
