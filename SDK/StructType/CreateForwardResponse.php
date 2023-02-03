<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateForwardResponse StructType
 * @subpackage Structs
 */
class CreateForwardResponse extends AbstractStructBase
{
    /**
     * The CreateForwardResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $CreateForwardResult = null;
    /**
     * Constructor method for CreateForwardResponse
     * @uses CreateForwardResponse::setCreateForwardResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $createForwardResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $createForwardResult = null)
    {
        $this
            ->setCreateForwardResult($createForwardResult);
    }
    /**
     * Get CreateForwardResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse|null
     */
    public function getCreateForwardResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse
    {
        return isset($this->CreateForwardResult) ? $this->CreateForwardResult : null;
    }
    /**
     * Set CreateForwardResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $createForwardResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CreateForwardResponse
     */
    public function setCreateForwardResult(?\Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $createForwardResult = null): self
    {
        if (is_null($createForwardResult) || (is_array($createForwardResult) && empty($createForwardResult))) {
            unset($this->CreateForwardResult);
        } else {
            $this->CreateForwardResult = $createForwardResult;
        }
        
        return $this;
    }
}
