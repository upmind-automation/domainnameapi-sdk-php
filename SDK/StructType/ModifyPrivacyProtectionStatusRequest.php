<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyPrivacyProtectionStatusRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyPrivacyProtectionStatusRequest
 * @subpackage Structs
 */
class ModifyPrivacyProtectionStatusRequest extends BaseMethodRequest
{
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
     * The ProtectPrivacy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ProtectPrivacy = null;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Reason = null;
    /**
     * Constructor method for ModifyPrivacyProtectionStatusRequest
     * @uses ModifyPrivacyProtectionStatusRequest::setDomainName()
     * @uses ModifyPrivacyProtectionStatusRequest::setId()
     * @uses ModifyPrivacyProtectionStatusRequest::setProtectPrivacy()
     * @uses ModifyPrivacyProtectionStatusRequest::setReason()
     * @param string $domainName
     * @param int $id
     * @param bool $protectPrivacy
     * @param string $reason
     */
    public function __construct(?string $domainName = null, ?int $id = null, ?bool $protectPrivacy = null, ?string $reason = null)
    {
        $this
            ->setDomainName($domainName)
            ->setId($id)
            ->setProtectPrivacy($protectPrivacy)
            ->setReason($reason);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatusRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatusRequest
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
     * Get ProtectPrivacy value
     * @return bool|null
     */
    public function getProtectPrivacy(): ?bool
    {
        return $this->ProtectPrivacy;
    }
    /**
     * Set ProtectPrivacy value
     * @param bool $protectPrivacy
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatusRequest
     */
    public function setProtectPrivacy(?bool $protectPrivacy = null): self
    {
        // validation for constraint: boolean
        if (!is_null($protectPrivacy) && !is_bool($protectPrivacy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($protectPrivacy, true), gettype($protectPrivacy)), __LINE__);
        }
        $this->ProtectPrivacy = $protectPrivacy;
        
        return $this;
    }
    /**
     * Get Reason value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReason(): ?string
    {
        return isset($this->Reason) ? $this->Reason : null;
    }
    /**
     * Set Reason value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $reason
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatusRequest
     */
    public function setReason(?string $reason = null): self
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        if (is_null($reason) || (is_array($reason) && empty($reason))) {
            unset($this->Reason);
        } else {
            $this->Reason = $reason;
        }
        
        return $this;
    }
}
