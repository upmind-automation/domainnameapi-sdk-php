<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddChildNameServerResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AddChildNameServerResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddChildNameServerResponse extends BaseMethodResponse
{
    /**
     * The AddChildNameServerResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\AddChildNameServerResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\AddChildNameServerResponse $AddChildNameServerResult = null;
    /**
     * Constructor method for AddChildNameServerResponse
     * @uses AddChildNameServerResponse::setAddChildNameServerResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\AddChildNameServerResponse $addChildNameServerResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\AddChildNameServerResponse $addChildNameServerResult = null)
    {
        $this
            ->setAddChildNameServerResult($addChildNameServerResult);
    }
    /**
     * Get AddChildNameServerResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\AddChildNameServerResponse|null
     */
    public function getAddChildNameServerResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\AddChildNameServerResponse
    {
        return $this->AddChildNameServerResult ?? null;
    }
    /**
     * Set AddChildNameServerResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\AddChildNameServerResponse $addChildNameServerResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\AddChildNameServerResponse
     */
    public function setAddChildNameServerResult(?\Upmind\DomainNameApiSdk\SDK\StructType\AddChildNameServerResponse $addChildNameServerResult = null): self
    {
        if (is_null($addChildNameServerResult) || (is_array($addChildNameServerResult) && empty($addChildNameServerResult))) {
            unset($this->AddChildNameServerResult);
        } else {
            $this->AddChildNameServerResult = $addChildNameServerResult;
        }
        
        return $this;
    }
}
