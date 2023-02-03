<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\Soap;

use Psr\Log\LoggerInterface;
use Upmind\DomainNameApiSdk\SDK\StructType\BaseMethodRequest;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * SOAP client wrapper which automatically injects the username and password to
 * the request parameters.
 */
class SoapClientWrapper extends \SoapClient
{
    protected string $username;
    protected string $password;

    /**
     * @return static
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return static
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Performs a SOAP call, injecting the username and password to the request parameters.
     *
     * @inheritDoc
     */
    public function __soapCall(
        $function_name,
        $arguments,
        $options = null,
        $input_headers = null,
        &$output_headers = null
    ) {
        array_walk($arguments, function ($arg) {
            if (!$arg instanceof AbstractStructBase || !method_exists($arg, 'getRequest')) {
                return;
            }

            $request = $arg->getRequest();

            if (!$request instanceof BaseMethodRequest) {
                return;
            }

            $request->setUsername($this->username);
            $request->setPassword($this->password);
        });

        return parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
    }
}
