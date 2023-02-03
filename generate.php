<?php

/**
 * This file generates the SDK based on the DomainNameApi WSDL.
 *
 * Usage: `php generate.php`
 */

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

// Options definition: the configuration file parameter is optional
$options = GeneratorOptions::instance(/* '/path/file.yml' */);
/** @var GeneratorOptions $options */
$options
    ->setOrigin('http://api.domainnameapi.com/DomainApi.svc?wsdl')
    ->setDestination('./')
    ->setSrcDirname('SDK')
    ->setNamespace('Upmind\\DomainNameApiSdk\\SDK')
    ->setNamespaceDictatesDirectories(false)
    ->setGatherMethods(GeneratorOptions::VALUE_NONE)
    ->setServicesFolder('')
    ->setStandalone(false)
    ->setGenerateTutorialFile(false);

// Generator instantiation
$generator = new Generator($options);
// Package generation
$generator->generatePackage();
