<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseMethodRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BaseMethodRequest
 * @subpackage Structs
 */
class BaseMethodRequest extends AbstractStructBase
{
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
     * Constructor method for BaseMethodRequest
     * @uses BaseMethodRequest::setPassword()
     * @uses BaseMethodRequest::setUserName()
     * @param string $password
     * @param string $userName
     */
    public function __construct(?string $password = null, ?string $userName = null)
    {
        $this
            ->setPassword($password)
            ->setUserName($userName);
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
        return isset($this->Password) ? $this->Password : null;
    }
    /**
     * Set Password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BaseMethodRequest
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
        return isset($this->UserName) ? $this->UserName : null;
    }
    /**
     * Set UserName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userName
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BaseMethodRequest
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
