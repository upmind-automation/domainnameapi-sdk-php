<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResendOutgoingTransferFOAMailResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ResendOutgoingTransferFOAMailResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResendOutgoingTransferFOAMailResponse extends BaseMethodResponse
{
    /**
     * The ResendOutgoingTransferFOAMailResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ResendOutgoingTransferFOAMailResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ResendOutgoingTransferFOAMailResponse $ResendOutgoingTransferFOAMailResult = null;
    /**
     * Constructor method for ResendOutgoingTransferFOAMailResponse
     * @uses ResendOutgoingTransferFOAMailResponse::setResendOutgoingTransferFOAMailResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ResendOutgoingTransferFOAMailResponse $resendOutgoingTransferFOAMailResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ResendOutgoingTransferFOAMailResponse $resendOutgoingTransferFOAMailResult = null)
    {
        $this
            ->setResendOutgoingTransferFOAMailResult($resendOutgoingTransferFOAMailResult);
    }
    /**
     * Get ResendOutgoingTransferFOAMailResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ResendOutgoingTransferFOAMailResponse|null
     */
    public function getResendOutgoingTransferFOAMailResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ResendOutgoingTransferFOAMailResponse
    {
        return $this->ResendOutgoingTransferFOAMailResult ?? null;
    }
    /**
     * Set ResendOutgoingTransferFOAMailResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ResendOutgoingTransferFOAMailResponse $resendOutgoingTransferFOAMailResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ResendOutgoingTransferFOAMailResponse
     */
    public function setResendOutgoingTransferFOAMailResult(?\Upmind\DomainNameApiSdk\SDK\StructType\ResendOutgoingTransferFOAMailResponse $resendOutgoingTransferFOAMailResult = null): self
    {
        if (is_null($resendOutgoingTransferFOAMailResult) || (is_array($resendOutgoingTransferFOAMailResult) && empty($resendOutgoingTransferFOAMailResult))) {
            unset($this->ResendOutgoingTransferFOAMailResult);
        } else {
            $this->ResendOutgoingTransferFOAMailResult = $resendOutgoingTransferFOAMailResult;
        }
        
        return $this;
    }
}
