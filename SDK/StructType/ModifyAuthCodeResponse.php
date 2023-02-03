<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyAuthCodeResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyAuthCodeResponse
 * @subpackage Structs
 */
class ModifyAuthCodeResponse extends BaseMethodResponse
{
    /**
     * The ModifyAuthCodeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ModifyAuthCodeResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyAuthCodeResponse $ModifyAuthCodeResult = null;
    /**
     * Constructor method for ModifyAuthCodeResponse
     * @uses ModifyAuthCodeResponse::setModifyAuthCodeResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyAuthCodeResponse $modifyAuthCodeResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyAuthCodeResponse $modifyAuthCodeResult = null)
    {
        $this
            ->setModifyAuthCodeResult($modifyAuthCodeResult);
    }
    /**
     * Get ModifyAuthCodeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyAuthCodeResponse|null
     */
    public function getModifyAuthCodeResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyAuthCodeResponse
    {
        return isset($this->ModifyAuthCodeResult) ? $this->ModifyAuthCodeResult : null;
    }
    /**
     * Set ModifyAuthCodeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyAuthCodeResponse $modifyAuthCodeResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyAuthCodeResponse
     */
    public function setModifyAuthCodeResult(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyAuthCodeResponse $modifyAuthCodeResult = null): self
    {
        if (is_null($modifyAuthCodeResult) || (is_array($modifyAuthCodeResult) && empty($modifyAuthCodeResult))) {
            unset($this->ModifyAuthCodeResult);
        } else {
            $this->ModifyAuthCodeResult = $modifyAuthCodeResult;
        }
        
        return $this;
    }
}
