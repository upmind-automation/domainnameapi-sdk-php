<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ExecutionStatus EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ExecutionStatus
 * @subpackage Enumerations
 */
class ExecutionStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SUCCESS'
     * @return string 'SUCCESS'
     */
    const VALUE_SUCCESS = 'SUCCESS';
    /**
     * Constant for value 'ERROR'
     * @return string 'ERROR'
     */
    const VALUE_ERROR = 'ERROR';
    /**
     * Return allowed values
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_ERROR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SUCCESS,
            self::VALUE_ERROR,
        ];
    }
}
