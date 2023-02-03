<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GetTldListOrderColumn EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetTldListOrderColumn
 * @subpackage Enumerations
 */
class GetTldListOrderColumn extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Id'
     * @return string 'Id'
     */
    const VALUE_ID = 'Id';
    /**
     * Constant for value 'Name'
     * @return string 'Name'
     */
    const VALUE_NAME = 'Name';
    /**
     * Constant for value 'Country'
     * @return string 'Country'
     */
    const VALUE_COUNTRY = 'Country';
    /**
     * Constant for value 'CreatedOn'
     * @return string 'CreatedOn'
     */
    const VALUE_CREATED_ON = 'CreatedOn';
    /**
     * Return allowed values
     * @uses self::VALUE_ID
     * @uses self::VALUE_NAME
     * @uses self::VALUE_COUNTRY
     * @uses self::VALUE_CREATED_ON
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ID,
            self::VALUE_NAME,
            self::VALUE_COUNTRY,
            self::VALUE_CREATED_ON,
        ];
    }
}
