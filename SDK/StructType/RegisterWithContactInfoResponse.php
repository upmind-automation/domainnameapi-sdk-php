<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegisterWithContactInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RegisterWithContactInfoResponse extends AbstractStructBase
{
    /**
     * The RegisterWithContactInfoResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse $RegisterWithContactInfoResult = null;
    /**
     * Constructor method for RegisterWithContactInfoResponse
     * @uses RegisterWithContactInfoResponse::setRegisterWithContactInfoResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse $registerWithContactInfoResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse $registerWithContactInfoResult = null)
    {
        $this
            ->setRegisterWithContactInfoResult($registerWithContactInfoResult);
    }
    /**
     * Get RegisterWithContactInfoResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse|null
     */
    public function getRegisterWithContactInfoResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse
    {
        return $this->RegisterWithContactInfoResult ?? null;
    }
    /**
     * Set RegisterWithContactInfoResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse $registerWithContactInfoResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterWithContactInfoResponse
     */
    public function setRegisterWithContactInfoResult(?\Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse $registerWithContactInfoResult = null): self
    {
        if (is_null($registerWithContactInfoResult) || (is_array($registerWithContactInfoResult) && empty($registerWithContactInfoResult))) {
            unset($this->RegisterWithContactInfoResult);
        } else {
            $this->RegisterWithContactInfoResult = $registerWithContactInfoResult;
        }
        
        return $this;
    }
}
