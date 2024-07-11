<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResendIncomingTransferFOAMailResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ResendIncomingTransferFOAMailResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResendIncomingTransferFOAMailResponse extends BaseMethodResponse
{
    /**
     * The ResendIncomingTransferFOAMailResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ResendIncomingTransferFOAMailResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ResendIncomingTransferFOAMailResponse $ResendIncomingTransferFOAMailResult = null;
    /**
     * Constructor method for ResendIncomingTransferFOAMailResponse
     * @uses ResendIncomingTransferFOAMailResponse::setResendIncomingTransferFOAMailResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ResendIncomingTransferFOAMailResponse $resendIncomingTransferFOAMailResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ResendIncomingTransferFOAMailResponse $resendIncomingTransferFOAMailResult = null)
    {
        $this
            ->setResendIncomingTransferFOAMailResult($resendIncomingTransferFOAMailResult);
    }
    /**
     * Get ResendIncomingTransferFOAMailResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ResendIncomingTransferFOAMailResponse|null
     */
    public function getResendIncomingTransferFOAMailResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ResendIncomingTransferFOAMailResponse
    {
        return $this->ResendIncomingTransferFOAMailResult ?? null;
    }
    /**
     * Set ResendIncomingTransferFOAMailResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ResendIncomingTransferFOAMailResponse $resendIncomingTransferFOAMailResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ResendIncomingTransferFOAMailResponse
     */
    public function setResendIncomingTransferFOAMailResult(?\Upmind\DomainNameApiSdk\SDK\StructType\ResendIncomingTransferFOAMailResponse $resendIncomingTransferFOAMailResult = null): self
    {
        if (is_null($resendIncomingTransferFOAMailResult) || (is_array($resendIncomingTransferFOAMailResult) && empty($resendIncomingTransferFOAMailResult))) {
            unset($this->ResendIncomingTransferFOAMailResult);
        } else {
            $this->ResendIncomingTransferFOAMailResult = $resendIncomingTransferFOAMailResult;
        }
        
        return $this;
    }
}
