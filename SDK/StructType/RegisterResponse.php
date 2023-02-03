<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegisterResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RegisterResponse
 * @subpackage Structs
 */
class RegisterResponse extends BaseMethodResponse
{
    /**
     * The RegisterResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse $RegisterResult = null;
    /**
     * The DomainInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $DomainInfo = null;
    /**
     * Constructor method for RegisterResponse
     * @uses RegisterResponse::setRegisterResult()
     * @uses RegisterResponse::setDomainInfo()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse $registerResult
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse $registerResult = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo = null)
    {
        $this
            ->setRegisterResult($registerResult)
            ->setDomainInfo($domainInfo);
    }
    /**
     * Get RegisterResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse|null
     */
    public function getRegisterResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse
    {
        return isset($this->RegisterResult) ? $this->RegisterResult : null;
    }
    /**
     * Set RegisterResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse $registerResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse
     */
    public function setRegisterResult(?\Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse $registerResult = null): self
    {
        if (is_null($registerResult) || (is_array($registerResult) && empty($registerResult))) {
            unset($this->RegisterResult);
        } else {
            $this->RegisterResult = $registerResult;
        }
        
        return $this;
    }
    /**
     * Get DomainInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo|null
     */
    public function getDomainInfo(): ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
    {
        return isset($this->DomainInfo) ? $this->DomainInfo : null;
    }
    /**
     * Set DomainInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse
     */
    public function setDomainInfo(?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo = null): self
    {
        if (is_null($domainInfo) || (is_array($domainInfo) && empty($domainInfo))) {
            unset($this->DomainInfo);
        } else {
            $this->DomainInfo = $domainInfo;
        }
        
        return $this;
    }
}
