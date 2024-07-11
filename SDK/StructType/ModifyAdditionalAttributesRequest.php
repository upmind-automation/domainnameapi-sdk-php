<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyAdditionalAttributesRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyAdditionalAttributesRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ModifyAdditionalAttributesRequest extends BaseMethodRequest
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * The AdditionalAttributes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $AdditionalAttributes = null;
    /**
     * Constructor method for ModifyAdditionalAttributesRequest
     * @uses ModifyAdditionalAttributesRequest::setId()
     * @uses ModifyAdditionalAttributesRequest::setAdditionalAttributes()
     * @param int $id
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes
     */
    public function __construct(?int $id = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes = null)
    {
        $this
            ->setId($id)
            ->setAdditionalAttributes($additionalAttributes);
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyAdditionalAttributesRequest
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
     * Get AdditionalAttributes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring|null
     */
    public function getAdditionalAttributes(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring
    {
        return $this->AdditionalAttributes ?? null;
    }
    /**
     * Set AdditionalAttributes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyAdditionalAttributesRequest
     */
    public function setAdditionalAttributes(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring $additionalAttributes = null): self
    {
        if (is_null($additionalAttributes) || (is_array($additionalAttributes) && empty($additionalAttributes))) {
            unset($this->AdditionalAttributes);
        } else {
            $this->AdditionalAttributes = $additionalAttributes;
        }
        
        return $this;
    }
}
