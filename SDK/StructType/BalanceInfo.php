<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BalanceInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BalanceInfo
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BalanceInfo extends AbstractStructBase
{
    /**
     * The Balance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Balance = null;
    /**
     * The CurrencyId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CurrencyId = null;
    /**
     * The CurrencyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CurrencyName = null;
    /**
     * The CurrencySymbol
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CurrencySymbol = null;
    /**
     * Constructor method for BalanceInfo
     * @uses BalanceInfo::setBalance()
     * @uses BalanceInfo::setCurrencyId()
     * @uses BalanceInfo::setCurrencyName()
     * @uses BalanceInfo::setCurrencySymbol()
     * @param float $balance
     * @param int $currencyId
     * @param string $currencyName
     * @param string $currencySymbol
     */
    public function __construct(?float $balance = null, ?int $currencyId = null, ?string $currencyName = null, ?string $currencySymbol = null)
    {
        $this
            ->setBalance($balance)
            ->setCurrencyId($currencyId)
            ->setCurrencyName($currencyName)
            ->setCurrencySymbol($currencySymbol);
    }
    /**
     * Get Balance value
     * @return float|null
     */
    public function getBalance(): ?float
    {
        return $this->Balance;
    }
    /**
     * Set Balance value
     * @param float $balance
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo
     */
    public function setBalance(?float $balance = null): self
    {
        // validation for constraint: float
        if (!is_null($balance) && !(is_float($balance) || is_numeric($balance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($balance, true), gettype($balance)), __LINE__);
        }
        $this->Balance = $balance;
        
        return $this;
    }
    /**
     * Get CurrencyId value
     * @return int|null
     */
    public function getCurrencyId(): ?int
    {
        return $this->CurrencyId;
    }
    /**
     * Set CurrencyId value
     * @param int $currencyId
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo
     */
    public function setCurrencyId(?int $currencyId = null): self
    {
        // validation for constraint: int
        if (!is_null($currencyId) && !(is_int($currencyId) || ctype_digit($currencyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($currencyId, true), gettype($currencyId)), __LINE__);
        }
        $this->CurrencyId = $currencyId;
        
        return $this;
    }
    /**
     * Get CurrencyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrencyName(): ?string
    {
        return $this->CurrencyName ?? null;
    }
    /**
     * Set CurrencyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currencyName
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo
     */
    public function setCurrencyName(?string $currencyName = null): self
    {
        // validation for constraint: string
        if (!is_null($currencyName) && !is_string($currencyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyName, true), gettype($currencyName)), __LINE__);
        }
        if (is_null($currencyName) || (is_array($currencyName) && empty($currencyName))) {
            unset($this->CurrencyName);
        } else {
            $this->CurrencyName = $currencyName;
        }
        
        return $this;
    }
    /**
     * Get CurrencySymbol value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrencySymbol(): ?string
    {
        return $this->CurrencySymbol ?? null;
    }
    /**
     * Set CurrencySymbol value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currencySymbol
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo
     */
    public function setCurrencySymbol(?string $currencySymbol = null): self
    {
        // validation for constraint: string
        if (!is_null($currencySymbol) && !is_string($currencySymbol)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencySymbol, true), gettype($currencySymbol)), __LINE__);
        }
        if (is_null($currencySymbol) || (is_array($currencySymbol) && empty($currencySymbol))) {
            unset($this->CurrencySymbol);
        } else {
            $this->CurrencySymbol = $currencySymbol;
        }
        
        return $this;
    }
}
