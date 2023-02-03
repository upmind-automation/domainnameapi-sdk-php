<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrentBalanceRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetCurrentBalanceRequest
 * @subpackage Structs
 */
class GetCurrentBalanceRequest extends BaseMethodRequest
{
    /**
     * The CurrencyId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CurrencyId = null;
    /**
     * Constructor method for GetCurrentBalanceRequest
     * @uses GetCurrentBalanceRequest::setCurrencyId()
     * @param int $currencyId
     */
    public function __construct(?int $currencyId = null)
    {
        $this
            ->setCurrencyId($currencyId);
    }
    /**
     * Get CurrencyId value
     * @return int|null
     */
    public function getCurrencyId(): ?int
    {
        return $this->CurrencyId;
    }
    /**
     * Set CurrencyId value
     * @param int $currencyId
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetCurrentBalanceRequest
     */
    public function setCurrencyId(?int $currencyId = null): self
    {
        // validation for constraint: int
        if (!is_null($currencyId) && !(is_int($currencyId) || ctype_digit($currencyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($currencyId, true), gettype($currencyId)), __LINE__);
        }
        $this->CurrencyId = $currencyId;
        
        return $this;
    }
}
