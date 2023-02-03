<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ContactType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ContactType
 * @subpackage Enumerations
 */
class ContactType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Contact'
     * @return string 'Contact'
     */
    const VALUE_CONTACT = 'Contact';
    /**
     * Constant for value 'CoopContact'
     * @return string 'CoopContact'
     */
    const VALUE_COOP_CONTACT = 'CoopContact';
    /**
     * Constant for value 'UkContact'
     * @return string 'UkContact'
     */
    const VALUE_UK_CONTACT = 'UkContact';
    /**
     * Constant for value 'EuContact'
     * @return string 'EuContact'
     */
    const VALUE_EU_CONTACT = 'EuContact';
    /**
     * Constant for value 'CnContact'
     * @return string 'CnContact'
     */
    const VALUE_CN_CONTACT = 'CnContact';
    /**
     * Constant for value 'CoContact'
     * @return string 'CoContact'
     */
    const VALUE_CO_CONTACT = 'CoContact';
    /**
     * Constant for value 'CaContact'
     * @return string 'CaContact'
     */
    const VALUE_CA_CONTACT = 'CaContact';
    /**
     * Constant for value 'DeContact'
     * @return string 'DeContact'
     */
    const VALUE_DE_CONTACT = 'DeContact';
    /**
     * Constant for value 'EsContact'
     * @return string 'EsContact'
     */
    const VALUE_ES_CONTACT = 'EsContact';
    /**
     * Constant for value 'CoopSponsor'
     * @return string 'CoopSponsor'
     */
    const VALUE_COOP_SPONSOR = 'CoopSponsor';
    /**
     * Constant for value 'Sponsor'
     * @return string 'Sponsor'
     */
    const VALUE_SPONSOR = 'Sponsor';
    /**
     * Return allowed values
     * @uses self::VALUE_CONTACT
     * @uses self::VALUE_COOP_CONTACT
     * @uses self::VALUE_UK_CONTACT
     * @uses self::VALUE_EU_CONTACT
     * @uses self::VALUE_CN_CONTACT
     * @uses self::VALUE_CO_CONTACT
     * @uses self::VALUE_CA_CONTACT
     * @uses self::VALUE_DE_CONTACT
     * @uses self::VALUE_ES_CONTACT
     * @uses self::VALUE_COOP_SPONSOR
     * @uses self::VALUE_SPONSOR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CONTACT,
            self::VALUE_COOP_CONTACT,
            self::VALUE_UK_CONTACT,
            self::VALUE_EU_CONTACT,
            self::VALUE_CN_CONTACT,
            self::VALUE_CO_CONTACT,
            self::VALUE_CA_CONTACT,
            self::VALUE_DE_CONTACT,
            self::VALUE_ES_CONTACT,
            self::VALUE_COOP_SPONSOR,
            self::VALUE_SPONSOR,
        ];
    }
}
