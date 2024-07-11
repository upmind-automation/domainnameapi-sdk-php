<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfChildNameServerInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfChildNameServerInfo
 * @subpackage Arrays
 */
class ArrayOfChildNameServerInfo extends AbstractStructArrayBase
{
    /**
     * The ChildNameServerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo[]|null
     */
    protected ?array $ChildNameServerInfo = null;
    /**
     * Constructor method for ArrayOfChildNameServerInfo
     * @uses ArrayOfChildNameServerInfo::setChildNameServerInfo()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo[] $childNameServerInfo
     */
    public function __construct(?array $childNameServerInfo = null)
    {
        $this
            ->setChildNameServerInfo($childNameServerInfo);
    }
    /**
     * Get ChildNameServerInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo[]|null
     */
    public function getChildNameServerInfo(): ?array
    {
        return $this->ChildNameServerInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setChildNameServerInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChildNameServerInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChildNameServerInfoForArrayConstraintFromSetChildNameServerInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfChildNameServerInfoChildNameServerInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfChildNameServerInfoChildNameServerInfoItem instanceof \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo) {
                $invalidValues[] = is_object($arrayOfChildNameServerInfoChildNameServerInfoItem) ? get_class($arrayOfChildNameServerInfoChildNameServerInfoItem) : sprintf('%s(%s)', gettype($arrayOfChildNameServerInfoChildNameServerInfoItem), var_export($arrayOfChildNameServerInfoChildNameServerInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ChildNameServerInfo property can only contain items of type \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ChildNameServerInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo[] $childNameServerInfo
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo
     */
    public function setChildNameServerInfo(?array $childNameServerInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($childNameServerInfoArrayErrorMessage = self::validateChildNameServerInfoForArrayConstraintFromSetChildNameServerInfo($childNameServerInfo))) {
            throw new InvalidArgumentException($childNameServerInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($childNameServerInfo) || (is_array($childNameServerInfo) && empty($childNameServerInfo))) {
            unset($this->ChildNameServerInfo);
        } else {
            $this->ChildNameServerInfo = $childNameServerInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo|null
     */
    public function current(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo|null
     */
    public function item($index): ?\Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo|null
     */
    public function first(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo|null
     */
    public function last(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo|null
     */
    public function offsetGet($offset): ?\Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo $item
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo) {
            throw new InvalidArgumentException(sprintf('The ChildNameServerInfo property can only contain items of type \Upmind\DomainNameApiSdk\SDK\StructType\ChildNameServerInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ChildNameServerInfo
     */
    public function getAttributeName(): string
    {
        return 'ChildNameServerInfo';
    }
}
