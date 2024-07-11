<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PushResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PushResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PushResponse extends BaseMethodResponse
{
    /**
     * The PushResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\PushResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\PushResponse $PushResult = null;
    /**
     * Constructor method for PushResponse
     * @uses PushResponse::setPushResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\PushResponse $pushResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\PushResponse $pushResult = null)
    {
        $this
            ->setPushResult($pushResult);
    }
    /**
     * Get PushResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PushResponse|null
     */
    public function getPushResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\PushResponse
    {
        return $this->PushResult ?? null;
    }
    /**
     * Set PushResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\PushResponse $pushResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PushResponse
     */
    public function setPushResult(?\Upmind\DomainNameApiSdk\SDK\StructType\PushResponse $pushResult = null): self
    {
        if (is_null($pushResult) || (is_array($pushResult) && empty($pushResult))) {
            unset($this->PushResult);
        } else {
            $this->PushResult = $pushResult;
        }
        
        return $this;
    }
}
