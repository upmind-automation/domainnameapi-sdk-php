<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyAdditionalAttributesResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyAdditionalAttributesResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ModifyAdditionalAttributesResponse extends BaseMethodResponse
{
    /**
     * The ModifyAdditionalAttributesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ModifyAdditionalAttributesResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyAdditionalAttributesResponse $ModifyAdditionalAttributesResult = null;
    /**
     * Constructor method for ModifyAdditionalAttributesResponse
     * @uses ModifyAdditionalAttributesResponse::setModifyAdditionalAttributesResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyAdditionalAttributesResponse $modifyAdditionalAttributesResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyAdditionalAttributesResponse $modifyAdditionalAttributesResult = null)
    {
        $this
            ->setModifyAdditionalAttributesResult($modifyAdditionalAttributesResult);
    }
    /**
     * Get ModifyAdditionalAttributesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyAdditionalAttributesResponse|null
     */
    public function getModifyAdditionalAttributesResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyAdditionalAttributesResponse
    {
        return $this->ModifyAdditionalAttributesResult ?? null;
    }
    /**
     * Set ModifyAdditionalAttributesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyAdditionalAttributesResponse $modifyAdditionalAttributesResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyAdditionalAttributesResponse
     */
    public function setModifyAdditionalAttributesResult(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyAdditionalAttributesResponse $modifyAdditionalAttributesResult = null): self
    {
        if (is_null($modifyAdditionalAttributesResult) || (is_array($modifyAdditionalAttributesResult) && empty($modifyAdditionalAttributesResult))) {
            unset($this->ModifyAdditionalAttributesResult);
        } else {
            $this->ModifyAdditionalAttributesResult = $modifyAdditionalAttributesResult;
        }
        
        return $this;
    }
}
