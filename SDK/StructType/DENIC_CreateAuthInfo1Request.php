<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DENIC_CreateAuthInfo1Request StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DENIC_CreateAuthInfo1Request
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DENIC_CreateAuthInfo1Request extends BaseMethodRequest
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
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
     * - nillable: true
     * @var string|null
     */
    protected ?string $AuthInfo1ExpirationDate = null;
    /**
     * Constructor method for DENIC_CreateAuthInfo1Request
     * @uses DENIC_CreateAuthInfo1Request::setId()
     * @uses DENIC_CreateAuthInfo1Request::setAuthCode()
     * @uses DENIC_CreateAuthInfo1Request::setAuthInfo1ExpirationDate()
     * @param int $id
     * @param string $authCode
     * @param string $authInfo1ExpirationDate
     */
    public function __construct(?int $id = null, ?string $authCode = null, ?string $authInfo1ExpirationDate = null)
    {
        $this
            ->setId($id)
            ->setAuthCode($authCode)
            ->setAuthInfo1ExpirationDate($authInfo1ExpirationDate);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Request
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Request
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAuthInfo1ExpirationDate(): ?string
    {
        return $this->AuthInfo1ExpirationDate ?? null;
    }
    /**
     * Set AuthInfo1ExpirationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $authInfo1ExpirationDate
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Request
     */
    public function setAuthInfo1ExpirationDate(?string $authInfo1ExpirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($authInfo1ExpirationDate) && !is_string($authInfo1ExpirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authInfo1ExpirationDate, true), gettype($authInfo1ExpirationDate)), __LINE__);
        }
        if (is_null($authInfo1ExpirationDate) || (is_array($authInfo1ExpirationDate) && empty($authInfo1ExpirationDate))) {
            unset($this->AuthInfo1ExpirationDate);
        } else {
            $this->AuthInfo1ExpirationDate = $authInfo1ExpirationDate;
        }
        
        return $this;
    }
}
