<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBalanceInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBalanceInfo
 * @subpackage Arrays
 */
class ArrayOfBalanceInfo extends AbstractStructArrayBase
{
    /**
     * The BalanceInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo[]|null
     */
    protected ?array $BalanceInfo = null;
    /**
     * Constructor method for ArrayOfBalanceInfo
     * @uses ArrayOfBalanceInfo::setBalanceInfo()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo[] $balanceInfo
     */
    public function __construct(?array $balanceInfo = null)
    {
        $this
            ->setBalanceInfo($balanceInfo);
    }
    /**
     * Get BalanceInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo[]|null
     */
    public function getBalanceInfo(): ?array
    {
        return $this->BalanceInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBalanceInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBalanceInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBalanceInfoForArrayConstraintFromSetBalanceInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBalanceInfoBalanceInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfBalanceInfoBalanceInfoItem instanceof \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo) {
                $invalidValues[] = is_object($arrayOfBalanceInfoBalanceInfoItem) ? get_class($arrayOfBalanceInfoBalanceInfoItem) : sprintf('%s(%s)', gettype($arrayOfBalanceInfoBalanceInfoItem), var_export($arrayOfBalanceInfoBalanceInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BalanceInfo property can only contain items of type \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BalanceInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo[] $balanceInfo
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfBalanceInfo
     */
    public function setBalanceInfo(?array $balanceInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($balanceInfoArrayErrorMessage = self::validateBalanceInfoForArrayConstraintFromSetBalanceInfo($balanceInfo))) {
            throw new InvalidArgumentException($balanceInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($balanceInfo) || (is_array($balanceInfo) && empty($balanceInfo))) {
            unset($this->BalanceInfo);
        } else {
            $this->BalanceInfo = $balanceInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo|null
     */
    public function current(): ?\Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo|null
     */
    public function item($index): ?\Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo|null
     */
    public function first(): ?\Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo|null
     */
    public function last(): ?\Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo|null
     */
    public function offsetGet($offset): ?\Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo $item
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfBalanceInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo) {
            throw new InvalidArgumentException(sprintf('The BalanceInfo property can only contain items of type \Upmind\DomainNameApiSdk\SDK\StructType\BalanceInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BalanceInfo
     */
    public function getAttributeName(): string
    {
        return 'BalanceInfo';
    }
}
