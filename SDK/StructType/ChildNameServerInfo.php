<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChildNameServerInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ChildNameServerInfo
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ChildNameServerInfo extends AbstractStructBase
{
    /**
     * The ChildNameServer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ChildNameServer = null;
    /**
     * The IpAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $IpAddress = null;
    /**
     * Constructor method for ChildNameServerInfo
     * @uses ChildNameServerInfo::setChildNameServer()
     * @uses ChildNameServerInfo::setIpAddress()
     * @param string $childNameServer
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $ipAddress
     */
    public function __construct(?string $childNameServer = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $ipAddress = null)
    {
        $this
            ->setChildNameServer($childNameServer)
            ->setIpAddress($ipAddress);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo
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
     * Get IpAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    public function getIpAddress(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring
    {
        return $this->IpAddress ?? null;
    }
    /**
     * Set IpAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $ipAddress
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo
     */
    public function setIpAddress(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $ipAddress = null): self
    {
        if (is_null($ipAddress) || (is_array($ipAddress) && empty($ipAddress))) {
            unset($this->IpAddress);
        } else {
            $this->IpAddress = $ipAddress;
        }
        
        return $this;
    }
}
