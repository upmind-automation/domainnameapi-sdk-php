<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TransferRequest
 * @subpackage Structs
 */
class TransferRequest extends BaseMethodRequest
{
    /**
     * The AuthCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AuthCode = null;
    /**
     * The Command
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Command = null;
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
     * The IsNewContact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsNewContact = null;
    /**
     * Constructor method for TransferRequest
     * @uses TransferRequest::setAuthCode()
     * @uses TransferRequest::setCommand()
     * @uses TransferRequest::setContact()
     * @uses TransferRequest::setDomainName()
     * @uses TransferRequest::setIsNewContact()
     * @param string $authCode
     * @param string $command
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $contact
     * @param string $domainName
     * @param bool $isNewContact
     */
    public function __construct(?string $authCode = null, ?string $command = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $contact = null, ?string $domainName = null, ?bool $isNewContact = null)
    {
        $this
            ->setAuthCode($authCode)
            ->setCommand($command)
            ->setContact($contact)
            ->setDomainName($domainName)
            ->setIsNewContact($isNewContact);
    }
    /**
     * Get AuthCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAuthCode(): ?string
    {
        return isset($this->AuthCode) ? $this->AuthCode : null;
    }
    /**
     * Set AuthCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $authCode
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TransferRequest
     */
    public function setAuthCode(?string $authCode = null): self
    {
        // validation for constraint: string
        if (!is_null($authCode) && !is_string($authCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authCode, true), gettype($authCode)), __LINE__);
        }
        if (is_null($authCode) || (is_array($authCode) && empty($authCode))) {
            unset($this->AuthCode);
        } else {
            $this->AuthCode = $authCode;
        }
        
        return $this;
    }
    /**
     * Get Command value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCommand(): ?string
    {
        return isset($this->Command) ? $this->Command : null;
    }
    /**
     * Set Command value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $command
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TransferRequest
     */
    public function setCommand(?string $command = null): self
    {
        // validation for constraint: string
        if (!is_null($command) && !is_string($command)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($command, true), gettype($command)), __LINE__);
        }
        if (is_null($command) || (is_array($command) && empty($command))) {
            unset($this->Command);
        } else {
            $this->Command = $command;
        }
        
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
        return isset($this->Contact) ? $this->Contact : null;
    }
    /**
     * Set Contact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ContactInfo $contact
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TransferRequest
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
        return isset($this->DomainName) ? $this->DomainName : null;
    }
    /**
     * Set DomainName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $domainName
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TransferRequest
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
     * Get IsNewContact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsNewContact(): ?bool
    {
        return isset($this->IsNewContact) ? $this->IsNewContact : null;
    }
    /**
     * Set IsNewContact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isNewContact
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TransferRequest
     */
    public function setIsNewContact(?bool $isNewContact = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNewContact) && !is_bool($isNewContact)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNewContact, true), gettype($isNewContact)), __LINE__);
        }
        if (is_null($isNewContact) || (is_array($isNewContact) && empty($isNewContact))) {
            unset($this->IsNewContact);
        } else {
            $this->IsNewContact = $isNewContact;
        }
        
        return $this;
    }
}
