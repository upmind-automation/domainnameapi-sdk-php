<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetChildNameServersResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetChildNameServersResponse
 * @subpackage Structs
 */
class GetChildNameServersResponse extends BaseMethodResponse
{
    /**
     * The GetChildNameServersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse $GetChildNameServersResult = null;
    /**
     * The ChildNameServerInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo $ChildNameServerInfoList = null;
    /**
     * Constructor method for GetChildNameServersResponse
     * @uses GetChildNameServersResponse::setGetChildNameServersResult()
     * @uses GetChildNameServersResponse::setChildNameServerInfoList()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse $getChildNameServersResult
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo $childNameServerInfoList
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse $getChildNameServersResult = null, ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo $childNameServerInfoList = null)
    {
        $this
            ->setGetChildNameServersResult($getChildNameServersResult)
            ->setChildNameServerInfoList($childNameServerInfoList);
    }
    /**
     * Get GetChildNameServersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse|null
     */
    public function getGetChildNameServersResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse
    {
        return isset($this->GetChildNameServersResult) ? $this->GetChildNameServersResult : null;
    }
    /**
     * Set GetChildNameServersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse $getChildNameServersResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse
     */
    public function setGetChildNameServersResult(?\Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse $getChildNameServersResult = null): self
    {
        if (is_null($getChildNameServersResult) || (is_array($getChildNameServersResult) && empty($getChildNameServersResult))) {
            unset($this->GetChildNameServersResult);
        } else {
            $this->GetChildNameServersResult = $getChildNameServersResult;
        }
        
        return $this;
    }
    /**
     * Get ChildNameServerInfoList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo|null
     */
    public function getChildNameServerInfoList(): ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo
    {
        return isset($this->ChildNameServerInfoList) ? $this->ChildNameServerInfoList : null;
    }
    /**
     * Set ChildNameServerInfoList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo $childNameServerInfoList
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse
     */
    public function setChildNameServerInfoList(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo $childNameServerInfoList = null): self
    {
        if (is_null($childNameServerInfoList) || (is_array($childNameServerInfoList) && empty($childNameServerInfoList))) {
            unset($this->ChildNameServerInfoList);
        } else {
            $this->ChildNameServerInfoList = $childNameServerInfoList;
        }
        
        return $this;
    }
}
