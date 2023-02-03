<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckTransferResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CheckTransferResponse
 * @subpackage Structs
 */
class CheckTransferResponse extends BaseMethodResponse
{
    /**
     * The CheckTransferResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse $CheckTransferResult = null;
    /**
     * The AdditionalAttributes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $AdditionalAttributes = null;
    /**
     * The AuthCodeIsRequired
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AuthCodeIsRequired = null;
    /**
     * The AuthCodeIsValid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AuthCodeIsValid = null;
    /**
     * The TransferAvailabilityStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $TransferAvailabilityStatus = null;
    /**
     * The TransferLock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $TransferLock = null;
    /**
     * The UserTransferRequired
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UserTransferRequired = null;
    /**
     * Constructor method for CheckTransferResponse
     * @uses CheckTransferResponse::setCheckTransferResult()
     * @uses CheckTransferResponse::setAdditionalAttributes()
     * @uses CheckTransferResponse::setAuthCodeIsRequired()
     * @uses CheckTransferResponse::setAuthCodeIsValid()
     * @uses CheckTransferResponse::setTransferAvailabilityStatus()
     * @uses CheckTransferResponse::setTransferLock()
     * @uses CheckTransferResponse::setUserTransferRequired()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse $checkTransferResult
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes
     * @param bool $authCodeIsRequired
     * @param string $authCodeIsValid
     * @param bool $transferAvailabilityStatus
     * @param bool $transferLock
     * @param bool $userTransferRequired
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse $checkTransferResult = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes = null, ?bool $authCodeIsRequired = null, ?string $authCodeIsValid = null, ?bool $transferAvailabilityStatus = null, ?bool $transferLock = null, ?bool $userTransferRequired = null)
    {
        $this
            ->setCheckTransferResult($checkTransferResult)
            ->setAdditionalAttributes($additionalAttributes)
            ->setAuthCodeIsRequired($authCodeIsRequired)
            ->setAuthCodeIsValid($authCodeIsValid)
            ->setTransferAvailabilityStatus($transferAvailabilityStatus)
            ->setTransferLock($transferLock)
            ->setUserTransferRequired($userTransferRequired);
    }
    /**
     * Get CheckTransferResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse|null
     */
    public function getCheckTransferResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse
    {
        return isset($this->CheckTransferResult) ? $this->CheckTransferResult : null;
    }
    /**
     * Set CheckTransferResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse $checkTransferResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse
     */
    public function setCheckTransferResult(?\Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse $checkTransferResult = null): self
    {
        if (is_null($checkTransferResult) || (is_array($checkTransferResult) && empty($checkTransferResult))) {
            unset($this->CheckTransferResult);
        } else {
            $this->CheckTransferResult = $checkTransferResult;
        }
        
        return $this;
    }
    /**
     * Get AdditionalAttributes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring|null
     */
    public function getAdditionalAttributes(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring
    {
        return isset($this->AdditionalAttributes) ? $this->AdditionalAttributes : null;
    }
    /**
     * Set AdditionalAttributes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse
     */
    public function setAdditionalAttributes(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes = null): self
    {
        if (is_null($additionalAttributes) || (is_array($additionalAttributes) && empty($additionalAttributes))) {
            unset($this->AdditionalAttributes);
        } else {
            $this->AdditionalAttributes = $additionalAttributes;
        }
        
        return $this;
    }
    /**
     * Get AuthCodeIsRequired value
     * @return bool|null
     */
    public function getAuthCodeIsRequired(): ?bool
    {
        return $this->AuthCodeIsRequired;
    }
    /**
     * Set AuthCodeIsRequired value
     * @param bool $authCodeIsRequired
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse
     */
    public function setAuthCodeIsRequired(?bool $authCodeIsRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($authCodeIsRequired) && !is_bool($authCodeIsRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($authCodeIsRequired, true), gettype($authCodeIsRequired)), __LINE__);
        }
        $this->AuthCodeIsRequired = $authCodeIsRequired;
        
        return $this;
    }
    /**
     * Get AuthCodeIsValid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAuthCodeIsValid(): ?string
    {
        return isset($this->AuthCodeIsValid) ? $this->AuthCodeIsValid : null;
    }
    /**
     * Set AuthCodeIsValid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $authCodeIsValid
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse
     */
    public function setAuthCodeIsValid(?string $authCodeIsValid = null): self
    {
        // validation for constraint: string
        if (!is_null($authCodeIsValid) && !is_string($authCodeIsValid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authCodeIsValid, true), gettype($authCodeIsValid)), __LINE__);
        }
        if (is_null($authCodeIsValid) || (is_array($authCodeIsValid) && empty($authCodeIsValid))) {
            unset($this->AuthCodeIsValid);
        } else {
            $this->AuthCodeIsValid = $authCodeIsValid;
        }
        
        return $this;
    }
    /**
     * Get TransferAvailabilityStatus value
     * @return bool|null
     */
    public function getTransferAvailabilityStatus(): ?bool
    {
        return $this->TransferAvailabilityStatus;
    }
    /**
     * Set TransferAvailabilityStatus value
     * @param bool $transferAvailabilityStatus
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse
     */
    public function setTransferAvailabilityStatus(?bool $transferAvailabilityStatus = null): self
    {
        // validation for constraint: boolean
        if (!is_null($transferAvailabilityStatus) && !is_bool($transferAvailabilityStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($transferAvailabilityStatus, true), gettype($transferAvailabilityStatus)), __LINE__);
        }
        $this->TransferAvailabilityStatus = $transferAvailabilityStatus;
        
        return $this;
    }
    /**
     * Get TransferLock value
     * @return bool|null
     */
    public function getTransferLock(): ?bool
    {
        return $this->TransferLock;
    }
    /**
     * Set TransferLock value
     * @param bool $transferLock
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse
     */
    public function setTransferLock(?bool $transferLock = null): self
    {
        // validation for constraint: boolean
        if (!is_null($transferLock) && !is_bool($transferLock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($transferLock, true), gettype($transferLock)), __LINE__);
        }
        $this->TransferLock = $transferLock;
        
        return $this;
    }
    /**
     * Get UserTransferRequired value
     * @return bool|null
     */
    public function getUserTransferRequired(): ?bool
    {
        return $this->UserTransferRequired;
    }
    /**
     * Set UserTransferRequired value
     * @param bool $userTransferRequired
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse
     */
    public function setUserTransferRequired(?bool $userTransferRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($userTransferRequired) && !is_bool($userTransferRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($userTransferRequired, true), gettype($userTransferRequired)), __LINE__);
        }
        $this->UserTransferRequired = $userTransferRequired;
        
        return $this;
    }
}
