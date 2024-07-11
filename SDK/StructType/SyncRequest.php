<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SyncRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SyncRequest extends BaseMethodRequest
{
    /**
     * The ExpirationDay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ExpirationDay = null;
    /**
     * The ExpirationMonth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ExpirationMonth = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * The DomainName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DomainName = null;
    /**
     * Constructor method for SyncRequest
     * @uses SyncRequest::setExpirationDay()
     * @uses SyncRequest::setExpirationMonth()
     * @uses SyncRequest::setId()
     * @uses SyncRequest::setDomainName()
     * @param int $expirationDay
     * @param int $expirationMonth
     * @param int $id
     * @param string $domainName
     */
    public function __construct(?int $expirationDay = null, ?int $expirationMonth = null, ?int $id = null, ?string $domainName = null)
    {
        $this
            ->setExpirationDay($expirationDay)
            ->setExpirationMonth($expirationMonth)
            ->setId($id)
            ->setDomainName($domainName);
    }
    /**
     * Get ExpirationDay value
     * @return int|null
     */
    public function getExpirationDay(): ?int
    {
        return $this->ExpirationDay;
    }
    /**
     * Set ExpirationDay value
     * @param int $expirationDay
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SyncRequest
     */
    public function setExpirationDay(?int $expirationDay = null): self
    {
        // validation for constraint: int
        if (!is_null($expirationDay) && !(is_int($expirationDay) || ctype_digit($expirationDay))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expirationDay, true), gettype($expirationDay)), __LINE__);
        }
        $this->ExpirationDay = $expirationDay;
        
        return $this;
    }
    /**
     * Get ExpirationMonth value
     * @return int|null
     */
    public function getExpirationMonth(): ?int
    {
        return $this->ExpirationMonth;
    }
    /**
     * Set ExpirationMonth value
     * @param int $expirationMonth
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SyncRequest
     */
    public function setExpirationMonth(?int $expirationMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($expirationMonth) && !(is_int($expirationMonth) || ctype_digit($expirationMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expirationMonth, true), gettype($expirationMonth)), __LINE__);
        }
        $this->ExpirationMonth = $expirationMonth;
        
        return $this;
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SyncRequest
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
     * Get DomainName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDomainName(): ?string
    {
        return $this->DomainName ?? null;
    }
    /**
     * Set DomainName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $domainName
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SyncRequest
     */
    public function setDomainName(?string $domainName = null): self
    {
        // validation for constraint: string
        if (!is_null($domainName) && !is_string($domainName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domainName, true), gettype($domainName)), __LINE__);
        }
        if (is_null($domainName) || (is_array($domainName) && empty($domainName))) {
            unset($this->DomainName);
        } else {
            $this->DomainName = $domainName;
        }
        
        return $this;
    }
}
