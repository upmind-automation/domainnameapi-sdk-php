<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDetailsFromRegistryRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetDetailsFromRegistryRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDetailsFromRegistryRequest extends BaseMethodRequest
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
     * The ExternalId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ExternalId = null;
    /**
     * Constructor method for GetDetailsFromRegistryRequest
     * @uses GetDetailsFromRegistryRequest::setAuthCode()
     * @uses GetDetailsFromRegistryRequest::setExternalId()
     * @param string $authCode
     * @param string $externalId
     */
    public function __construct(?string $authCode = null, ?string $externalId = null)
    {
        $this
            ->setAuthCode($authCode)
            ->setExternalId($externalId);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsFromRegistryRequest
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
     * Get ExternalId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->ExternalId ?? null;
    }
    /**
     * Set ExternalId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $externalId
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsFromRegistryRequest
     */
    public function setExternalId(?string $externalId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalId) && !is_string($externalId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalId, true), gettype($externalId)), __LINE__);
        }
        if (is_null($externalId) || (is_array($externalId) && empty($externalId))) {
            unset($this->ExternalId);
        } else {
            $this->ExternalId = $externalId;
        }
        
        return $this;
    }
}
