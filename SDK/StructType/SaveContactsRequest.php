<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveContactsRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SaveContactsRequest
 * @subpackage Structs
 */
class SaveContactsRequest extends BaseMethodRequest
{
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
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
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
     * Constructor method for SaveContactsRequest
     * @uses SaveContactsRequest::setAdministrativeContact()
     * @uses SaveContactsRequest::setBillingContact()
     * @uses SaveContactsRequest::setDomainName()
     * @uses SaveContactsRequest::setId()
     * @uses SaveContactsRequest::setRegistrantContact()
     * @uses SaveContactsRequest::setTechnicalContact()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $administrativeContact
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $billingContact
     * @param string $domainName
     * @param int $id
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $registrantContact
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $technicalContact
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $administrativeContact = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $billingContact = null, ?string $domainName = null, ?int $id = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $registrantContact = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $technicalContact = null)
    {
        $this
            ->setAdministrativeContact($administrativeContact)
            ->setBillingContact($billingContact)
            ->setDomainName($domainName)
            ->setId($id)
            ->setRegistrantContact($registrantContact)
            ->setTechnicalContact($technicalContact);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsRequest
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
     * Get Id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsRequest
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsRequest
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
