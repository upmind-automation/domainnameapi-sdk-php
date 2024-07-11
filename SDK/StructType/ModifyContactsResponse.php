<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyContactsResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyContactsResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ModifyContactsResponse extends BaseMethodResponse
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
     * The ModifyContactsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse $ModifyContactsResult = null;
    /**
     * Constructor method for ModifyContactsResponse
     * @uses ModifyContactsResponse::setAdministrativeContactId()
     * @uses ModifyContactsResponse::setBillingContactId()
     * @uses ModifyContactsResponse::setRegistrantContactId()
     * @uses ModifyContactsResponse::setTechnicalContactId()
     * @uses ModifyContactsResponse::setModifyContactsResult()
     * @param int $administrativeContactId
     * @param int $billingContactId
     * @param int $registrantContactId
     * @param int $technicalContactId
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse $modifyContactsResult
     */
    public function __construct(?int $administrativeContactId = null, ?int $billingContactId = null, ?int $registrantContactId = null, ?int $technicalContactId = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse $modifyContactsResult = null)
    {
        $this
            ->setAdministrativeContactId($administrativeContactId)
            ->setBillingContactId($billingContactId)
            ->setRegistrantContactId($registrantContactId)
            ->setTechnicalContactId($technicalContactId)
            ->setModifyContactsResult($modifyContactsResult);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse
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
     * Get ModifyContactsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse|null
     */
    public function getModifyContactsResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse
    {
        return $this->ModifyContactsResult ?? null;
    }
    /**
     * Set ModifyContactsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse $modifyContactsResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse
     */
    public function setModifyContactsResult(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse $modifyContactsResult = null): self
    {
        if (is_null($modifyContactsResult) || (is_array($modifyContactsResult) && empty($modifyContactsResult))) {
            unset($this->ModifyContactsResult);
        } else {
            $this->ModifyContactsResult = $modifyContactsResult;
        }
        
        return $this;
    }
}
