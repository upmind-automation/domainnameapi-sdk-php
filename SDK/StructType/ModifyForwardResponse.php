<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyForwardResponse StructType
 * @subpackage Structs
 */
class ModifyForwardResponse extends AbstractStructBase
{
    /**
     * The ModifyForwardResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $ModifyForwardResult = null;
    /**
     * Constructor method for ModifyForwardResponse
     * @uses ModifyForwardResponse::setModifyForwardResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $modifyForwardResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $modifyForwardResult = null)
    {
        $this
            ->setModifyForwardResult($modifyForwardResult);
    }
    /**
     * Get ModifyForwardResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse|null
     */
    public function getModifyForwardResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse
    {
        return isset($this->ModifyForwardResult) ? $this->ModifyForwardResult : null;
    }
    /**
     * Set ModifyForwardResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $modifyForwardResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyForwardResponse
     */
    public function setModifyForwardResult(?\Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $modifyForwardResult = null): self
    {
        if (is_null($modifyForwardResult) || (is_array($modifyForwardResult) && empty($modifyForwardResult))) {
            unset($this->ModifyForwardResult);
        } else {
            $this->ModifyForwardResult = $modifyForwardResult;
        }
        
        return $this;
    }
}
