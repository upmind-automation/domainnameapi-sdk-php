<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RenewResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RenewResponse
 * @subpackage Structs
 */
class RenewResponse extends BaseMethodResponse
{
    /**
     * The RenewResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\RenewResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\RenewResponse $RenewResult = null;
    /**
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExpirationDate = null;
    /**
     * Constructor method for RenewResponse
     * @uses RenewResponse::setRenewResult()
     * @uses RenewResponse::setExpirationDate()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\RenewResponse $renewResult
     * @param string $expirationDate
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\RenewResponse $renewResult = null, ?string $expirationDate = null)
    {
        $this
            ->setRenewResult($renewResult)
            ->setExpirationDate($expirationDate);
    }
    /**
     * Get RenewResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RenewResponse|null
     */
    public function getRenewResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\RenewResponse
    {
        return isset($this->RenewResult) ? $this->RenewResult : null;
    }
    /**
     * Set RenewResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\RenewResponse $renewResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RenewResponse
     */
    public function setRenewResult(?\Upmind\DomainNameApiSdk\SDK\StructType\RenewResponse $renewResult = null): self
    {
        if (is_null($renewResult) || (is_array($renewResult) && empty($renewResult))) {
            unset($this->RenewResult);
        } else {
            $this->RenewResult = $renewResult;
        }
        
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RenewResponse
     */
    public function setExpirationDate(?string $expirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        
        return $this;
    }
}
