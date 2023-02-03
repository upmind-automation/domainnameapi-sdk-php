<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomainAvailabilityInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DomainAvailabilityInfo
 * @subpackage Structs
 */
class DomainAvailabilityInfo extends BaseData
{
    /**
     * The ClassKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ClassKey = null;
    /**
     * The Command
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Command = null;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Currency = null;
    /**
     * The DomainName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DomainName = null;
    /**
     * The IsFee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsFee = null;
    /**
     * The Period
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $Period = null;
    /**
     * The Price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $Price = null;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Reason = null;
    /**
     * The Tld
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Tld = null;
    /**
     * Constructor method for DomainAvailabilityInfo
     * @uses DomainAvailabilityInfo::setClassKey()
     * @uses DomainAvailabilityInfo::setCommand()
     * @uses DomainAvailabilityInfo::setCurrency()
     * @uses DomainAvailabilityInfo::setDomainName()
     * @uses DomainAvailabilityInfo::setIsFee()
     * @uses DomainAvailabilityInfo::setPeriod()
     * @uses DomainAvailabilityInfo::setPrice()
     * @uses DomainAvailabilityInfo::setReason()
     * @uses DomainAvailabilityInfo::setTld()
     * @param string $classKey
     * @param string $command
     * @param string $currency
     * @param string $domainName
     * @param bool $isFee
     * @param int $period
     * @param float $price
     * @param string $reason
     * @param string $tld
     */
    public function __construct(?string $classKey = null, ?string $command = null, ?string $currency = null, ?string $domainName = null, ?bool $isFee = null, ?int $period = null, ?float $price = null, ?string $reason = null, ?string $tld = null)
    {
        $this
            ->setClassKey($classKey)
            ->setCommand($command)
            ->setCurrency($currency)
            ->setDomainName($domainName)
            ->setIsFee($isFee)
            ->setPeriod($period)
            ->setPrice($price)
            ->setReason($reason)
            ->setTld($tld);
    }
    /**
     * Get ClassKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClassKey(): ?string
    {
        return isset($this->ClassKey) ? $this->ClassKey : null;
    }
    /**
     * Set ClassKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $classKey
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo
     */
    public function setClassKey(?string $classKey = null): self
    {
        // validation for constraint: string
        if (!is_null($classKey) && !is_string($classKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classKey, true), gettype($classKey)), __LINE__);
        }
        if (is_null($classKey) || (is_array($classKey) && empty($classKey))) {
            unset($this->ClassKey);
        } else {
            $this->ClassKey = $classKey;
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo
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
     * Get Currency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return isset($this->Currency) ? $this->Currency : null;
    }
    /**
     * Set Currency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currency
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        if (is_null($currency) || (is_array($currency) && empty($currency))) {
            unset($this->Currency);
        } else {
            $this->Currency = $currency;
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo
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
     * Get IsFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsFee(): ?bool
    {
        return isset($this->IsFee) ? $this->IsFee : null;
    }
    /**
     * Set IsFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isFee
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo
     */
    public function setIsFee(?bool $isFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFee) && !is_bool($isFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFee, true), gettype($isFee)), __LINE__);
        }
        if (is_null($isFee) || (is_array($isFee) && empty($isFee))) {
            unset($this->IsFee);
        } else {
            $this->IsFee = $isFee;
        }
        
        return $this;
    }
    /**
     * Get Period value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPeriod(): ?int
    {
        return isset($this->Period) ? $this->Period : null;
    }
    /**
     * Set Period value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $period
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo
     */
    public function setPeriod(?int $period = null): self
    {
        // validation for constraint: int
        if (!is_null($period) && !(is_int($period) || ctype_digit($period))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($period, true), gettype($period)), __LINE__);
        }
        if (is_null($period) || (is_array($period) && empty($period))) {
            unset($this->Period);
        } else {
            $this->Period = $period;
        }
        
        return $this;
    }
    /**
     * Get Price value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return isset($this->Price) ? $this->Price : null;
    }
    /**
     * Set Price value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $price
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        if (is_null($price) || (is_array($price) && empty($price))) {
            unset($this->Price);
        } else {
            $this->Price = $price;
        }
        
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo
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
    /**
     * Get Tld value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTld(): ?string
    {
        return isset($this->Tld) ? $this->Tld : null;
    }
    /**
     * Set Tld value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tld
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo
     */
    public function setTld(?string $tld = null): self
    {
        // validation for constraint: string
        if (!is_null($tld) && !is_string($tld)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tld, true), gettype($tld)), __LINE__);
        }
        if (is_null($tld) || (is_array($tld) && empty($tld))) {
            unset($this->Tld);
        } else {
            $this->Tld = $tld;
        }
        
        return $this;
    }
}
