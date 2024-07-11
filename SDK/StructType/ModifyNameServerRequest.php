<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyNameServerRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyNameServerRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ModifyNameServerRequest extends BaseMethodRequest
{
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
     * The NameServerList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $NameServerList = null;
    /**
     * Constructor method for ModifyNameServerRequest
     * @uses ModifyNameServerRequest::setId()
     * @uses ModifyNameServerRequest::setDomainName()
     * @uses ModifyNameServerRequest::setNameServerList()
     * @param int $id
     * @param string $domainName
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $nameServerList
     */
    public function __construct(?int $id = null, ?string $domainName = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $nameServerList = null)
    {
        $this
            ->setId($id)
            ->setDomainName($domainName)
            ->setNameServerList($nameServerList);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyNameServerRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyNameServerRequest
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
     * Get NameServerList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    public function getNameServerList(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring
    {
        return $this->NameServerList ?? null;
    }
    /**
     * Set NameServerList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $nameServerList
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyNameServerRequest
     */
    public function setNameServerList(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $nameServerList = null): self
    {
        if (is_null($nameServerList) || (is_array($nameServerList) && empty($nameServerList))) {
            unset($this->NameServerList);
        } else {
            $this->NameServerList = $nameServerList;
        }
        
        return $this;
    }
}
