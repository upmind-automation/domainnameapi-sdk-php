<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DeleteResponse
 * @subpackage Structs
 */
class DeleteResponse extends BaseMethodResponse
{
    /**
     * The DeleteResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\DeleteResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\DeleteResponse $DeleteResult = null;
    /**
     * Constructor method for DeleteResponse
     * @uses DeleteResponse::setDeleteResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DeleteResponse $deleteResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\DeleteResponse $deleteResult = null)
    {
        $this
            ->setDeleteResult($deleteResult);
    }
    /**
     * Get DeleteResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DeleteResponse|null
     */
    public function getDeleteResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\DeleteResponse
    {
        return isset($this->DeleteResult) ? $this->DeleteResult : null;
    }
    /**
     * Set DeleteResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DeleteResponse $deleteResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DeleteResponse
     */
    public function setDeleteResult(?\Upmind\DomainNameApiSdk\SDK\StructType\DeleteResponse $deleteResult = null): self
    {
        if (is_null($deleteResult) || (is_array($deleteResult) && empty($deleteResult))) {
            unset($this->DeleteResult);
        } else {
            $this->DeleteResult = $deleteResult;
        }
        
        return $this;
    }
}
