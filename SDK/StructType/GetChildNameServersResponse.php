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
#[\AllowDynamicProperties]
class GetChildNameServersResponse extends BaseMethodResponse
{
    /**
     * The ChildNameServerInfoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo $ChildNameServerInfoList = null;
    /**
     * The GetChildNameServersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse $GetChildNameServersResult = null;
    /**
     * Constructor method for GetChildNameServersResponse
     * @uses GetChildNameServersResponse::setChildNameServerInfoList()
     * @uses GetChildNameServersResponse::setGetChildNameServersResult()
     * @param \Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo $childNameServerInfoList
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse $getChildNameServersResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\ArrayType\ArrayOfChildNameServerInfo $childNameServerInfoList = null, ?\Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse $getChildNameServersResult = null)
    {
        $this
            ->setChildNameServerInfoList($childNameServerInfoList)
            ->setGetChildNameServersResult($getChildNameServersResult);
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
        return $this->ChildNameServerInfoList ?? null;
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
    /**
     * Get GetChildNameServersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse|null
     */
    public function getGetChildNameServersResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse
    {
        return $this->GetChildNameServersResult ?? null;
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
}
