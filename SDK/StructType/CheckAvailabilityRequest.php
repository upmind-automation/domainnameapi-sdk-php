<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckAvailabilityRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CheckAvailabilityRequest
 * @subpackage Structs
 */
class CheckAvailabilityRequest extends BaseMethodRequest
{
    /**
     * The Commad
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Commad = null;
    /**
     * The DomainNameList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $DomainNameList = null;
    /**
     * The Period
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Period = null;
    /**
     * The TldList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $TldList = null;
    /**
     * Constructor method for CheckAvailabilityRequest
     * @uses CheckAvailabilityRequest::setCommad()
     * @uses CheckAvailabilityRequest::setDomainNameList()
     * @uses CheckAvailabilityRequest::setPeriod()
     * @uses CheckAvailabilityRequest::setTldList()
     * @param string $commad
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $domainNameList
     * @param int $period
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $tldList
     */
    public function __construct(?string $commad = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $domainNameList = null, ?int $period = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $tldList = null)
    {
        $this
            ->setCommad($commad)
            ->setDomainNameList($domainNameList)
            ->setPeriod($period)
            ->setTldList($tldList);
    }
    /**
     * Get Commad value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCommad(): ?string
    {
        return isset($this->Commad) ? $this->Commad : null;
    }
    /**
     * Set Commad value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $commad
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityRequest
     */
    public function setCommad(?string $commad = null): self
    {
        // validation for constraint: string
        if (!is_null($commad) && !is_string($commad)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commad, true), gettype($commad)), __LINE__);
        }
        if (is_null($commad) || (is_array($commad) && empty($commad))) {
            unset($this->Commad);
        } else {
            $this->Commad = $commad;
        }
        
        return $this;
    }
    /**
     * Get DomainNameList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    public function getDomainNameList(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring
    {
        return isset($this->DomainNameList) ? $this->DomainNameList : null;
    }
    /**
     * Set DomainNameList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $domainNameList
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityRequest
     */
    public function setDomainNameList(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $domainNameList = null): self
    {
        if (is_null($domainNameList) || (is_array($domainNameList) && empty($domainNameList))) {
            unset($this->DomainNameList);
        } else {
            $this->DomainNameList = $domainNameList;
        }
        
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityRequest
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
    /**
     * Get TldList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    public function getTldList(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring
    {
        return isset($this->TldList) ? $this->TldList : null;
    }
    /**
     * Set TldList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $tldList
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityRequest
     */
    public function setTldList(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $tldList = null): self
    {
        if (is_null($tldList) || (is_array($tldList) && empty($tldList))) {
            unset($this->TldList);
        } else {
            $this->TldList = $tldList;
        }
        
        return $this;
    }
}
