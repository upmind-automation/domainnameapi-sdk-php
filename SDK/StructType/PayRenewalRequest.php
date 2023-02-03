<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PayRenewalRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PayRenewalRequest
 * @subpackage Structs
 */
class PayRenewalRequest extends BaseMethodRequest
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * The Period
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Period = null;
    /**
     * Constructor method for PayRenewalRequest
     * @uses PayRenewalRequest::setId()
     * @uses PayRenewalRequest::setPeriod()
     * @param int $id
     * @param int $period
     */
    public function __construct(?int $id = null, ?int $period = null)
    {
        $this
            ->setId($id)
            ->setPeriod($period);
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PayRenewalRequest
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get Period value
     * @return int|null
     */
    public function getPeriod(): ?int
    {
        return $this->Period;
    }
    /**
     * Set Period value
     * @param int $period
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PayRenewalRequest
     */
    public function setPeriod(?int $period = null): self
    {
        // validation for constraint: int
        if (!is_null($period) && !(is_int($period) || ctype_digit($period))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($period, true), gettype($period)), __LINE__);
        }
        $this->Period = $period;
        
        return $this;
    }
}
