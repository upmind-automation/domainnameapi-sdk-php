<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk;

use Psr\Log\LoggerInterface;
use SoapFault;
use Upmind\DomainNameApiSdk\Exception\SoapException;
use Upmind\DomainNameApiSdk\SDK\ClassMap;
use Upmind\DomainNameApiSdk\SDK\Service;
use Upmind\DomainNameApiSdk\Soap\SoapClientWrapper;
use WsdlToPhp\PackageBase\SoapClientInterface;

/**
 * Entry point of the SDK.
 *
 * @method SoapClientWrapper getSoapClient()
 */
class Client extends Service
{
    protected ?LoggerInterface $logger = null;
    protected string $username;
    protected string $password;

    /**
     * @inheritDoc
     */
    public function setResult($result): SoapClientInterface
    {
        $client = parent::setResult($result);

        $this->logLastRequest();

        return $client;
    }

    /**
     * @inheritDoc
     *
     * @throws SoapException
     * @return no-return
     */
    public function saveLastError(string $methodName, SoapFault $soapFault): SoapClientInterface
    {
        parent::saveLastError($methodName, $soapFault);

        throw (new SoapException($soapFault->getMessage(), $soapFault->getCode(), $soapFault))
            ->setAction(substr($methodName, strpos($methodName, '::') + 2));
    }

    /**
     * @inheritDoc
     */
    public function getSoapClientClassName(?string $soapClientClassName = null): string
    {
        if ($soapClientClassName) {
            return parent::getSoapClientClassName($soapClientClassName);
        }

        return SoapClientWrapper::class;
    }

    /**
     * Logs the last request and response if a logger is set.
     */
    protected function logLastRequest(): void
    {
        if ($this->logger) {
            $this->logger->debug(sprintf(
                "SOAP Request:\n%s\nSOAP Response:\n%s",
                $this->formatLog($this->getLastRequest()),
                $this->formatLog($this->getLastResponse())
            ));
        }
    }

    /**
     * Format the given log message, masking the username and password.
     *
     * @param string|null $message
     */
    protected function formatLog($message): string
    {
        return str_replace(
            array_map(
                fn ($string) => htmlspecialchars($string, ENT_XML1, 'UTF-8'),
                [$this->username, $this->password]
            ),
            ['[USERNAME]', '[PASSWORD]'],
            trim(strval($message))
        );
    }

    /**
     * @return static
     */
    public function setLogger(?LoggerInterface $logger): self
    {
        $this->logger = $logger;
        return $this;
    }

    /**
     * @return static
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;
        $this->getSoapClient()->setUsername($username);
        return $this;
    }

    /**
     * @return static
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;
        $this->getSoapClient()->setPassword($password);
        return $this;
    }
}
