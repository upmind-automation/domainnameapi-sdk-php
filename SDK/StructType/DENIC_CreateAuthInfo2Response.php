<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DENIC_CreateAuthInfo2Response StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DENIC_CreateAuthInfo2Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DENIC_CreateAuthInfo2Response extends BaseMethodResponse
{
    /**
     * The DENIC_CreateAuthInfo2Result
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo2Response|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo2Response $DENIC_CreateAuthInfo2Result = null;
    /**
     * Constructor method for DENIC_CreateAuthInfo2Response
     * @uses DENIC_CreateAuthInfo2Response::setDENIC_CreateAuthInfo2Result()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo2Response $dENIC_CreateAuthInfo2Result
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo2Response $dENIC_CreateAuthInfo2Result = null)
    {
        $this
            ->setDENIC_CreateAuthInfo2Result($dENIC_CreateAuthInfo2Result);
    }
    /**
     * Get DENIC_CreateAuthInfo2Result value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo2Response|null
     */
    public function getDENIC_CreateAuthInfo2Result(): ?\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo2Response
    {
        return $this->DENIC_CreateAuthInfo2Result ?? null;
    }
    /**
     * Set DENIC_CreateAuthInfo2Result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo2Response $dENIC_CreateAuthInfo2Result
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo2Response
     */
    public function setDENIC_CreateAuthInfo2Result(?\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo2Response $dENIC_CreateAuthInfo2Result = null): self
    {
        if (is_null($dENIC_CreateAuthInfo2Result) || (is_array($dENIC_CreateAuthInfo2Result) && empty($dENIC_CreateAuthInfo2Result))) {
            unset($this->DENIC_CreateAuthInfo2Result);
        } else {
            $this->DENIC_CreateAuthInfo2Result = $dENIC_CreateAuthInfo2Result;
        }
        
        return $this;
    }
}
