<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetRenewalModeResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SetRenewalModeResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetRenewalModeResponse extends BaseMethodResponse
{
    /**
     * The SetRenewalModeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\SetRenewalModeResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\SetRenewalModeResponse $SetRenewalModeResult = null;
    /**
     * Constructor method for SetRenewalModeResponse
     * @uses SetRenewalModeResponse::setSetRenewalModeResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\SetRenewalModeResponse $setRenewalModeResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\SetRenewalModeResponse $setRenewalModeResult = null)
    {
        $this
            ->setSetRenewalModeResult($setRenewalModeResult);
    }
    /**
     * Get SetRenewalModeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SetRenewalModeResponse|null
     */
    public function getSetRenewalModeResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\SetRenewalModeResponse
    {
        return $this->SetRenewalModeResult ?? null;
    }
    /**
     * Set SetRenewalModeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\SetRenewalModeResponse $setRenewalModeResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SetRenewalModeResponse
     */
    public function setSetRenewalModeResult(?\Upmind\DomainNameApiSdk\SDK\StructType\SetRenewalModeResponse $setRenewalModeResult = null): self
    {
        if (is_null($setRenewalModeResult) || (is_array($setRenewalModeResult) && empty($setRenewalModeResult))) {
            unset($this->SetRenewalModeResult);
        } else {
            $this->SetRenewalModeResult = $setRenewalModeResult;
        }
        
        return $this;
    }
}
