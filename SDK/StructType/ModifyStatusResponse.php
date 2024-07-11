<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyStatusResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyStatusResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ModifyStatusResponse extends BaseMethodResponse
{
    /**
     * The ModifyStatusResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatusResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatusResponse $ModifyStatusResult = null;
    /**
     * Constructor method for ModifyStatusResponse
     * @uses ModifyStatusResponse::setModifyStatusResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatusResponse $modifyStatusResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatusResponse $modifyStatusResult = null)
    {
        $this
            ->setModifyStatusResult($modifyStatusResult);
    }
    /**
     * Get ModifyStatusResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatusResponse|null
     */
    public function getModifyStatusResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatusResponse
    {
        return $this->ModifyStatusResult ?? null;
    }
    /**
     * Set ModifyStatusResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatusResponse $modifyStatusResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatusResponse
     */
    public function setModifyStatusResult(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatusResponse $modifyStatusResult = null): self
    {
        if (is_null($modifyStatusResult) || (is_array($modifyStatusResult) && empty($modifyStatusResult))) {
            unset($this->ModifyStatusResult);
        } else {
            $this->ModifyStatusResult = $modifyStatusResult;
        }
        
        return $this;
    }
}
