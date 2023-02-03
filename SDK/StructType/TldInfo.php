<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TldInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TldInfo
 * @subpackage Structs
 */
class TldInfo extends BaseData
{
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Country = null;
    /**
     * The IsDocumentRequired
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsDocumentRequired = null;
    /**
     * The IsTransferable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsTransferable = null;
    /**
     * The MaxCharacterCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxCharacterCount = null;
    /**
     * The MaxRegistrationPeriod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxRegistrationPeriod = null;
    /**
     * The MinCharacterCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MinCharacterCount = null;
    /**
     * The MinRegistrationPeriod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MinRegistrationPeriod = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The PriceInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldPriceInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldPriceInfo $PriceInfoList = null;
    /**
     * The RequiredDocumentInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RequiredDocumentInfo = null;
    /**
     * Constructor method for TldInfo
     * @uses TldInfo::setCountry()
     * @uses TldInfo::setIsDocumentRequired()
     * @uses TldInfo::setIsTransferable()
     * @uses TldInfo::setMaxCharacterCount()
     * @uses TldInfo::setMaxRegistrationPeriod()
     * @uses TldInfo::setMinCharacterCount()
     * @uses TldInfo::setMinRegistrationPeriod()
     * @uses TldInfo::setName()
     * @uses TldInfo::setPriceInfoList()
     * @uses TldInfo::setRequiredDocumentInfo()
     * @param string $country
     * @param bool $isDocumentRequired
     * @param bool $isTransferable
     * @param int $maxCharacterCount
     * @param int $maxRegistrationPeriod
     * @param int $minCharacterCount
     * @param int $minRegistrationPeriod
     * @param string $name
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldPriceInfo $priceInfoList
     * @param string $requiredDocumentInfo
     */
    public function __construct(?string $country = null, ?bool $isDocumentRequired = null, ?bool $isTransferable = null, ?int $maxCharacterCount = null, ?int $maxRegistrationPeriod = null, ?int $minCharacterCount = null, ?int $minRegistrationPeriod = null, ?string $name = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldPriceInfo $priceInfoList = null, ?string $requiredDocumentInfo = null)
    {
        $this
            ->setCountry($country)
            ->setIsDocumentRequired($isDocumentRequired)
            ->setIsTransferable($isTransferable)
            ->setMaxCharacterCount($maxCharacterCount)
            ->setMaxRegistrationPeriod($maxRegistrationPeriod)
            ->setMinCharacterCount($minCharacterCount)
            ->setMinRegistrationPeriod($minRegistrationPeriod)
            ->setName($name)
            ->setPriceInfoList($priceInfoList)
            ->setRequiredDocumentInfo($requiredDocumentInfo);
    }
    /**
     * Get Country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return isset($this->Country) ? $this->Country : null;
    }
    /**
     * Set Country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->Country);
        } else {
            $this->Country = $country;
        }
        
        return $this;
    }
    /**
     * Get IsDocumentRequired value
     * @return bool|null
     */
    public function getIsDocumentRequired(): ?bool
    {
        return $this->IsDocumentRequired;
    }
    /**
     * Set IsDocumentRequired value
     * @param bool $isDocumentRequired
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo
     */
    public function setIsDocumentRequired(?bool $isDocumentRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDocumentRequired) && !is_bool($isDocumentRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDocumentRequired, true), gettype($isDocumentRequired)), __LINE__);
        }
        $this->IsDocumentRequired = $isDocumentRequired;
        
        return $this;
    }
    /**
     * Get IsTransferable value
     * @return bool|null
     */
    public function getIsTransferable(): ?bool
    {
        return $this->IsTransferable;
    }
    /**
     * Set IsTransferable value
     * @param bool $isTransferable
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo
     */
    public function setIsTransferable(?bool $isTransferable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isTransferable) && !is_bool($isTransferable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTransferable, true), gettype($isTransferable)), __LINE__);
        }
        $this->IsTransferable = $isTransferable;
        
        return $this;
    }
    /**
     * Get MaxCharacterCount value
     * @return int|null
     */
    public function getMaxCharacterCount(): ?int
    {
        return $this->MaxCharacterCount;
    }
    /**
     * Set MaxCharacterCount value
     * @param int $maxCharacterCount
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo
     */
    public function setMaxCharacterCount(?int $maxCharacterCount = null): self
    {
        // validation for constraint: int
        if (!is_null($maxCharacterCount) && !(is_int($maxCharacterCount) || ctype_digit($maxCharacterCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxCharacterCount, true), gettype($maxCharacterCount)), __LINE__);
        }
        $this->MaxCharacterCount = $maxCharacterCount;
        
        return $this;
    }
    /**
     * Get MaxRegistrationPeriod value
     * @return int|null
     */
    public function getMaxRegistrationPeriod(): ?int
    {
        return $this->MaxRegistrationPeriod;
    }
    /**
     * Set MaxRegistrationPeriod value
     * @param int $maxRegistrationPeriod
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo
     */
    public function setMaxRegistrationPeriod(?int $maxRegistrationPeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($maxRegistrationPeriod) && !(is_int($maxRegistrationPeriod) || ctype_digit($maxRegistrationPeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxRegistrationPeriod, true), gettype($maxRegistrationPeriod)), __LINE__);
        }
        $this->MaxRegistrationPeriod = $maxRegistrationPeriod;
        
        return $this;
    }
    /**
     * Get MinCharacterCount value
     * @return int|null
     */
    public function getMinCharacterCount(): ?int
    {
        return $this->MinCharacterCount;
    }
    /**
     * Set MinCharacterCount value
     * @param int $minCharacterCount
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo
     */
    public function setMinCharacterCount(?int $minCharacterCount = null): self
    {
        // validation for constraint: int
        if (!is_null($minCharacterCount) && !(is_int($minCharacterCount) || ctype_digit($minCharacterCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minCharacterCount, true), gettype($minCharacterCount)), __LINE__);
        }
        $this->MinCharacterCount = $minCharacterCount;
        
        return $this;
    }
    /**
     * Get MinRegistrationPeriod value
     * @return int|null
     */
    public function getMinRegistrationPeriod(): ?int
    {
        return $this->MinRegistrationPeriod;
    }
    /**
     * Set MinRegistrationPeriod value
     * @param int $minRegistrationPeriod
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo
     */
    public function setMinRegistrationPeriod(?int $minRegistrationPeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($minRegistrationPeriod) && !(is_int($minRegistrationPeriod) || ctype_digit($minRegistrationPeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minRegistrationPeriod, true), gettype($minRegistrationPeriod)), __LINE__);
        }
        $this->MinRegistrationPeriod = $minRegistrationPeriod;
        
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
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo
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
     * Get PriceInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldPriceInfo|null
     */
    public function getPriceInfoList(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldPriceInfo
    {
        return isset($this->PriceInfoList) ? $this->PriceInfoList : null;
    }
    /**
     * Set PriceInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldPriceInfo $priceInfoList
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo
     */
    public function setPriceInfoList(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldPriceInfo $priceInfoList = null): self
    {
        if (is_null($priceInfoList) || (is_array($priceInfoList) && empty($priceInfoList))) {
            unset($this->PriceInfoList);
        } else {
            $this->PriceInfoList = $priceInfoList;
        }
        
        return $this;
    }
    /**
     * Get RequiredDocumentInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRequiredDocumentInfo(): ?string
    {
        return isset($this->RequiredDocumentInfo) ? $this->RequiredDocumentInfo : null;
    }
    /**
     * Set RequiredDocumentInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $requiredDocumentInfo
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo
     */
    public function setRequiredDocumentInfo(?string $requiredDocumentInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($requiredDocumentInfo) && !is_string($requiredDocumentInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requiredDocumentInfo, true), gettype($requiredDocumentInfo)), __LINE__);
        }
        if (is_null($requiredDocumentInfo) || (is_array($requiredDocumentInfo) && empty($requiredDocumentInfo))) {
            unset($this->RequiredDocumentInfo);
        } else {
            $this->RequiredDocumentInfo = $requiredDocumentInfo;
        }
        
        return $this;
    }
}
