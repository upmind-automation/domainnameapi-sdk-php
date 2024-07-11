<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveContactsResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SaveContactsResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveContactsResponse extends BaseMethodResponse
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
     * The SaveContactsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsResponse $SaveContactsResult = null;
    /**
     * Constructor method for SaveContactsResponse
     * @uses SaveContactsResponse::setAdministrativeContactId()
     * @uses SaveContactsResponse::setBillingContactId()
     * @uses SaveContactsResponse::setRegistrantContactId()
     * @uses SaveContactsResponse::setTechnicalContactId()
     * @uses SaveContactsResponse::setSaveContactsResult()
     * @param int $administrativeContactId
     * @param int $billingContactId
     * @param int $registrantContactId
     * @param int $technicalContactId
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsResponse $saveContactsResult
     */
    public function __construct(?int $administrativeContactId = null, ?int $billingContactId = null, ?int $registrantContactId = null, ?int $technicalContactId = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsResponse $saveContactsResult = null)
    {
        $this
            ->setAdministrativeContactId($administrativeContactId)
            ->setBillingContactId($billingContactId)
            ->setRegistrantContactId($registrantContactId)
            ->setTechnicalContactId($technicalContactId)
            ->setSaveContactsResult($saveContactsResult);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsResponse
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsResponse
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsResponse
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsResponse
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
     * Get SaveContactsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsResponse|null
     */
    public function getSaveContactsResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsResponse
    {
        return $this->SaveContactsResult ?? null;
    }
    /**
     * Set SaveContactsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsResponse $saveContactsResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsResponse
     */
    public function setSaveContactsResult(?\Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsResponse $saveContactsResult = null): self
    {
        if (is_null($saveContactsResult) || (is_array($saveContactsResult) && empty($saveContactsResult))) {
            unset($this->SaveContactsResult);
        } else {
            $this->SaveContactsResult = $saveContactsResult;
        }
        
        return $this;
    }
}
