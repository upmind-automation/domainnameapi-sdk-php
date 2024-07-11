<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ForwardResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ForwardResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ForwardResponse extends BaseMethodResponse
{
    /**
     * The Method
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Method = null;
    /**
     * The UrlAction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $UrlAction = null;
    /**
     * Constructor method for ForwardResponse
     * @uses ForwardResponse::setMethod()
     * @uses ForwardResponse::setUrlAction()
     * @param string $method
     * @param string $urlAction
     */
    public function __construct(?string $method = null, ?string $urlAction = null)
    {
        $this
            ->setMethod($method)
            ->setUrlAction($urlAction);
    }
    /**
     * Get Method value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->Method ?? null;
    }
    /**
     * Set Method value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $method
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse
     */
    public function setMethod(?string $method = null): self
    {
        // validation for constraint: string
        if (!is_null($method) && !is_string($method)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($method, true), gettype($method)), __LINE__);
        }
        if (is_null($method) || (is_array($method) && empty($method))) {
            unset($this->Method);
        } else {
            $this->Method = $method;
        }
        
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
        return $this->UrlAction ?? null;
    }
    /**
     * Set UrlAction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $urlAction
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ForwardResponse
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
}
