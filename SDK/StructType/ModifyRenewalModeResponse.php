<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyRenewalModeResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyRenewalModeResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ModifyRenewalModeResponse extends BaseMethodResponse
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * The DomainName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DomainName = null;
    /**
     * The RenewalMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RenewalMode = null;
    /**
     * The ModifyRenewalModeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalModeResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalModeResponse $ModifyRenewalModeResult = null;
    /**
     * Constructor method for ModifyRenewalModeResponse
     * @uses ModifyRenewalModeResponse::setId()
     * @uses ModifyRenewalModeResponse::setDomainName()
     * @uses ModifyRenewalModeResponse::setRenewalMode()
     * @uses ModifyRenewalModeResponse::setModifyRenewalModeResult()
     * @param int $id
     * @param string $domainName
     * @param string $renewalMode
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalModeResponse $modifyRenewalModeResult
     */
    public function __construct(?int $id = null, ?string $domainName = null, ?string $renewalMode = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalModeResponse $modifyRenewalModeResult = null)
    {
        $this
            ->setId($id)
            ->setDomainName($domainName)
            ->setRenewalMode($renewalMode)
            ->setModifyRenewalModeResult($modifyRenewalModeResult);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalModeResponse
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalModeResponse
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
     * Get RenewalMode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRenewalMode(): ?string
    {
        return $this->RenewalMode ?? null;
    }
    /**
     * Set RenewalMode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $renewalMode
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalModeResponse
     */
    public function setRenewalMode(?string $renewalMode = null): self
    {
        // validation for constraint: string
        if (!is_null($renewalMode) && !is_string($renewalMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($renewalMode, true), gettype($renewalMode)), __LINE__);
        }
        if (is_null($renewalMode) || (is_array($renewalMode) && empty($renewalMode))) {
            unset($this->RenewalMode);
        } else {
            $this->RenewalMode = $renewalMode;
        }
        
        return $this;
    }
    /**
     * Get ModifyRenewalModeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalModeResponse|null
     */
    public function getModifyRenewalModeResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalModeResponse
    {
        return $this->ModifyRenewalModeResult ?? null;
    }
    /**
     * Set ModifyRenewalModeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalModeResponse $modifyRenewalModeResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalModeResponse
     */
    public function setModifyRenewalModeResult(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalModeResponse $modifyRenewalModeResult = null): self
    {
        if (is_null($modifyRenewalModeResult) || (is_array($modifyRenewalModeResult) && empty($modifyRenewalModeResult))) {
            unset($this->ModifyRenewalModeResult);
        } else {
            $this->ModifyRenewalModeResult = $modifyRenewalModeResult;
        }
        
        return $this;
    }
}
