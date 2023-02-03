<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetRenewalModeRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SetRenewalModeRequest
 * @subpackage Structs
 */
class SetRenewalModeRequest extends BaseMethodRequest
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
     * - nillable: true
     * @var string|null
     */
    protected ?string $Period = null;
    /**
     * The RenewalMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RenewalMode = null;
    /**
     * Constructor method for SetRenewalModeRequest
     * @uses SetRenewalModeRequest::setId()
     * @uses SetRenewalModeRequest::setPeriod()
     * @uses SetRenewalModeRequest::setRenewalMode()
     * @param int $id
     * @param string $period
     * @param string $renewalMode
     */
    public function __construct(?int $id = null, ?string $period = null, ?string $renewalMode = null)
    {
        $this
            ->setId($id)
            ->setPeriod($period)
            ->setRenewalMode($renewalMode);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SetRenewalModeRequest
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPeriod(): ?string
    {
        return isset($this->Period) ? $this->Period : null;
    }
    /**
     * Set Period value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $period
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SetRenewalModeRequest
     */
    public function setPeriod(?string $period = null): self
    {
        // validation for constraint: string
        if (!is_null($period) && !is_string($period)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($period, true), gettype($period)), __LINE__);
        }
        if (is_null($period) || (is_array($period) && empty($period))) {
            unset($this->Period);
        } else {
            $this->Period = $period;
        }
        
        return $this;
    }
    /**
     * Get RenewalMode value
     * @return string|null
     */
    public function getRenewalMode(): ?string
    {
        return $this->RenewalMode;
    }
    /**
     * Set RenewalMode value
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\RenewalMode::valueIsValid()
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\RenewalMode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $renewalMode
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SetRenewalModeRequest
     */
    public function setRenewalMode(?string $renewalMode = null): self
    {
        // validation for constraint: enumeration
        if (!\Upmind\DomainNameApiSdk\SDK\EnumType\RenewalMode::valueIsValid($renewalMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Upmind\DomainNameApiSdk\SDK\EnumType\RenewalMode', is_array($renewalMode) ? implode(', ', $renewalMode) : var_export($renewalMode, true), implode(', ', \Upmind\DomainNameApiSdk\SDK\EnumType\RenewalMode::getValidValues())), __LINE__);
        }
        $this->RenewalMode = $renewalMode;
        
        return $this;
    }
}
