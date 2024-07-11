<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResellerInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ResellerInfo
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResellerInfo extends BaseData
{
    /**
     * The ApiKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ApiKey = null;
    /**
     * The BalanceInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfBalanceInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfBalanceInfo $BalanceInfoList = null;
    /**
     * The CurrencyInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\CurrencyInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\CurrencyInfo $CurrencyInfo = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Password = null;
    /**
     * The UserName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $UserName = null;
    /**
     * Constructor method for ResellerInfo
     * @uses ResellerInfo::setApiKey()
     * @uses ResellerInfo::setBalanceInfoList()
     * @uses ResellerInfo::setCurrencyInfo()
     * @uses ResellerInfo::setName()
     * @uses ResellerInfo::setPassword()
     * @uses ResellerInfo::setUserName()
     * @param string $apiKey
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfBalanceInfo $balanceInfoList
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CurrencyInfo $currencyInfo
     * @param string $name
     * @param string $password
     * @param string $userName
     */
    public function __construct(?string $apiKey = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfBalanceInfo $balanceInfoList = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\CurrencyInfo $currencyInfo = null, ?string $name = null, ?string $password = null, ?string $userName = null)
    {
        $this
            ->setApiKey($apiKey)
            ->setBalanceInfoList($balanceInfoList)
            ->setCurrencyInfo($currencyInfo)
            ->setName($name)
            ->setPassword($password)
            ->setUserName($userName);
    }
    /**
     * Get ApiKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getApiKey(): ?string
    {
        return $this->ApiKey ?? null;
    }
    /**
     * Set ApiKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $apiKey
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ResellerInfo
     */
    public function setApiKey(?string $apiKey = null): self
    {
        // validation for constraint: string
        if (!is_null($apiKey) && !is_string($apiKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiKey, true), gettype($apiKey)), __LINE__);
        }
        if (is_null($apiKey) || (is_array($apiKey) && empty($apiKey))) {
            unset($this->ApiKey);
        } else {
            $this->ApiKey = $apiKey;
        }
        
        return $this;
    }
    /**
     * Get BalanceInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfBalanceInfo|null
     */
    public function getBalanceInfoList(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfBalanceInfo
    {
        return $this->BalanceInfoList ?? null;
    }
    /**
     * Set BalanceInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfBalanceInfo $balanceInfoList
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ResellerInfo
     */
    public function setBalanceInfoList(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfBalanceInfo $balanceInfoList = null): self
    {
        if (is_null($balanceInfoList) || (is_array($balanceInfoList) && empty($balanceInfoList))) {
            unset($this->BalanceInfoList);
        } else {
            $this->BalanceInfoList = $balanceInfoList;
        }
        
        return $this;
    }
    /**
     * Get CurrencyInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CurrencyInfo|null
     */
    public function getCurrencyInfo(): ?\Upmind\DomainNameApiSdk\SDK\StructType\CurrencyInfo
    {
        return $this->CurrencyInfo ?? null;
    }
    /**
     * Set CurrencyInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CurrencyInfo $currencyInfo
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ResellerInfo
     */
    public function setCurrencyInfo(?\Upmind\DomainNameApiSdk\SDK\StructType\CurrencyInfo $currencyInfo = null): self
    {
        if (is_null($currencyInfo) || (is_array($currencyInfo) && empty($currencyInfo))) {
            unset($this->CurrencyInfo);
        } else {
            $this->CurrencyInfo = $currencyInfo;
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ResellerInfo
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
     * Get Password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->Password ?? null;
    }
    /**
     * Set Password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ResellerInfo
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->Password);
        } else {
            $this->Password = $password;
        }
        
        return $this;
    }
    /**
     * Get UserName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->UserName ?? null;
    }
    /**
     * Set UserName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userName
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ResellerInfo
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        if (is_null($userName) || (is_array($userName) && empty($userName))) {
            unset($this->UserName);
        } else {
            $this->UserName = $userName;
        }
        
        return $this;
    }
}
