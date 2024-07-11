<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PushRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PushRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PushRequest extends BaseMethodRequest
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * The Target
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Target = null;
    /**
     * The DomainName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DomainName = null;
    /**
     * Constructor method for PushRequest
     * @uses PushRequest::setId()
     * @uses PushRequest::setTarget()
     * @uses PushRequest::setDomainName()
     * @param int $id
     * @param string $target
     * @param string $domainName
     */
    public function __construct(?int $id = null, ?string $target = null, ?string $domainName = null)
    {
        $this
            ->setId($id)
            ->setTarget($target)
            ->setDomainName($domainName);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PushRequest
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
     * Get Target value
     * @return string|null
     */
    public function getTarget(): ?string
    {
        return $this->Target;
    }
    /**
     * Set Target value
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\DomainPushTarget::valueIsValid()
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\DomainPushTarget::getValidValues()
     * @throws InvalidArgumentException
     * @param string $target
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PushRequest
     */
    public function setTarget(?string $target = null): self
    {
        // validation for constraint: enumeration
        if (!\Upmind\DomainNameApiSdk\SDK\EnumType\DomainPushTarget::valueIsValid($target)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Upmind\DomainNameApiSdk\SDK\EnumType\DomainPushTarget', is_array($target) ? implode(', ', $target) : var_export($target, true), implode(', ', \Upmind\DomainNameApiSdk\SDK\EnumType\DomainPushTarget::getValidValues())), __LINE__);
        }
        $this->Target = $target;
        
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PushRequest
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
