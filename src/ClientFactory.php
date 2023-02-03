<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk;

use Psr\Log\LoggerInterface;
use Upmind\DomainNameApiSdk\SDK\ClassMap;

/**
 * Factory for instantiating an SDK Client object.
 */
class ClientFactory
{
    public const ENV_LIVE = 'live';
    public const ENV_TEST = 'test';

    public const LIVE_WSDL_URL = 'http://api.domainnameapi.com/DomainApi.svc?singleWsdl';
    public const TEST_WSDL_URL = 'http://api-ote.domainnameapi.com/DomainApi.svc?singleWsdl';

    public function create(
        string $username,
        string $password,
        string $env = self::ENV_LIVE,
        ?LoggerInterface $logger = null,
        array $options = []
    ): Client {
        $options = array_merge($options, [
            Client::WSDL_URL => $env === self::ENV_LIVE ? self::LIVE_WSDL_URL : self::TEST_WSDL_URL,
            Client::WSDL_CLASSMAP => ClassMap::get(),
            Client::WSDL_LOGIN => $username,
            Client::WSDL_PASSWORD => $password,
        ]);

        $client = (new Client($options))
            ->setLogger($logger)
            ->setUsername($username)
            ->setPassword($password);

        return $client;
    }
}
