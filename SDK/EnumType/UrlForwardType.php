<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UrlForwardType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UrlForwardType
 * @subpackage Enumerations
 */
class UrlForwardType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'STANDART'
     * @return string 'STANDART'
     */
    const VALUE_STANDART = 'STANDART';
    /**
     * Constant for value 'FRAME'
     * @return string 'FRAME'
     */
    const VALUE_FRAME = 'FRAME';
    /**
     * Return allowed values
     * @uses self::VALUE_STANDART
     * @uses self::VALUE_FRAME
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_STANDART,
            self::VALUE_FRAME,
        ];
    }
}
