<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DENIC_DeleteAuthInfo1Response StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DENIC_DeleteAuthInfo1Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DENIC_DeleteAuthInfo1Response extends BaseMethodResponse
{
    /**
     * The DENIC_DeleteAuthInfo1Result
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_DeleteAuthInfo1Response|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_DeleteAuthInfo1Response $DENIC_DeleteAuthInfo1Result = null;
    /**
     * Constructor method for DENIC_DeleteAuthInfo1Response
     * @uses DENIC_DeleteAuthInfo1Response::setDENIC_DeleteAuthInfo1Result()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_DeleteAuthInfo1Response $dENIC_DeleteAuthInfo1Result
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_DeleteAuthInfo1Response $dENIC_DeleteAuthInfo1Result = null)
    {
        $this
            ->setDENIC_DeleteAuthInfo1Result($dENIC_DeleteAuthInfo1Result);
    }
    /**
     * Get DENIC_DeleteAuthInfo1Result value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_DeleteAuthInfo1Response|null
     */
    public function getDENIC_DeleteAuthInfo1Result(): ?\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_DeleteAuthInfo1Response
    {
        return $this->DENIC_DeleteAuthInfo1Result ?? null;
    }
    /**
     * Set DENIC_DeleteAuthInfo1Result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_DeleteAuthInfo1Response $dENIC_DeleteAuthInfo1Result
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_DeleteAuthInfo1Response
     */
    public function setDENIC_DeleteAuthInfo1Result(?\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_DeleteAuthInfo1Response $dENIC_DeleteAuthInfo1Result = null): self
    {
        if (is_null($dENIC_DeleteAuthInfo1Result) || (is_array($dENIC_DeleteAuthInfo1Result) && empty($dENIC_DeleteAuthInfo1Result))) {
            unset($this->DENIC_DeleteAuthInfo1Result);
        } else {
            $this->DENIC_DeleteAuthInfo1Result = $dENIC_DeleteAuthInfo1Result;
        }
        
        return $this;
    }
}
