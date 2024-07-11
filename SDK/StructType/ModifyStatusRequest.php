<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyStatusRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyStatusRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ModifyStatusRequest extends BaseMethodRequest
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
     * The StatusToAddList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $StatusToAddList = null;
    /**
     * The StatusToRemoveList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $StatusToRemoveList = null;
    /**
     * Constructor method for ModifyStatusRequest
     * @uses ModifyStatusRequest::setId()
     * @uses ModifyStatusRequest::setDomainName()
     * @uses ModifyStatusRequest::setStatusToAddList()
     * @uses ModifyStatusRequest::setStatusToRemoveList()
     * @param int $id
     * @param string $domainName
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $statusToAddList
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $statusToRemoveList
     */
    public function __construct(?int $id = null, ?string $domainName = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $statusToAddList = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $statusToRemoveList = null)
    {
        $this
            ->setId($id)
            ->setDomainName($domainName)
            ->setStatusToAddList($statusToAddList)
            ->setStatusToRemoveList($statusToRemoveList);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatusRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatusRequest
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
     * Get StatusToAddList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    public function getStatusToAddList(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring
    {
        return $this->StatusToAddList ?? null;
    }
    /**
     * Set StatusToAddList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $statusToAddList
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatusRequest
     */
    public function setStatusToAddList(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $statusToAddList = null): self
    {
        if (is_null($statusToAddList) || (is_array($statusToAddList) && empty($statusToAddList))) {
            unset($this->StatusToAddList);
        } else {
            $this->StatusToAddList = $statusToAddList;
        }
        
        return $this;
    }
    /**
     * Get StatusToRemoveList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring|null
     */
    public function getStatusToRemoveList(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring
    {
        return $this->StatusToRemoveList ?? null;
    }
    /**
     * Set StatusToRemoveList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $statusToRemoveList
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatusRequest
     */
    public function setStatusToRemoveList(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfstring $statusToRemoveList = null): self
    {
        if (is_null($statusToRemoveList) || (is_array($statusToRemoveList) && empty($statusToRemoveList))) {
            unset($this->StatusToRemoveList);
        } else {
            $this->StatusToRemoveList = $statusToRemoveList;
        }
        
        return $this;
    }
}
