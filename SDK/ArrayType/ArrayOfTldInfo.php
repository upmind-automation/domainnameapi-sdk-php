<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTldInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTldInfo
 * @subpackage Arrays
 */
class ArrayOfTldInfo extends AbstractStructArrayBase
{
    /**
     * The TldInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo[]
     */
    protected ?array $TldInfo = null;
    /**
     * Constructor method for ArrayOfTldInfo
     * @uses ArrayOfTldInfo::setTldInfo()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo[] $tldInfo
     */
    public function __construct(?array $tldInfo = null)
    {
        $this
            ->setTldInfo($tldInfo);
    }
    /**
     * Get TldInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo[]
     */
    public function getTldInfo(): ?array
    {
        return isset($this->TldInfo) ? $this->TldInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTldInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTldInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTldInfoForArrayConstraintsFromSetTldInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTldInfoTldInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfTldInfoTldInfoItem instanceof \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo) {
                $invalidValues[] = is_object($arrayOfTldInfoTldInfoItem) ? get_class($arrayOfTldInfoTldInfoItem) : sprintf('%s(%s)', gettype($arrayOfTldInfoTldInfoItem), var_export($arrayOfTldInfoTldInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TldInfo property can only contain items of type \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TldInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo[] $tldInfo
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldInfo
     */
    public function setTldInfo(?array $tldInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($tldInfoArrayErrorMessage = self::validateTldInfoForArrayConstraintsFromSetTldInfo($tldInfo))) {
            throw new InvalidArgumentException($tldInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($tldInfo) || (is_array($tldInfo) && empty($tldInfo))) {
            unset($this->TldInfo);
        } else {
            $this->TldInfo = $tldInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo|null
     */
    public function current(): ?\Upmind\DomainNameApiSdk\SDK\StructType\TldInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo|null
     */
    public function item($index): ?\Upmind\DomainNameApiSdk\SDK\StructType\TldInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo|null
     */
    public function first(): ?\Upmind\DomainNameApiSdk\SDK\StructType\TldInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo|null
     */
    public function last(): ?\Upmind\DomainNameApiSdk\SDK\StructType\TldInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo|null
     */
    public function offsetGet($offset): ?\Upmind\DomainNameApiSdk\SDK\StructType\TldInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo $item
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo) {
            throw new InvalidArgumentException(sprintf('The TldInfo property can only contain items of type \Upmind\DomainNameApiSdk\SDK\StructType\TldInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TldInfo
     */
    public function getAttributeName(): string
    {
        return 'TldInfo';
    }
}
