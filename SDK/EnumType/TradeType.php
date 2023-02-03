<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TradeType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TradeType
 * @subpackage Enumerations
 */
class TradeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Registration'
     * @return string 'Registration'
     */
    const VALUE_REGISTRATION = 'Registration';
    /**
     * Constant for value 'Renew'
     * @return string 'Renew'
     */
    const VALUE_RENEW = 'Renew';
    /**
     * Constant for value 'Transfer'
     * @return string 'Transfer'
     */
    const VALUE_TRANSFER = 'Transfer';
    /**
     * Constant for value 'Restore'
     * @return string 'Restore'
     */
    const VALUE_RESTORE = 'Restore';
    /**
     * Constant for value 'Setup'
     * @return string 'Setup'
     */
    const VALUE_SETUP = 'Setup';
    /**
     * Constant for value 'Trade'
     * @return string 'Trade'
     */
    const VALUE_TRADE = 'Trade';
    /**
     * Constant for value 'AdditionalLicence'
     * @return string 'AdditionalLicence'
     */
    const VALUE_ADDITIONAL_LICENCE = 'AdditionalLicence';
    /**
     * Constant for value 'PayRenewal'
     * @return string 'PayRenewal'
     */
    const VALUE_PAY_RENEWAL = 'PayRenewal';
    /**
     * Constant for value 'PreRegistration'
     * @return string 'PreRegistration'
     */
    const VALUE_PRE_REGISTRATION = 'PreRegistration';
    /**
     * Return allowed values
     * @uses self::VALUE_REGISTRATION
     * @uses self::VALUE_RENEW
     * @uses self::VALUE_TRANSFER
     * @uses self::VALUE_RESTORE
     * @uses self::VALUE_SETUP
     * @uses self::VALUE_TRADE
     * @uses self::VALUE_ADDITIONAL_LICENCE
     * @uses self::VALUE_PAY_RENEWAL
     * @uses self::VALUE_PRE_REGISTRATION
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_REGISTRATION,
            self::VALUE_RENEW,
            self::VALUE_TRANSFER,
            self::VALUE_RESTORE,
            self::VALUE_SETUP,
            self::VALUE_TRADE,
            self::VALUE_ADDITIONAL_LICENCE,
            self::VALUE_PAY_RENEWAL,
            self::VALUE_PRE_REGISTRATION,
        ];
    }
}
