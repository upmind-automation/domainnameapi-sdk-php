<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckAvailabilityIdnRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CheckAvailabilityIdnRequest
 * @subpackage Structs
 */
class CheckAvailabilityIdnRequest extends BaseMethodRequest
{
    /**
     * The DomainNameList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $DomainNameList = null;
    /**
     * The IdnLanguageCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $IdnLanguageCode = null;
    /**
     * The Tld
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Tld = null;
    /**
     * Constructor method for CheckAvailabilityIdnRequest
     * @uses CheckAvailabilityIdnRequest::setDomainNameList()
     * @uses CheckAvailabilityIdnRequest::setIdnLanguageCode()
     * @uses CheckAvailabilityIdnRequest::setTld()
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $domainNameList
     * @param string $idnLanguageCode
     * @param string $tld
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $domainNameList = null, ?string $idnLanguageCode = null, ?string $tld = null)
    {
        $this
            ->setDomainNameList($domainNameList)
            ->setIdnLanguageCode($idnLanguageCode)
            ->setTld($tld);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdnRequest
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
     * Get IdnLanguageCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIdnLanguageCode(): ?string
    {
        return isset($this->IdnLanguageCode) ? $this->IdnLanguageCode : null;
    }
    /**
     * Set IdnLanguageCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $idnLanguageCode
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdnRequest
     */
    public function setIdnLanguageCode(?string $idnLanguageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($idnLanguageCode) && !is_string($idnLanguageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idnLanguageCode, true), gettype($idnLanguageCode)), __LINE__);
        }
        if (is_null($idnLanguageCode) || (is_array($idnLanguageCode) && empty($idnLanguageCode))) {
            unset($this->IdnLanguageCode);
        } else {
            $this->IdnLanguageCode = $idnLanguageCode;
        }
        
        return $this;
    }
    /**
     * Get Tld value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTld(): ?string
    {
        return isset($this->Tld) ? $this->Tld : null;
    }
    /**
     * Set Tld value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tld
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdnRequest
     */
    public function setTld(?string $tld = null): self
    {
        // validation for constraint: string
        if (!is_null($tld) && !is_string($tld)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tld, true), gettype($tld)), __LINE__);
        }
        if (is_null($tld) || (is_array($tld) && empty($tld))) {
            unset($this->Tld);
        } else {
            $this->Tld = $tld;
        }
        
        return $this;
    }
}
