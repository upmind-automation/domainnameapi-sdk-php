<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDomainInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDomainInfo
 * @subpackage Arrays
 */
class ArrayOfDomainInfo extends AbstractStructArrayBase
{
    /**
     * The DomainInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo[]|null
     */
    protected ?array $DomainInfo = null;
    /**
     * Constructor method for ArrayOfDomainInfo
     * @uses ArrayOfDomainInfo::setDomainInfo()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo[] $domainInfo
     */
    public function __construct(?array $domainInfo = null)
    {
        $this
            ->setDomainInfo($domainInfo);
    }
    /**
     * Get DomainInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo[]|null
     */
    public function getDomainInfo(): ?array
    {
        return $this->DomainInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDomainInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDomainInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDomainInfoForArrayConstraintFromSetDomainInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDomainInfoDomainInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfDomainInfoDomainInfoItem instanceof \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo) {
                $invalidValues[] = is_object($arrayOfDomainInfoDomainInfoItem) ? get_class($arrayOfDomainInfoDomainInfoItem) : sprintf('%s(%s)', gettype($arrayOfDomainInfoDomainInfoItem), var_export($arrayOfDomainInfoDomainInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DomainInfo property can only contain items of type \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DomainInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo[] $domainInfo
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainInfo
     */
    public function setDomainInfo(?array $domainInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($domainInfoArrayErrorMessage = self::validateDomainInfoForArrayConstraintFromSetDomainInfo($domainInfo))) {
            throw new InvalidArgumentException($domainInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($domainInfo) || (is_array($domainInfo) && empty($domainInfo))) {
            unset($this->DomainInfo);
        } else {
            $this->DomainInfo = $domainInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo|null
     */
    public function current(): ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo|null
     */
    public function item($index): ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo|null
     */
    public function first(): ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo|null
     */
    public function last(): ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo|null
     */
    public function offsetGet($offset): ?\Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $item
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfDomainInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo) {
            throw new InvalidArgumentException(sprintf('The DomainInfo property can only contain items of type \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DomainInfo
     */
    public function getAttributeName(): string
    {
        return 'DomainInfo';
    }
}
