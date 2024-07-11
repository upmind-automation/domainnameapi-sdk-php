<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RenewRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RenewRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RenewRequest extends BaseMethodRequest
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * The Period
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Period = null;
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
     * Constructor method for RenewRequest
     * @uses RenewRequest::setId()
     * @uses RenewRequest::setPeriod()
     * @uses RenewRequest::setAdditionalAttributes()
     * @uses RenewRequest::setDomainName()
     * @param int $id
     * @param int $period
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes
     * @param string $domainName
     */
    public function __construct(?int $id = null, ?int $period = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes = null, ?string $domainName = null)
    {
        $this
            ->setId($id)
            ->setPeriod($period)
            ->setAdditionalAttributes($additionalAttributes)
            ->setDomainName($domainName);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RenewRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RenewRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RenewRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RenewRequest
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
}
