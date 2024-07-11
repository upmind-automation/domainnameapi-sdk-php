<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContactsResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetContactsResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetContactsResponse extends BaseMethodResponse
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
     * The GetContactsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\GetContactsResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\GetContactsResponse $GetContactsResult = null;
    /**
     * Constructor method for GetContactsResponse
     * @uses GetContactsResponse::setAdministrativeContact()
     * @uses GetContactsResponse::setBillingContact()
     * @uses GetContactsResponse::setRegistrantContact()
     * @uses GetContactsResponse::setTechnicalContact()
     * @uses GetContactsResponse::setGetContactsResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $administrativeContact
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $billingContact
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $registrantContact
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $technicalContact
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetContactsResponse $getContactsResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $administrativeContact = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $billingContact = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $registrantContact = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $technicalContact = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\GetContactsResponse $getContactsResult = null)
    {
        $this
            ->setAdministrativeContact($administrativeContact)
            ->setBillingContact($billingContact)
            ->setRegistrantContact($registrantContact)
            ->setTechnicalContact($technicalContact)
            ->setGetContactsResult($getContactsResult);
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
        return $this->AdministrativeContact ?? null;
    }
    /**
     * Set AdministrativeContact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $administrativeContact
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetContactsResponse
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
        return $this->BillingContact ?? null;
    }
    /**
     * Set BillingContact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $billingContact
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetContactsResponse
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
     * Get RegistrantContact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo|null
     */
    public function getRegistrantContact(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
    {
        return $this->RegistrantContact ?? null;
    }
    /**
     * Set RegistrantContact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $registrantContact
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetContactsResponse
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
        return $this->TechnicalContact ?? null;
    }
    /**
     * Set TechnicalContact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $technicalContact
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetContactsResponse
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
    /**
     * Get GetContactsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetContactsResponse|null
     */
    public function getGetContactsResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\GetContactsResponse
    {
        return $this->GetContactsResult ?? null;
    }
    /**
     * Set GetContactsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetContactsResponse $getContactsResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetContactsResponse
     */
    public function setGetContactsResult(?\Upmind\DomainNameApiSdk\SDK\StructType\GetContactsResponse $getContactsResult = null): self
    {
        if (is_null($getContactsResult) || (is_array($getContactsResult) && empty($getContactsResult))) {
            unset($this->GetContactsResult);
        } else {
            $this->GetContactsResult = $getContactsResult;
        }
        
        return $this;
    }
}
