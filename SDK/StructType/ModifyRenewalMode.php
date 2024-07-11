<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyRenewalMode StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ModifyRenewalMode extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewealModeRequest|null
     */
    protected ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewealModeRequest $request = null;
    /**
     * Constructor method for ModifyRenewalMode
     * @uses ModifyRenewalMode::setRequest()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewealModeRequest $request
     */
    public function __construct(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewealModeRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewealModeRequest|null
     */
    public function getRequest(): ?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewealModeRequest
    {
        return $this->request ?? null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewealModeRequest $request
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalMode
     */
    public function setRequest(?\Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewealModeRequest $request = null): self
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        
        return $this;
    }
}
