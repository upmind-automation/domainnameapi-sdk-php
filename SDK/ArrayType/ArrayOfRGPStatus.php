<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRGPStatus ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRGPStatus
 * @subpackage Arrays
 */
class ArrayOfRGPStatus extends AbstractStructArrayBase
{
    /**
     * The RGPStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus[]
     */
    protected ?array $RGPStatus = null;
    /**
     * Constructor method for ArrayOfRGPStatus
     * @uses ArrayOfRGPStatus::setRGPStatus()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus[] $rGPStatus
     */
    public function __construct(?array $rGPStatus = null)
    {
        $this
            ->setRGPStatus($rGPStatus);
    }
    /**
     * Get RGPStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus[]
     */
    public function getRGPStatus(): ?array
    {
        return isset($this->RGPStatus) ? $this->RGPStatus : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRGPStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRGPStatus method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRGPStatusForArrayConstraintsFromSetRGPStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRGPStatusRGPStatusItem) {
            // validation for constraint: itemType
            if (!$arrayOfRGPStatusRGPStatusItem instanceof \Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus) {
                $invalidValues[] = is_object($arrayOfRGPStatusRGPStatusItem) ? get_class($arrayOfRGPStatusRGPStatusItem) : sprintf('%s(%s)', gettype($arrayOfRGPStatusRGPStatusItem), var_export($arrayOfRGPStatusRGPStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RGPStatus property can only contain items of type \Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RGPStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus[] $rGPStatus
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfRGPStatus
     */
    public function setRGPStatus(?array $rGPStatus = null): self
    {
        // validation for constraint: array
        if ('' !== ($rGPStatusArrayErrorMessage = self::validateRGPStatusForArrayConstraintsFromSetRGPStatus($rGPStatus))) {
            throw new InvalidArgumentException($rGPStatusArrayErrorMessage, __LINE__);
        }
        if (is_null($rGPStatus) || (is_array($rGPStatus) && empty($rGPStatus))) {
            unset($this->RGPStatus);
        } else {
            $this->RGPStatus = $rGPStatus;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus|null
     */
    public function current(): ?\Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus|null
     */
    public function item($index): ?\Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus|null
     */
    public function first(): ?\Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus|null
     */
    public function last(): ?\Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus|null
     */
    public function offsetGet($offset): ?\Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus $item
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfRGPStatus
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus) {
            throw new InvalidArgumentException(sprintf('The RGPStatus property can only contain items of type \Upmind\DomainNameApiSdk\SDK\StructType\RGPStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RGPStatus
     */
    public function getAttributeName(): string
    {
        return 'RGPStatus';
    }
}
