<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RenewalMode EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RenewalMode
 * @subpackage Enumerations
 */
class RenewalMode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AUTORENEW'
     * @return string 'AUTORENEW'
     */
    const VALUE_AUTORENEW = 'AUTORENEW';
    /**
     * Constant for value 'AUTOEXPIRE'
     * @return string 'AUTOEXPIRE'
     */
    const VALUE_AUTOEXPIRE = 'AUTOEXPIRE';
    /**
     * Constant for value 'AUTODELETE'
     * @return string 'AUTODELETE'
     */
    const VALUE_AUTODELETE = 'AUTODELETE';
    /**
     * Return allowed values
     * @uses self::VALUE_AUTORENEW
     * @uses self::VALUE_AUTOEXPIRE
     * @uses self::VALUE_AUTODELETE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AUTORENEW,
            self::VALUE_AUTOEXPIRE,
            self::VALUE_AUTODELETE,
        ];
    }
}
