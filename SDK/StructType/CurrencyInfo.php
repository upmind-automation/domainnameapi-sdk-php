<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CurrencyInfo
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CurrencyInfo extends BaseData
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Code = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The OriginalName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OriginalName = null;
    /**
     * The Symbol
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Symbol = null;
    /**
     * Constructor method for CurrencyInfo
     * @uses CurrencyInfo::setCode()
     * @uses CurrencyInfo::setName()
     * @uses CurrencyInfo::setOriginalName()
     * @uses CurrencyInfo::setSymbol()
     * @param string $code
     * @param string $name
     * @param string $originalName
     * @param string $symbol
     */
    public function __construct(?string $code = null, ?string $name = null, ?string $originalName = null, ?string $symbol = null)
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setOriginalName($originalName)
            ->setSymbol($symbol);
    }
    /**
     * Get Code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->Code ?? null;
    }
    /**
     * Set Code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $code
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CurrencyInfo
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->Code);
        } else {
            $this->Code = $code;
        }
        
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CurrencyInfo
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
    /**
     * Get OriginalName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOriginalName(): ?string
    {
        return $this->OriginalName ?? null;
    }
    /**
     * Set OriginalName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $originalName
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CurrencyInfo
     */
    public function setOriginalName(?string $originalName = null): self
    {
        // validation for constraint: string
        if (!is_null($originalName) && !is_string($originalName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalName, true), gettype($originalName)), __LINE__);
        }
        if (is_null($originalName) || (is_array($originalName) && empty($originalName))) {
            unset($this->OriginalName);
        } else {
            $this->OriginalName = $originalName;
        }
        
        return $this;
    }
    /**
     * Get Symbol value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSymbol(): ?string
    {
        return $this->Symbol ?? null;
    }
    /**
     * Set Symbol value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $symbol
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CurrencyInfo
     */
    public function setSymbol(?string $symbol = null): self
    {
        // validation for constraint: string
        if (!is_null($symbol) && !is_string($symbol)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($symbol, true), gettype($symbol)), __LINE__);
        }
        if (is_null($symbol) || (is_array($symbol) && empty($symbol))) {
            unset($this->Symbol);
        } else {
            $this->Symbol = $symbol;
        }
        
        return $this;
    }
}
