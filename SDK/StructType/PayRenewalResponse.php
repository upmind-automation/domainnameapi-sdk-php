<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PayRenewalResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PayRenewalResponse
 * @subpackage Structs
 */
class PayRenewalResponse extends BaseMethodResponse
{
    /**
     * The PayRenewalResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\PayRenewalResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\PayRenewalResponse $PayRenewalResult = null;
    /**
     * Constructor method for PayRenewalResponse
     * @uses PayRenewalResponse::setPayRenewalResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\PayRenewalResponse $payRenewalResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\PayRenewalResponse $payRenewalResult = null)
    {
        $this
            ->setPayRenewalResult($payRenewalResult);
    }
    /**
     * Get PayRenewalResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PayRenewalResponse|null
     */
    public function getPayRenewalResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\PayRenewalResponse
    {
        return isset($this->PayRenewalResult) ? $this->PayRenewalResult : null;
    }
    /**
     * Set PayRenewalResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\PayRenewalResponse $payRenewalResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PayRenewalResponse
     */
    public function setPayRenewalResult(?\Upmind\DomainNameApiSdk\SDK\StructType\PayRenewalResponse $payRenewalResult = null): self
    {
        if (is_null($payRenewalResult) || (is_array($payRenewalResult) && empty($payRenewalResult))) {
            unset($this->PayRenewalResult);
        } else {
            $this->PayRenewalResult = $payRenewalResult;
        }
        
        return $this;
    }
}
