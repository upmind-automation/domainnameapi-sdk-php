<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseMethodResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BaseMethodResponse
 * @subpackage Structs
 */
class BaseMethodResponse extends AbstractStructBase
{
    /**
     * The ErrorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ErrorCode = null;
    /**
     * The OperationMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OperationMessage = null;
    /**
     * The OperationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OperationResult = null;
    /**
     * Constructor method for BaseMethodResponse
     * @uses BaseMethodResponse::setErrorCode()
     * @uses BaseMethodResponse::setOperationMessage()
     * @uses BaseMethodResponse::setOperationResult()
     * @param int $errorCode
     * @param string $operationMessage
     * @param string $operationResult
     */
    public function __construct(?int $errorCode = null, ?string $operationMessage = null, ?string $operationResult = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setOperationMessage($operationMessage)
            ->setOperationResult($operationResult);
    }
    /**
     * Get ErrorCode value
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @param int $errorCode
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BaseMethodResponse
     */
    public function setErrorCode(?int $errorCode = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get OperationMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOperationMessage(): ?string
    {
        return isset($this->OperationMessage) ? $this->OperationMessage : null;
    }
    /**
     * Set OperationMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $operationMessage
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BaseMethodResponse
     */
    public function setOperationMessage(?string $operationMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($operationMessage) && !is_string($operationMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operationMessage, true), gettype($operationMessage)), __LINE__);
        }
        if (is_null($operationMessage) || (is_array($operationMessage) && empty($operationMessage))) {
            unset($this->OperationMessage);
        } else {
            $this->OperationMessage = $operationMessage;
        }
        
        return $this;
    }
    /**
     * Get OperationResult value
     * @return string|null
     */
    public function getOperationResult(): ?string
    {
        return $this->OperationResult;
    }
    /**
     * Set OperationResult value
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\ExecutionStatus::valueIsValid()
     * @uses \Upmind\DomainNameApiSdk\SDK\EnumType\ExecutionStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $operationResult
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\BaseMethodResponse
     */
    public function setOperationResult(?string $operationResult = null): self
    {
        // validation for constraint: enumeration
        if (!\Upmind\DomainNameApiSdk\SDK\EnumType\ExecutionStatus::valueIsValid($operationResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Upmind\DomainNameApiSdk\SDK\EnumType\ExecutionStatus', is_array($operationResult) ? implode(', ', $operationResult) : var_export($operationResult, true), implode(', ', \Upmind\DomainNameApiSdk\SDK\EnumType\ExecutionStatus::getValidValues())), __LINE__);
        }
        $this->OperationResult = $operationResult;
        
        return $this;
    }
}
