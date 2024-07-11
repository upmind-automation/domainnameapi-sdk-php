<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDomainAvailabilityInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDomainAvailabilityInfo
 * @subpackage Arrays
 */
class ArrayOfDomainAvailabilityInfo extends AbstractStructArrayBase
{
    /**
     * The DomainAvailabilityInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo[]|null
     */
    protected ?array $DomainAvailabilityInfo = null;
    /**
     * Constructor method for ArrayOfDomainAvailabilityInfo
     * @uses ArrayOfDomainAvailabilityInfo::setDomainAvailabilityInfo()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo[] $domainAvailabilityInfo
     */
    public function __construct(?array $domainAvailabilityInfo = null)
    {
        $this
            ->setDomainAvailabilityInfo($domainAvailabilityInfo);
    }
    /**
     * Get DomainAvailabilityInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo[]|null
     */
    public function getDomainAvailabilityInfo(): ?array
    {
        return $this->DomainAvailabilityInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDomainAvailabilityInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDomainAvailabilityInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDomainAvailabilityInfoForArrayConstraintFromSetDomainAvailabilityInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDomainAvailabilityInfoDomainAvailabilityInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfDomainAvailabilityInfoDomainAvailabilityInfoItem instanceof \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo) {
                $invalidValues[] = is_object($arrayOfDomainAvailabilityInfoDomainAvailabilityInfoItem) ? get_class($arrayOfDomainAvailabilityInfoDomainAvailabilityInfoItem) : sprintf('%s(%s)', gettype($arrayOfDomainAvailabilityInfoDomainAvailabilityInfoItem), var_export($arrayOfDomainAvailabilityInfoDomainAvailabilityInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DomainAvailabilityInfo property can only contain items of type \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DomainAvailabilityInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo[] $domainAvailabilityInfo
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainAvailabilityInfo
     */
    public function setDomainAvailabilityInfo(?array $domainAvailabilityInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($domainAvailabilityInfoArrayErrorMessage = self::validateDomainAvailabilityInfoForArrayConstraintFromSetDomainAvailabilityInfo($domainAvailabilityInfo))) {
            throw new InvalidArgumentException($domainAvailabilityInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($domainAvailabilityInfo) || (is_array($domainAvailabilityInfo) && empty($domainAvailabilityInfo))) {
            unset($this->DomainAvailabilityInfo);
        } else {
            $this->DomainAvailabilityInfo = $domainAvailabilityInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo|null
     */
    public function current(): ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo|null
     */
    public function item($index): ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo|null
     */
    public function first(): ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo|null
     */
    public function last(): ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo|null
     */
    public function offsetGet($offset): ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo $item
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainAvailabilityInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo) {
            throw new InvalidArgumentException(sprintf('The DomainAvailabilityInfo property can only contain items of type \Upmind\DomainNameApiSdk\SDK\StructType\DomainAvailabilityInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DomainAvailabilityInfo
     */
    public function getAttributeName(): string
    {
        return 'DomainAvailabilityInfo';
    }
}
