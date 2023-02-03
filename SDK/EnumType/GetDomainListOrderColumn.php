<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GetDomainListOrderColumn EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetDomainListOrderColumn
 * @subpackage Enumerations
 */
class GetDomainListOrderColumn extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Id'
     * @return string 'Id'
     */
    const VALUE_ID = 'Id';
    /**
     * Constant for value 'ExternalId'
     * @return string 'ExternalId'
     */
    const VALUE_EXTERNAL_ID = 'ExternalId';
    /**
     * Constant for value 'TldId'
     * @return string 'TldId'
     */
    const VALUE_TLD_ID = 'TldId';
    /**
     * Constant for value 'StartDate'
     * @return string 'StartDate'
     */
    const VALUE_START_DATE = 'StartDate';
    /**
     * Constant for value 'ExpirationDate'
     * @return string 'ExpirationDate'
     */
    const VALUE_EXPIRATION_DATE = 'ExpirationDate';
    /**
     * Constant for value 'DomainName'
     * @return string 'DomainName'
     */
    const VALUE_DOMAIN_NAME = 'DomainName';
    /**
     * Constant for value 'Status'
     * @return string 'Status'
     */
    const VALUE_STATUS = 'Status';
    /**
     * Constant for value 'RemainingDay'
     * @return string 'RemainingDay'
     */
    const VALUE_REMAINING_DAY = 'RemainingDay';
    /**
     * Return allowed values
     * @uses self::VALUE_ID
     * @uses self::VALUE_EXTERNAL_ID
     * @uses self::VALUE_TLD_ID
     * @uses self::VALUE_START_DATE
     * @uses self::VALUE_EXPIRATION_DATE
     * @uses self::VALUE_DOMAIN_NAME
     * @uses self::VALUE_STATUS
     * @uses self::VALUE_REMAINING_DAY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ID,
            self::VALUE_EXTERNAL_ID,
            self::VALUE_TLD_ID,
            self::VALUE_START_DATE,
            self::VALUE_EXPIRATION_DATE,
            self::VALUE_DOMAIN_NAME,
            self::VALUE_STATUS,
            self::VALUE_REMAINING_DAY,
        ];
    }
}
