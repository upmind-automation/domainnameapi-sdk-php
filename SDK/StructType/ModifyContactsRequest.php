<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyContactsRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyContactsRequest
 * @subpackage Structs
 */
class ModifyContactsRequest extends BaseMethodRequest
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
     * Constructor method for ModifyContactsRequest
     * @uses ModifyContactsRequest::setAdministrativeContactId()
     * @uses ModifyContactsRequest::setBillingContactId()
     * @uses ModifyContactsRequest::setDomainName()
     * @uses ModifyContactsRequest::setId()
     * @uses ModifyContactsRequest::setRegistrantContactId()
     * @uses ModifyContactsRequest::setTechnicalContactId()
     * @param int $administrativeContactId
     * @param int $billingContactId
     * @param string $domainName
     * @param int $id
     * @param int $registrantContactId
     * @param int $technicalContactId
     */
    public function __construct(?int $administrativeContactId = null, ?int $billingContactId = null, ?string $domainName = null, ?int $id = null, ?int $registrantContactId = null, ?int $technicalContactId = null)
    {
        $this
            ->setAdministrativeContactId($administrativeContactId)
            ->setBillingContactId($billingContactId)
            ->setDomainName($domainName)
            ->setId($id)
            ->setRegistrantContactId($registrantContactId)
            ->setTechnicalContactId($technicalContactId);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsRequest
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
}
