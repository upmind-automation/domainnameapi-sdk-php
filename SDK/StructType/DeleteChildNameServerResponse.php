<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteChildNameServerResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DeleteChildNameServerResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteChildNameServerResponse extends BaseMethodResponse
{
    /**
     * The DeleteChildNameServerResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\DeleteChildNameServerResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\DeleteChildNameServerResponse $DeleteChildNameServerResult = null;
    /**
     * Constructor method for DeleteChildNameServerResponse
     * @uses DeleteChildNameServerResponse::setDeleteChildNameServerResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DeleteChildNameServerResponse $deleteChildNameServerResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\DeleteChildNameServerResponse $deleteChildNameServerResult = null)
    {
        $this
            ->setDeleteChildNameServerResult($deleteChildNameServerResult);
    }
    /**
     * Get DeleteChildNameServerResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DeleteChildNameServerResponse|null
     */
    public function getDeleteChildNameServerResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\DeleteChildNameServerResponse
    {
        return $this->DeleteChildNameServerResult ?? null;
    }
    /**
     * Set DeleteChildNameServerResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DeleteChildNameServerResponse $deleteChildNameServerResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DeleteChildNameServerResponse
     */
    public function setDeleteChildNameServerResult(?\Upmind\DomainNameApiSdk\SDK\StructType\DeleteChildNameServerResponse $deleteChildNameServerResult = null): self
    {
        if (is_null($deleteChildNameServerResult) || (is_array($deleteChildNameServerResult) && empty($deleteChildNameServerResult))) {
            unset($this->DeleteChildNameServerResult);
        } else {
            $this->DeleteChildNameServerResult = $deleteChildNameServerResult;
        }
        
        return $this;
    }
}
