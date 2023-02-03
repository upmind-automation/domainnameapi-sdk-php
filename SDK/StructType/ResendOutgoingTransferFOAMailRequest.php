<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResendOutgoingTransferFOAMailRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ResendOutgoingTransferFOAMailRequest
 * @subpackage Structs
 */
class ResendOutgoingTransferFOAMailRequest extends BaseMethodRequest
{
    /**
     * The DomainName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DomainName = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * Constructor method for ResendOutgoingTransferFOAMailRequest
     * @uses ResendOutgoingTransferFOAMailRequest::setDomainName()
     * @uses ResendOutgoingTransferFOAMailRequest::setId()
     * @param string $domainName
     * @param int $id
     */
    public function __construct(?string $domainName = null, ?int $id = null)
    {
        $this
            ->setDomainName($domainName)
            ->setId($id);
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
        return isset($this->DomainName) ? $this->DomainName : null;
    }
    /**
     * Set DomainName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $domainName
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ResendOutgoingTransferFOAMailRequest
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
    /**
     * Get Id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getId(): ?int
    {
        return isset($this->Id) ? $this->Id : null;
    }
    /**
     * Set Id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $id
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ResendOutgoingTransferFOAMailRequest
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->Id);
        } else {
            $this->Id = $id;
        }
        
        return $this;
    }
}
