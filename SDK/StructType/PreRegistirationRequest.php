<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreRegistirationRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PreRegistirationRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PreRegistirationRequest extends BaseMethodRequest
{
    /**
     * The Period
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Period = null;
    /**
     * The Contact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $Contact = null;
    /**
     * The DomainName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DomainName = null;
    /**
     * The NameServer1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $NameServer1 = null;
    /**
     * The NameServer2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $NameServer2 = null;
    /**
     * Constructor method for PreRegistirationRequest
     * @uses PreRegistirationRequest::setPeriod()
     * @uses PreRegistirationRequest::setContact()
     * @uses PreRegistirationRequest::setDomainName()
     * @uses PreRegistirationRequest::setNameServer1()
     * @uses PreRegistirationRequest::setNameServer2()
     * @param int $period
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $contact
     * @param string $domainName
     * @param string $nameServer1
     * @param string $nameServer2
     */
    public function __construct(?int $period = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $contact = null, ?string $domainName = null, ?string $nameServer1 = null, ?string $nameServer2 = null)
    {
        $this
            ->setPeriod($period)
            ->setContact($contact)
            ->setDomainName($domainName)
            ->setNameServer1($nameServer1)
            ->setNameServer2($nameServer2);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PreRegistirationRequest
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
     * Get Contact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo|null
     */
    public function getContact(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo
    {
        return $this->Contact ?? null;
    }
    /**
     * Set Contact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $contact
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PreRegistirationRequest
     */
    public function setContact(?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $contact = null): self
    {
        if (is_null($contact) || (is_array($contact) && empty($contact))) {
            unset($this->Contact);
        } else {
            $this->Contact = $contact;
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PreRegistirationRequest
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
     * Get NameServer1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNameServer1(): ?string
    {
        return $this->NameServer1 ?? null;
    }
    /**
     * Set NameServer1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nameServer1
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PreRegistirationRequest
     */
    public function setNameServer1(?string $nameServer1 = null): self
    {
        // validation for constraint: string
        if (!is_null($nameServer1) && !is_string($nameServer1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameServer1, true), gettype($nameServer1)), __LINE__);
        }
        if (is_null($nameServer1) || (is_array($nameServer1) && empty($nameServer1))) {
            unset($this->NameServer1);
        } else {
            $this->NameServer1 = $nameServer1;
        }
        
        return $this;
    }
    /**
     * Get NameServer2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNameServer2(): ?string
    {
        return $this->NameServer2 ?? null;
    }
    /**
     * Set NameServer2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nameServer2
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PreRegistirationRequest
     */
    public function setNameServer2(?string $nameServer2 = null): self
    {
        // validation for constraint: string
        if (!is_null($nameServer2) && !is_string($nameServer2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameServer2, true), gettype($nameServer2)), __LINE__);
        }
        if (is_null($nameServer2) || (is_array($nameServer2) && empty($nameServer2))) {
            unset($this->NameServer2);
        } else {
            $this->NameServer2 = $nameServer2;
        }
        
        return $this;
    }
}
