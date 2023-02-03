<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ForwardRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ForwardRequest
 * @subpackage Structs
 */
class ForwardRequest extends BaseMethodRequest
{
    /**
     * The DomainName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DomainName = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * The UrlAction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $UrlAction = null;
    /**
     * The UrlForwardType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UrlForwardType = null;
    /**
     * Constructor method for ForwardRequest
     * @uses ForwardRequest::setDomainName()
     * @uses ForwardRequest::setId()
     * @uses ForwardRequest::setUrlAction()
     * @uses ForwardRequest::setUrlForwardType()
     * @param string $domainName
     * @param int $id
     * @param string $urlAction
     * @param string $urlForwardType
     */
    public function __construct(?string $domainName = null, ?int $id = null, ?string $urlAction = null, ?string $urlForwardType = null)
    {
        $this
            ->setDomainName($domainName)
            ->setId($id)
            ->setUrlAction($urlAction)
            ->setUrlForwardType($urlForwardType);
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
        return isset($this->DomainName) ? $this->DomainName : null;
    }
    /**
     * Set DomainName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $domainName
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ForwardRequest
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
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ForwardRequest
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
     * Get UrlAction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUrlAction(): ?string
    {
        return isset($this->UrlAction) ? $this->UrlAction : null;
    }
    /**
     * Set UrlAction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $urlAction
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ForwardRequest
     */
    public function setUrlAction(?string $urlAction = null): self
    {
        // validation for constraint: string
        if (!is_null($urlAction) && !is_string($urlAction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($urlAction, true), gettype($urlAction)), __LINE__);
        }
        if (is_null($urlAction) || (is_array($urlAction) && empty($urlAction))) {
            unset($this->UrlAction);
        } else {
            $this->UrlAction = $urlAction;
        }
        
        return $this;
    }
    /**
     * Get UrlForwardType value
     * @return string|null
     */
    public function getUrlForwardType(): ?string
    {
        return $this->UrlForwardType;
    }
    /**
     * Set UrlForwardType value
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\UrlForwardType::valueIsValid()
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\UrlForwardType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $urlForwardType
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ForwardRequest
     */
    public function setUrlForwardType(?string $urlForwardType = null): self
    {
        // validation for constraint: enumeration
        if (!\Upmind\DomainNameApiSdk\SDK\EnumType\UrlForwardType::valueIsValid($urlForwardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Upmind\DomainNameApiSdk\SDK\EnumType\UrlForwardType', is_array($urlForwardType) ? implode(', ', $urlForwardType) : var_export($urlForwardType, true), implode(', ', \Upmind\DomainNameApiSdk\SDK\EnumType\UrlForwardType::getValidValues())), __LINE__);
        }
        $this->UrlForwardType = $urlForwardType;
        
        return $this;
    }
}
