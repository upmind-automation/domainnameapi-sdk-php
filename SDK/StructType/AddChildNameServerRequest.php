<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddChildNameServerRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AddChildNameServerRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddChildNameServerRequest extends BaseMethodRequest
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * The ChildNameServer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ChildNameServer = null;
    /**
     * The IpAddressList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $IpAddressList = null;
    /**
     * Constructor method for AddChildNameServerRequest
     * @uses AddChildNameServerRequest::setId()
     * @uses AddChildNameServerRequest::setChildNameServer()
     * @uses AddChildNameServerRequest::setIpAddressList()
     * @param int $id
     * @param string $childNameServer
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $ipAddressList
     */
    public function __construct(?int $id = null, ?string $childNameServer = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $ipAddressList = null)
    {
        $this
            ->setId($id)
            ->setChildNameServer($childNameServer)
            ->setIpAddressList($ipAddressList);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\AddChildNameServerRequest
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
     * Get ChildNameServer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getChildNameServer(): ?string
    {
        return $this->ChildNameServer ?? null;
    }
    /**
     * Set ChildNameServer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $childNameServer
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\AddChildNameServerRequest
     */
    public function setChildNameServer(?string $childNameServer = null): self
    {
        // validation for constraint: string
        if (!is_null($childNameServer) && !is_string($childNameServer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($childNameServer, true), gettype($childNameServer)), __LINE__);
        }
        if (is_null($childNameServer) || (is_array($childNameServer) && empty($childNameServer))) {
            unset($this->ChildNameServer);
        } else {
            $this->ChildNameServer = $childNameServer;
        }
        
        return $this;
    }
    /**
     * Get IpAddressList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    public function getIpAddressList(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring
    {
        return $this->IpAddressList ?? null;
    }
    /**
     * Set IpAddressList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $ipAddressList
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\AddChildNameServerRequest
     */
    public function setIpAddressList(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $ipAddressList = null): self
    {
        if (is_null($ipAddressList) || (is_array($ipAddressList) && empty($ipAddressList))) {
            unset($this->IpAddressList);
        } else {
            $this->IpAddressList = $ipAddressList;
        }
        
        return $this;
    }
}
