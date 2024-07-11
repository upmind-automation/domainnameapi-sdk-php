<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteForwardResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteForwardResponse extends AbstractStructBase
{
    /**
     * The DeleteForwardResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $DeleteForwardResult = null;
    /**
     * Constructor method for DeleteForwardResponse
     * @uses DeleteForwardResponse::setDeleteForwardResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $deleteForwardResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $deleteForwardResult = null)
    {
        $this
            ->setDeleteForwardResult($deleteForwardResult);
    }
    /**
     * Get DeleteForwardResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse|null
     */
    public function getDeleteForwardResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse
    {
        return $this->DeleteForwardResult ?? null;
    }
    /**
     * Set DeleteForwardResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $deleteForwardResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DeleteForwardResponse
     */
    public function setDeleteForwardResult(?\Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $deleteForwardResult = null): self
    {
        if (is_null($deleteForwardResult) || (is_array($deleteForwardResult) && empty($deleteForwardResult))) {
            unset($this->DeleteForwardResult);
        } else {
            $this->DeleteForwardResult = $deleteForwardResult;
        }
        
        return $this;
    }
}
