<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTldPriceInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTldPriceInfo
 * @subpackage Arrays
 */
class ArrayOfTldPriceInfo extends AbstractStructArrayBase
{
    /**
     * The TldPriceInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo[]|null
     */
    protected ?array $TldPriceInfo = null;
    /**
     * Constructor method for ArrayOfTldPriceInfo
     * @uses ArrayOfTldPriceInfo::setTldPriceInfo()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo[] $tldPriceInfo
     */
    public function __construct(?array $tldPriceInfo = null)
    {
        $this
            ->setTldPriceInfo($tldPriceInfo);
    }
    /**
     * Get TldPriceInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo[]|null
     */
    public function getTldPriceInfo(): ?array
    {
        return $this->TldPriceInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTldPriceInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTldPriceInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTldPriceInfoForArrayConstraintFromSetTldPriceInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTldPriceInfoTldPriceInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfTldPriceInfoTldPriceInfoItem instanceof \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo) {
                $invalidValues[] = is_object($arrayOfTldPriceInfoTldPriceInfoItem) ? get_class($arrayOfTldPriceInfoTldPriceInfoItem) : sprintf('%s(%s)', gettype($arrayOfTldPriceInfoTldPriceInfoItem), var_export($arrayOfTldPriceInfoTldPriceInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TldPriceInfo property can only contain items of type \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TldPriceInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo[] $tldPriceInfo
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldPriceInfo
     */
    public function setTldPriceInfo(?array $tldPriceInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($tldPriceInfoArrayErrorMessage = self::validateTldPriceInfoForArrayConstraintFromSetTldPriceInfo($tldPriceInfo))) {
            throw new InvalidArgumentException($tldPriceInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($tldPriceInfo) || (is_array($tldPriceInfo) && empty($tldPriceInfo))) {
            unset($this->TldPriceInfo);
        } else {
            $this->TldPriceInfo = $tldPriceInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo|null
     */
    public function current(): ?\Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo|null
     */
    public function item($index): ?\Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo|null
     */
    public function first(): ?\Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo|null
     */
    public function last(): ?\Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo|null
     */
    public function offsetGet($offset): ?\Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo $item
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfTldPriceInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo) {
            throw new InvalidArgumentException(sprintf('The TldPriceInfo property can only contain items of type \Upmind\DomainNameApiSdk\SDK\StructType\TldPriceInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TldPriceInfo
     */
    public function getAttributeName(): string
    {
        return 'TldPriceInfo';
    }
}
