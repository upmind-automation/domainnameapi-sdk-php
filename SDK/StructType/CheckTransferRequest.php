<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckTransferRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CheckTransferRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckTransferRequest extends BaseMethodRequest
{
    /**
     * The AuthCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AuthCode = null;
    /**
     * The DomainName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DomainName = null;
    /**
     * Constructor method for CheckTransferRequest
     * @uses CheckTransferRequest::setAuthCode()
     * @uses CheckTransferRequest::setDomainName()
     * @param string $authCode
     * @param string $domainName
     */
    public function __construct(?string $authCode = null, ?string $domainName = null)
    {
        $this
            ->setAuthCode($authCode)
            ->setDomainName($domainName);
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
        return $this->AuthCode ?? null;
    }
    /**
     * Set AuthCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $authCode
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferRequest
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
}
