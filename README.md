# Upmind - DomainNameApi SDK

[![Latest Version on Packagist](https://img.shields.io/packagist/v/upmind/domainnameapi-sdk.svg?style=flat-square)](https://packagist.org/packages/upmind/domainnameapi-sdk)

[DomainNameApi](https://domainnameapi.com) PHP SDK automatically [generated](generate.php) from the [DomainNameApi WSDL](http://api.domainnameapi.com/DomainApi.svc?wsdl) using [WsdlToPhp/PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator).

## Installation & Usage

### Requirements

PHP 7.4 and later.

### Composer

To install the package via [Composer](https://getcomposer.org/), run the following install command:

```bash
composer require upmind/domainnameapi-sdk
```

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php

require_once('/path/to/upmind/domainnameapi-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php

use Upmind\DomainNameApiSdk\ClientFactory;

require_once(__DIR__ . '/vendor/autoload.php');

/** @var \Upmind\DomainNameApiSdk\Client $client */
$client = (new ClientFactory())->create($username, $password, ClientFactory::ENV_TEST, $psr3Logger);

$request = (new GetDetailsRequest())->setDomainName($domain);
$response = $client->GetDetails(new GetDetails($request));

$domainInfo = $response->getDomainInfo();
if (!$domainInfo) {
    $result = $response->getGetDetailsResult();
    throw new RuntimeException(sprintf('API Error (%s): %s', $result->getErrorCode(), $result->getOperationMessage()));
}

/** @var \Upmind\DomainNameApiSdk\SDK\StructType\DomainInfo $domainInfo */
$status = $domainInfo->getStatus();
$nameservers = $domainInfo->getNameServerList();
$expiryDate = $domainInfo->getExpirationDate();
// ...

```

## Author

 - [Harry Lewis](https://github.com/uphlewis)
 - [All Contributors](../../contributors)

## License

MIT License. Please see [License File](LICENSE.md) for more information.

## Upmind

Sell, manage and support web hosting, domain names, ssl certificates, website builders and more with [Upmind.com](https://upmind.com/start) - the ultimate web hosting billing and management solution.
