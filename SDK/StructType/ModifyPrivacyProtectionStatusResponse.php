<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyPrivacyProtectionStatusResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyPrivacyProtectionStatusResponse
 * @subpackage Structs
 */
class ModifyPrivacyProtectionStatusResponse extends BaseMethodResponse
{
    /**
     * The ModifyPrivacyProtectionStatusResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatusResponse|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatusResponse $ModifyPrivacyProtectionStatusResult = null;
    /**
     * Constructor method for ModifyPrivacyProtectionStatusResponse
     * @uses ModifyPrivacyProtectionStatusResponse::setModifyPrivacyProtectionStatusResult()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatusResponse $modifyPrivacyProtectionStatusResult
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatusResponse $modifyPrivacyProtectionStatusResult = null)
    {
        $this
            ->setModifyPrivacyProtectionStatusResult($modifyPrivacyProtectionStatusResult);
    }
    /**
     * Get ModifyPrivacyProtectionStatusResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatusResponse|null
     */
    public function getModifyPrivacyProtectionStatusResult(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatusResponse
    {
        return isset($this->ModifyPrivacyProtectionStatusResult) ? $this->ModifyPrivacyProtectionStatusResult : null;
    }
    /**
     * Set ModifyPrivacyProtectionStatusResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatusResponse $modifyPrivacyProtectionStatusResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatusResponse
     */
    public function setModifyPrivacyProtectionStatusResult(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatusResponse $modifyPrivacyProtectionStatusResult = null): self
    {
        if (is_null($modifyPrivacyProtectionStatusResult) || (is_array($modifyPrivacyProtectionStatusResult) && empty($modifyPrivacyProtectionStatusResult))) {
            unset($this->ModifyPrivacyProtectionStatusResult);
        } else {
            $this->ModifyPrivacyProtectionStatusResult = $modifyPrivacyProtectionStatusResult;
        }
        
        return $this;
    }
}
