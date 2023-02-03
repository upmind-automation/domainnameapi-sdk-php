<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetChildNameServerRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetChildNameServerRequest
 * @subpackage Structs
 */
class GetChildNameServerRequest extends BaseMethodRequest
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
     * Constructor method for GetChildNameServerRequest
     * @uses GetChildNameServerRequest::setChildNameServer()
     * @param string $childNameServer
     */
    public function __construct(?string $childNameServer = null)
    {
        $this
            ->setChildNameServer($childNameServer);
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
        return isset($this->ChildNameServer) ? $this->ChildNameServer : null;
    }
    /**
     * Set ChildNameServer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $childNameServer
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServerRequest
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
}
