<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DomainPushTarget EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DomainPushTarget
 * @subpackage Enumerations
 */
class DomainPushTarget extends AbstractStructEnumBase
{
    /**
     * Constant for value 'transit'
     * @return string 'transit'
     */
    const VALUE_TRANSIT = 'transit';
    /**
     * Constant for value 'detagging'
     * @return string 'detagging'
     */
    const VALUE_DETAGGING = 'detagging';
    /**
     * Constant for value 'Billwithdraw'
     * @return string 'Billwithdraw'
     */
    const VALUE_BILLWITHDRAW = 'Billwithdraw';
    /**
     * Return allowed values
     * @uses self::VALUE_TRANSIT
     * @uses self::VALUE_DETAGGING
     * @uses self::VALUE_BILLWITHDRAW
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TRANSIT,
            self::VALUE_DETAGGING,
            self::VALUE_BILLWITHDRAW,
        ];
    }
}
