<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OrderDirection EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrderDirection
 * @subpackage Enumerations
 */
class OrderDirection extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ASC'
     * @return string 'ASC'
     */
    const VALUE_ASC = 'ASC';
    /**
     * Constant for value 'DESC'
     * @return string 'DESC'
     */
    const VALUE_DESC = 'DESC';
    /**
     * Return allowed values
     * @uses self::VALUE_ASC
     * @uses self::VALUE_DESC
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ASC,
            self::VALUE_DESC,
        ];
    }
}
