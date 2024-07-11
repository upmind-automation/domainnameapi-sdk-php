<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyChildNameServerResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyChildNameServerResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ModifyChildNameServerResponse extends BaseMethodResponse
{
    /**
     * The ModifyChildNameServerResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ModifyChildNameServerResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyChildNameServerResponse $ModifyChildNameServerResult = null;
    /**
     * Constructor method for ModifyChildNameServerResponse
     * @uses ModifyChildNameServerResponse::setModifyChildNameServerResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyChildNameServerResponse $modifyChildNameServerResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyChildNameServerResponse $modifyChildNameServerResult = null)
    {
        $this
            ->setModifyChildNameServerResult($modifyChildNameServerResult);
    }
    /**
     * Get ModifyChildNameServerResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyChildNameServerResponse|null
     */
    public function getModifyChildNameServerResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyChildNameServerResponse
    {
        return $this->ModifyChildNameServerResult ?? null;
    }
    /**
     * Set ModifyChildNameServerResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyChildNameServerResponse $modifyChildNameServerResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyChildNameServerResponse
     */
    public function setModifyChildNameServerResult(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyChildNameServerResponse $modifyChildNameServerResult = null): self
    {
        if (is_null($modifyChildNameServerResult) || (is_array($modifyChildNameServerResult) && empty($modifyChildNameServerResult))) {
            unset($this->ModifyChildNameServerResult);
        } else {
            $this->ModifyChildNameServerResult = $modifyChildNameServerResult;
        }
        
        return $this;
    }
}
