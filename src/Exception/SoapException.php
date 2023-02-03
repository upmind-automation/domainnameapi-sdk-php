<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\Exception;

use RuntimeException;

class SoapException extends RuntimeException
{
    protected string $actionName;

    /**
     * Set the name of the action when the error occurred.
     *
     * @return static
     */
    public function setAction(string $actionName): self
    {
        $this->actionName = $actionName;
        return $this;
    }

    /**
     * Get the name of the action when the error occurred, if any.
     */
    public function getAction(): ?string
    {
        return $this->actionName;
    }
}
