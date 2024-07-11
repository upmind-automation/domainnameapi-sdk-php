<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfKeyValueOfstringstring ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfKeyValueOfstringstring
 * @subpackage Arrays
 */
class ArrayOfKeyValueOfstringstring extends AbstractStructArrayBase
{
    /**
     * The KeyValueOfstringstring
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring[]
     */
    protected ?array $KeyValueOfstringstring = null;
    /**
     * Constructor method for ArrayOfKeyValueOfstringstring
     * @uses ArrayOfKeyValueOfstringstring::setKeyValueOfstringstring()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring[] $keyValueOfstringstring
     */
    public function __construct(?array $keyValueOfstringstring = null)
    {
        $this
            ->setKeyValueOfstringstring($keyValueOfstringstring);
    }
    /**
     * Get KeyValueOfstringstring value
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring[]
     */
    public function getKeyValueOfstringstring(): ?array
    {
        return $this->KeyValueOfstringstring;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setKeyValueOfstringstring method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKeyValueOfstringstring method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKeyValueOfstringstringForArrayConstraintFromSetKeyValueOfstringstring(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfKeyValueOfstringstringKeyValueOfstringstringItem) {
            // validation for constraint: itemType
            if (!$arrayOfKeyValueOfstringstringKeyValueOfstringstringItem instanceof \Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring) {
                $invalidValues[] = is_object($arrayOfKeyValueOfstringstringKeyValueOfstringstringItem) ? get_class($arrayOfKeyValueOfstringstringKeyValueOfstringstringItem) : sprintf('%s(%s)', gettype($arrayOfKeyValueOfstringstringKeyValueOfstringstringItem), var_export($arrayOfKeyValueOfstringstringKeyValueOfstringstringItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The KeyValueOfstringstring property can only contain items of type \Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set KeyValueOfstringstring value
     * @throws InvalidArgumentException
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring[] $keyValueOfstringstring
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring
     */
    public function setKeyValueOfstringstring(?array $keyValueOfstringstring = null): self
    {
        // validation for constraint: array
        if ('' !== ($keyValueOfstringstringArrayErrorMessage = self::validateKeyValueOfstringstringForArrayConstraintFromSetKeyValueOfstringstring($keyValueOfstringstring))) {
            throw new InvalidArgumentException($keyValueOfstringstringArrayErrorMessage, __LINE__);
        }
        $this->KeyValueOfstringstring = $keyValueOfstringstring;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring|null
     */
    public function current(): ?\Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring|null
     */
    public function item($index): ?\Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring|null
     */
    public function first(): ?\Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring|null
     */
    public function last(): ?\Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring|null
     */
    public function offsetGet($offset): ?\Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring $item
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfKeyValueOfstringstring
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring) {
            throw new InvalidArgumentException(sprintf('The KeyValueOfstringstring property can only contain items of type \Upmind\DomainNameApiSdk\SDK\StructType\KeyValueOfstringstring, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeyValueOfstringstring
     */
    public function getAttributeName(): string
    {
        return 'KeyValueOfstringstring';
    }
}
