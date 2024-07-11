<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyNameServerResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyNameServerResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ModifyNameServerResponse extends BaseMethodResponse
{
    /**
     * The ModifyNameServerResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ModifyNameServerResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyNameServerResponse $ModifyNameServerResult = null;
    /**
     * Constructor method for ModifyNameServerResponse
     * @uses ModifyNameServerResponse::setModifyNameServerResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyNameServerResponse $modifyNameServerResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyNameServerResponse $modifyNameServerResult = null)
    {
        $this
            ->setModifyNameServerResult($modifyNameServerResult);
    }
    /**
     * Get ModifyNameServerResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyNameServerResponse|null
     */
    public function getModifyNameServerResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyNameServerResponse
    {
        return $this->ModifyNameServerResult ?? null;
    }
    /**
     * Set ModifyNameServerResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyNameServerResponse $modifyNameServerResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyNameServerResponse
     */
    public function setModifyNameServerResult(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyNameServerResponse $modifyNameServerResult = null): self
    {
        if (is_null($modifyNameServerResult) || (is_array($modifyNameServerResult) && empty($modifyNameServerResult))) {
            unset($this->ModifyNameServerResult);
        } else {
            $this->ModifyNameServerResult = $modifyNameServerResult;
        }
        
        return $this;
    }
}
