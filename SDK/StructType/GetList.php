<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetList StructType
 * @subpackage Structs
 */
class GetList extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\GetListRequest|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\GetListRequest $request = null;
    /**
     * Constructor method for GetList
     * @uses GetList::setRequest()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetListRequest $request
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\GetListRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetListRequest|null
     */
    public function getRequest(): ?\Upmind\DomainNameApiSdk\SDK\StructType\GetListRequest
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetListRequest $request
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetList
     */
    public function setRequest(?\Upmind\DomainNameApiSdk\SDK\StructType\GetListRequest $request = null): self
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        
        return $this;
    }
}
