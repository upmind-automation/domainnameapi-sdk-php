<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyContactsResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyContactsResponse
 * @subpackage Structs
 */
class ModifyContactsResponse extends BaseMethodResponse
{
    /**
     * The ModifyContactsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse $ModifyContactsResult = null;
    /**
     * Constructor method for ModifyContactsResponse
     * @uses ModifyContactsResponse::setModifyContactsResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse $modifyContactsResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse $modifyContactsResult = null)
    {
        $this
            ->setModifyContactsResult($modifyContactsResult);
    }
    /**
     * Get ModifyContactsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse|null
     */
    public function getModifyContactsResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse
    {
        return isset($this->ModifyContactsResult) ? $this->ModifyContactsResult : null;
    }
    /**
     * Set ModifyContactsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse $modifyContactsResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse
     */
    public function setModifyContactsResult(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse $modifyContactsResult = null): self
    {
        if (is_null($modifyContactsResult) || (is_array($modifyContactsResult) && empty($modifyContactsResult))) {
            unset($this->ModifyContactsResult);
        } else {
            $this->ModifyContactsResult = $modifyContactsResult;
        }
        
        return $this;
    }
}
