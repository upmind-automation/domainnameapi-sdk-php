<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetForwardResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetForwardResponse extends AbstractStructBase
{
    /**
     * The GetForwardResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $GetForwardResult = null;
    /**
     * Constructor method for GetForwardResponse
     * @uses GetForwardResponse::setGetForwardResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $getForwardResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $getForwardResult = null)
    {
        $this
            ->setGetForwardResult($getForwardResult);
    }
    /**
     * Get GetForwardResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse|null
     */
    public function getGetForwardResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse
    {
        return $this->GetForwardResult ?? null;
    }
    /**
     * Set GetForwardResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $getForwardResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetForwardResponse
     */
    public function setGetForwardResult(?\Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse $getForwardResult = null): self
    {
        if (is_null($getForwardResult) || (is_array($getForwardResult) && empty($getForwardResult))) {
            unset($this->GetForwardResult);
        } else {
            $this->GetForwardResult = $getForwardResult;
        }
        
        return $this;
    }
}
