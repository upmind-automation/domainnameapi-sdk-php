<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DENIC_CreateAuthInfo2Request StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DENIC_CreateAuthInfo2Request
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DENIC_CreateAuthInfo2Request extends BaseMethodRequest
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * Constructor method for DENIC_CreateAuthInfo2Request
     * @uses DENIC_CreateAuthInfo2Request::setId()
     * @param int $id
     */
    public function __construct(?int $id = null)
    {
        $this
            ->setId($id);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo2Request
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
}
