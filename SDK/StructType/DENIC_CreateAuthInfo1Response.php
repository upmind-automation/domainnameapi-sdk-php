<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DENIC_CreateAuthInfo1Response StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DENIC_CreateAuthInfo1Response
 * @subpackage Structs
 */
class DENIC_CreateAuthInfo1Response extends BaseMethodResponse
{
    /**
     * The DENIC_CreateAuthInfo1Result
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Response|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Response $DENIC_CreateAuthInfo1Result = null;
    /**
     * The AuthCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AuthCode = null;
    /**
     * The AuthInfo1ExpirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AuthInfo1ExpirationDate = null;
    /**
     * The DomainStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DomainStatus = null;
    /**
     * Constructor method for DENIC_CreateAuthInfo1Response
     * @uses DENIC_CreateAuthInfo1Response::setDENIC_CreateAuthInfo1Result()
     * @uses DENIC_CreateAuthInfo1Response::setAuthCode()
     * @uses DENIC_CreateAuthInfo1Response::setAuthInfo1ExpirationDate()
     * @uses DENIC_CreateAuthInfo1Response::setDomainStatus()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Response $dENIC_CreateAuthInfo1Result
     * @param string $authCode
     * @param string $authInfo1ExpirationDate
     * @param string $domainStatus
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Response $dENIC_CreateAuthInfo1Result = null, ?string $authCode = null, ?string $authInfo1ExpirationDate = null, ?string $domainStatus = null)
    {
        $this
            ->setDENIC_CreateAuthInfo1Result($dENIC_CreateAuthInfo1Result)
            ->setAuthCode($authCode)
            ->setAuthInfo1ExpirationDate($authInfo1ExpirationDate)
            ->setDomainStatus($domainStatus);
    }
    /**
     * Get DENIC_CreateAuthInfo1Result value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Response|null
     */
    public function getDENIC_CreateAuthInfo1Result(): ?\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Response
    {
        return isset($this->DENIC_CreateAuthInfo1Result) ? $this->DENIC_CreateAuthInfo1Result : null;
    }
    /**
     * Set DENIC_CreateAuthInfo1Result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Response $dENIC_CreateAuthInfo1Result
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Response
     */
    public function setDENIC_CreateAuthInfo1Result(?\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Response $dENIC_CreateAuthInfo1Result = null): self
    {
        if (is_null($dENIC_CreateAuthInfo1Result) || (is_array($dENIC_CreateAuthInfo1Result) && empty($dENIC_CreateAuthInfo1Result))) {
            unset($this->DENIC_CreateAuthInfo1Result);
        } else {
            $this->DENIC_CreateAuthInfo1Result = $dENIC_CreateAuthInfo1Result;
        }
        
        return $this;
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Response
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
     * Get AuthInfo1ExpirationDate value
     * @return string|null
     */
    public function getAuthInfo1ExpirationDate(): ?string
    {
        return $this->AuthInfo1ExpirationDate;
    }
    /**
     * Set AuthInfo1ExpirationDate value
     * @param string $authInfo1ExpirationDate
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Response
     */
    public function setAuthInfo1ExpirationDate(?string $authInfo1ExpirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($authInfo1ExpirationDate) && !is_string($authInfo1ExpirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authInfo1ExpirationDate, true), gettype($authInfo1ExpirationDate)), __LINE__);
        }
        $this->AuthInfo1ExpirationDate = $authInfo1ExpirationDate;
        
        return $this;
    }
    /**
     * Get DomainStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDomainStatus(): ?string
    {
        return isset($this->DomainStatus) ? $this->DomainStatus : null;
    }
    /**
     * Set DomainStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $domainStatus
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Response
     */
    public function setDomainStatus(?string $domainStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($domainStatus) && !is_string($domainStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domainStatus, true), gettype($domainStatus)), __LINE__);
        }
        if (is_null($domainStatus) || (is_array($domainStatus) && empty($domainStatus))) {
            unset($this->DomainStatus);
        } else {
            $this->DomainStatus = $domainStatus;
        }
        
        return $this;
    }
}
