<?php

declare(strict_types=1);

namespace Upmind\DomainNameApiSdk\SDK;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CheckAvailability
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailability $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse|bool
     */
    public function CheckAvailability(\Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailability $parameters)
    {
        try {
            $this->setResult($resultCheckAvailability = $this->getSoapClient()->__soapCall('CheckAvailability', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckAvailability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CheckBulkAvailability
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CheckBulkAvailability $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckBulkAvailabilityResponse|bool
     */
    public function CheckBulkAvailability(\Upmind\DomainNameApiSdk\SDK\StructType\CheckBulkAvailability $parameters)
    {
        try {
            $this->setResult($resultCheckBulkAvailability = $this->getSoapClient()->__soapCall('CheckBulkAvailability', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckBulkAvailability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CheckAvailabilityIdn
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdn $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdnResponse|bool
     */
    public function CheckAvailabilityIdn(\Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdn $parameters)
    {
        try {
            $this->setResult($resultCheckAvailabilityIdn = $this->getSoapClient()->__soapCall('CheckAvailabilityIdn', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckAvailabilityIdn;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named Register
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\Register $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse|bool
     */
    public function Register(\Upmind\DomainNameApiSdk\SDK\StructType\Register $parameters)
    {
        try {
            $this->setResult($resultRegister = $this->getSoapClient()->__soapCall('Register', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRegister;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RegisterWithContactInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\RegisterWithContactInfo $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RegisterWithContactInfoResponse|bool
     */
    public function RegisterWithContactInfo(\Upmind\DomainNameApiSdk\SDK\StructType\RegisterWithContactInfo $parameters)
    {
        try {
            $this->setResult($resultRegisterWithContactInfo = $this->getSoapClient()->__soapCall('RegisterWithContactInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRegisterWithContactInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ModifyNameServer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyNameServer $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyNameServerResponse|bool
     */
    public function ModifyNameServer(\Upmind\DomainNameApiSdk\SDK\StructType\ModifyNameServer $parameters)
    {
        try {
            $this->setResult($resultModifyNameServer = $this->getSoapClient()->__soapCall('ModifyNameServer', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultModifyNameServer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ModifyContacts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContacts $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse|bool
     */
    public function ModifyContacts(\Upmind\DomainNameApiSdk\SDK\StructType\ModifyContacts $parameters)
    {
        try {
            $this->setResult($resultModifyContacts = $this->getSoapClient()->__soapCall('ModifyContacts', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultModifyContacts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetContacts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetContacts $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetContactsResponse|bool
     */
    public function GetContacts(\Upmind\DomainNameApiSdk\SDK\StructType\GetContacts $parameters)
    {
        try {
            $this->setResult($resultGetContacts = $this->getSoapClient()->__soapCall('GetContacts', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetContacts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveContacts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\SaveContacts $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsResponse|bool
     */
    public function SaveContacts(\Upmind\DomainNameApiSdk\SDK\StructType\SaveContacts $parameters)
    {
        try {
            $this->setResult($resultSaveContacts = $this->getSoapClient()->__soapCall('SaveContacts', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveContacts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ModifyAuthCode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyAuthCode $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyAuthCodeResponse|bool
     */
    public function ModifyAuthCode(\Upmind\DomainNameApiSdk\SDK\StructType\ModifyAuthCode $parameters)
    {
        try {
            $this->setResult($resultModifyAuthCode = $this->getSoapClient()->__soapCall('ModifyAuthCode', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultModifyAuthCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ModifyStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatus $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatusResponse|bool
     */
    public function ModifyStatus(\Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatus $parameters)
    {
        try {
            $this->setResult($resultModifyStatus = $this->getSoapClient()->__soapCall('ModifyStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultModifyStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named EnableTheftProtectionLock
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\EnableTheftProtectionLock $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\EnableTheftProtectionLockResponse|bool
     */
    public function EnableTheftProtectionLock(\Upmind\DomainNameApiSdk\SDK\StructType\EnableTheftProtectionLock $parameters)
    {
        try {
            $this->setResult($resultEnableTheftProtectionLock = $this->getSoapClient()->__soapCall('EnableTheftProtectionLock', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultEnableTheftProtectionLock;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DisableTheftProtectionLock
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DisableTheftProtectionLock $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DisableTheftProtectionLockResponse|bool
     */
    public function DisableTheftProtectionLock(\Upmind\DomainNameApiSdk\SDK\StructType\DisableTheftProtectionLock $parameters)
    {
        try {
            $this->setResult($resultDisableTheftProtectionLock = $this->getSoapClient()->__soapCall('DisableTheftProtectionLock', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDisableTheftProtectionLock;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ModifyPrivacyProtectionStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatus $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatusResponse|bool
     */
    public function ModifyPrivacyProtectionStatus(\Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatus $parameters)
    {
        try {
            $this->setResult($resultModifyPrivacyProtectionStatus = $this->getSoapClient()->__soapCall('ModifyPrivacyProtectionStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultModifyPrivacyProtectionStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddChildNameServer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\AddChildNameServer $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\AddChildNameServerResponse|bool
     */
    public function AddChildNameServer(\Upmind\DomainNameApiSdk\SDK\StructType\AddChildNameServer $parameters)
    {
        try {
            $this->setResult($resultAddChildNameServer = $this->getSoapClient()->__soapCall('AddChildNameServer', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddChildNameServer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ModifyChildNameServer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyChildNameServer $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyChildNameServerResponse|bool
     */
    public function ModifyChildNameServer(\Upmind\DomainNameApiSdk\SDK\StructType\ModifyChildNameServer $parameters)
    {
        try {
            $this->setResult($resultModifyChildNameServer = $this->getSoapClient()->__soapCall('ModifyChildNameServer', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultModifyChildNameServer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteChildNameServer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DeleteChildNameServer $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DeleteChildNameServerResponse|bool
     */
    public function DeleteChildNameServer(\Upmind\DomainNameApiSdk\SDK\StructType\DeleteChildNameServer $parameters)
    {
        try {
            $this->setResult($resultDeleteChildNameServer = $this->getSoapClient()->__soapCall('DeleteChildNameServer', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteChildNameServer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetChildNameServer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServer $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServerResponse|bool
     */
    public function GetChildNameServer(\Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServer $parameters)
    {
        try {
            $this->setResult($resultGetChildNameServer = $this->getSoapClient()->__soapCall('GetChildNameServer', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetChildNameServer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetChildNameServers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServers $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse|bool
     */
    public function GetChildNameServers(\Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServers $parameters)
    {
        try {
            $this->setResult($resultGetChildNameServers = $this->getSoapClient()->__soapCall('GetChildNameServers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetChildNameServers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named Delete
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\Delete $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DeleteResponse|bool
     */
    public function Delete(\Upmind\DomainNameApiSdk\SDK\StructType\Delete $parameters)
    {
        try {
            $this->setResult($resultDelete = $this->getSoapClient()->__soapCall('Delete', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDelete;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named Renew
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\Renew $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RenewResponse|bool
     */
    public function Renew(\Upmind\DomainNameApiSdk\SDK\StructType\Renew $parameters)
    {
        try {
            $this->setResult($resultRenew = $this->getSoapClient()->__soapCall('Renew', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRenew;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetDetails $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsResponse|bool
     */
    public function GetDetails(\Upmind\DomainNameApiSdk\SDK\StructType\GetDetails $parameters)
    {
        try {
            $this->setResult($resultGetDetails = $this->getSoapClient()->__soapCall('GetDetails', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetList $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetListResponse|bool
     */
    public function GetList(\Upmind\DomainNameApiSdk\SDK\StructType\GetList $parameters)
    {
        try {
            $this->setResult($resultGetList = $this->getSoapClient()->__soapCall('GetList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CheckTransfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CheckTransfer $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse|bool
     */
    public function CheckTransfer(\Upmind\DomainNameApiSdk\SDK\StructType\CheckTransfer $parameters)
    {
        try {
            $this->setResult($resultCheckTransfer = $this->getSoapClient()->__soapCall('CheckTransfer', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckTransfer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named Transfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\Transfer $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\TransferResponse|bool
     */
    public function Transfer(\Upmind\DomainNameApiSdk\SDK\StructType\Transfer $parameters)
    {
        try {
            $this->setResult($resultTransfer = $this->getSoapClient()->__soapCall('Transfer', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTransfer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named QueryTransfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\QueryTransfer $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\QueryTransferResponse|bool
     */
    public function QueryTransfer(\Upmind\DomainNameApiSdk\SDK\StructType\QueryTransfer $parameters)
    {
        try {
            $this->setResult($resultQueryTransfer = $this->getSoapClient()->__soapCall('QueryTransfer', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultQueryTransfer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ApproveTransfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ApproveTransfer $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ApproveTransferResponse|bool
     */
    public function ApproveTransfer(\Upmind\DomainNameApiSdk\SDK\StructType\ApproveTransfer $parameters)
    {
        try {
            $this->setResult($resultApproveTransfer = $this->getSoapClient()->__soapCall('ApproveTransfer', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultApproveTransfer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named RejectTransfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\RejectTransfer $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RejectTransferResponse|bool
     */
    public function RejectTransfer(\Upmind\DomainNameApiSdk\SDK\StructType\RejectTransfer $parameters)
    {
        try {
            $this->setResult($resultRejectTransfer = $this->getSoapClient()->__soapCall('RejectTransfer', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRejectTransfer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CancelTransfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CancelTransfer $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CancelTransferResponse|bool
     */
    public function CancelTransfer(\Upmind\DomainNameApiSdk\SDK\StructType\CancelTransfer $parameters)
    {
        try {
            $this->setResult($resultCancelTransfer = $this->getSoapClient()->__soapCall('CancelTransfer', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCancelTransfer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named Restore
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\Restore $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\RestoreResponse|bool
     */
    public function Restore(\Upmind\DomainNameApiSdk\SDK\StructType\Restore $parameters)
    {
        try {
            $this->setResult($resultRestore = $this->getSoapClient()->__soapCall('Restore', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRestore;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named PreRegistiration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\PreRegistiration $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PreRegistirationResponse|bool
     */
    public function PreRegistiration(\Upmind\DomainNameApiSdk\SDK\StructType\PreRegistiration $parameters)
    {
        try {
            $this->setResult($resultPreRegistiration = $this->getSoapClient()->__soapCall('PreRegistiration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPreRegistiration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ResendIncomingTransferFOAMail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ResendIncomingTransferFOAMail $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ResendIncomingTransferFOAMailResponse|bool
     */
    public function ResendIncomingTransferFOAMail(\Upmind\DomainNameApiSdk\SDK\StructType\ResendIncomingTransferFOAMail $parameters)
    {
        try {
            $this->setResult($resultResendIncomingTransferFOAMail = $this->getSoapClient()->__soapCall('ResendIncomingTransferFOAMail', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultResendIncomingTransferFOAMail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ResendOutgoingTransferFOAMail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ResendOutgoingTransferFOAMail $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ResendOutgoingTransferFOAMailResponse|bool
     */
    public function ResendOutgoingTransferFOAMail(\Upmind\DomainNameApiSdk\SDK\StructType\ResendOutgoingTransferFOAMail $parameters)
    {
        try {
            $this->setResult($resultResendOutgoingTransferFOAMail = $this->getSoapClient()->__soapCall('ResendOutgoingTransferFOAMail', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultResendOutgoingTransferFOAMail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named Push
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\Push $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PushResponse|bool
     */
    public function Push(\Upmind\DomainNameApiSdk\SDK\StructType\Push $parameters)
    {
        try {
            $this->setResult($resultPush = $this->getSoapClient()->__soapCall('Push', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPush;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named Sync
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\Sync $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SyncResponse|bool
     */
    public function Sync(\Upmind\DomainNameApiSdk\SDK\StructType\Sync $parameters)
    {
        try {
            $this->setResult($resultSync = $this->getSoapClient()->__soapCall('Sync', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSync;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetRenewalMode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\SetRenewalMode $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SetRenewalModeResponse|bool
     */
    public function SetRenewalMode(\Upmind\DomainNameApiSdk\SDK\StructType\SetRenewalMode $parameters)
    {
        try {
            $this->setResult($resultSetRenewalMode = $this->getSoapClient()->__soapCall('SetRenewalMode', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetRenewalMode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named PayRenewal
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\PayRenewal $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\PayRenewalResponse|bool
     */
    public function PayRenewal(\Upmind\DomainNameApiSdk\SDK\StructType\PayRenewal $parameters)
    {
        try {
            $this->setResult($resultPayRenewal = $this->getSoapClient()->__soapCall('PayRenewal', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPayRenewal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ModifyAdditionalAttributes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyAdditionalAttributes $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyAdditionalAttributesResponse|bool
     */
    public function ModifyAdditionalAttributes(\Upmind\DomainNameApiSdk\SDK\StructType\ModifyAdditionalAttributes $parameters)
    {
        try {
            $this->setResult($resultModifyAdditionalAttributes = $this->getSoapClient()->__soapCall('ModifyAdditionalAttributes', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultModifyAdditionalAttributes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DENIC_CreateAuthInfo1
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1 $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Response|bool
     */
    public function DENIC_CreateAuthInfo1(\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1 $parameters)
    {
        try {
            $this->setResult($resultDENIC_CreateAuthInfo1 = $this->getSoapClient()->__soapCall('DENIC_CreateAuthInfo1', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDENIC_CreateAuthInfo1;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DENIC_CreateAuthInfo2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo2 $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo2Response|bool
     */
    public function DENIC_CreateAuthInfo2(\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo2 $parameters)
    {
        try {
            $this->setResult($resultDENIC_CreateAuthInfo2 = $this->getSoapClient()->__soapCall('DENIC_CreateAuthInfo2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDENIC_CreateAuthInfo2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DENIC_DeleteAuthInfo1
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_DeleteAuthInfo1 $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DENIC_DeleteAuthInfo1Response|bool
     */
    public function DENIC_DeleteAuthInfo1(\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_DeleteAuthInfo1 $parameters)
    {
        try {
            $this->setResult($resultDENIC_DeleteAuthInfo1 = $this->getSoapClient()->__soapCall('DENIC_DeleteAuthInfo1', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDENIC_DeleteAuthInfo1;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTldList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetTldList $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetTldListResponse|bool
     */
    public function GetTldList(\Upmind\DomainNameApiSdk\SDK\StructType\GetTldList $parameters)
    {
        try {
            $this->setResult($resultGetTldList = $this->getSoapClient()->__soapCall('GetTldList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTldList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SyncFromRegistry
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistry $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse|bool
     */
    public function SyncFromRegistry(\Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistry $parameters)
    {
        try {
            $this->setResult($resultSyncFromRegistry = $this->getSoapClient()->__soapCall('SyncFromRegistry', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSyncFromRegistry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDetailsFromRegistry
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsFromRegistry $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsFromRegistryResponse|bool
     */
    public function GetDetailsFromRegistry(\Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsFromRegistry $parameters)
    {
        try {
            $this->setResult($resultGetDetailsFromRegistry = $this->getSoapClient()->__soapCall('GetDetailsFromRegistry', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDetailsFromRegistry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetForward
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetForward $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetForwardResponse|bool
     */
    public function GetForward(\Upmind\DomainNameApiSdk\SDK\StructType\GetForward $parameters)
    {
        try {
            $this->setResult($resultGetForward = $this->getSoapClient()->__soapCall('GetForward', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetForward;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateForward
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\CreateForward $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\CreateForwardResponse|bool
     */
    public function CreateForward(\Upmind\DomainNameApiSdk\SDK\StructType\CreateForward $parameters)
    {
        try {
            $this->setResult($resultCreateForward = $this->getSoapClient()->__soapCall('CreateForward', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateForward;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ModifyForward
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyForward $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyForwardResponse|bool
     */
    public function ModifyForward(\Upmind\DomainNameApiSdk\SDK\StructType\ModifyForward $parameters)
    {
        try {
            $this->setResult($resultModifyForward = $this->getSoapClient()->__soapCall('ModifyForward', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultModifyForward;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteForward
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\DeleteForward $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\DeleteForwardResponse|bool
     */
    public function DeleteForward(\Upmind\DomainNameApiSdk\SDK\StructType\DeleteForward $parameters)
    {
        try {
            $this->setResult($resultDeleteForward = $this->getSoapClient()->__soapCall('DeleteForward', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteForward;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCurrentBalance
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\GetCurrentBalance $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\GetCurrentBalanceResponse|bool
     */
    public function GetCurrentBalance(\Upmind\DomainNameApiSdk\SDK\StructType\GetCurrentBalance $parameters)
    {
        try {
            $this->setResult($resultGetCurrentBalance = $this->getSoapClient()->__soapCall('GetCurrentBalance', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCurrentBalance;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ModifyRenewalMode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalMode $parameters
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalModeResponse|bool
     */
    public function ModifyRenewalMode(\Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalMode $parameters)
    {
        try {
            $this->setResult($resultModifyRenewalMode = $this->getSoapClient()->__soapCall('ModifyRenewalMode', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultModifyRenewalMode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Upmind\DomainNameApiSdk\SDK\StructType\AddChildNameServerResponse|\Upmind\DomainNameApiSdk\SDK\StructType\ApproveTransferResponse|\Upmind\DomainNameApiSdk\SDK\StructType\CancelTransferResponse|\Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityIdnResponse|\Upmind\DomainNameApiSdk\SDK\StructType\CheckAvailabilityResponse|\Upmind\DomainNameApiSdk\SDK\StructType\CheckBulkAvailabilityResponse|\Upmind\DomainNameApiSdk\SDK\StructType\CheckTransferResponse|\Upmind\DomainNameApiSdk\SDK\StructType\CreateForwardResponse|\Upmind\DomainNameApiSdk\SDK\StructType\DeleteChildNameServerResponse|\Upmind\DomainNameApiSdk\SDK\StructType\DeleteForwardResponse|\Upmind\DomainNameApiSdk\SDK\StructType\DeleteResponse|\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo1Response|\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_CreateAuthInfo2Response|\Upmind\DomainNameApiSdk\SDK\StructType\DENIC_DeleteAuthInfo1Response|\Upmind\DomainNameApiSdk\SDK\StructType\DisableTheftProtectionLockResponse|\Upmind\DomainNameApiSdk\SDK\StructType\EnableTheftProtectionLockResponse|\Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServerResponse|\Upmind\DomainNameApiSdk\SDK\StructType\GetChildNameServersResponse|\Upmind\DomainNameApiSdk\SDK\StructType\GetContactsResponse|\Upmind\DomainNameApiSdk\SDK\StructType\GetCurrentBalanceResponse|\Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsFromRegistryResponse|\Upmind\DomainNameApiSdk\SDK\StructType\GetDetailsResponse|\Upmind\DomainNameApiSdk\SDK\StructType\GetForwardResponse|\Upmind\DomainNameApiSdk\SDK\StructType\GetListResponse|\Upmind\DomainNameApiSdk\SDK\StructType\GetTldListResponse|\Upmind\DomainNameApiSdk\SDK\StructType\ModifyAdditionalAttributesResponse|\Upmind\DomainNameApiSdk\SDK\StructType\ModifyAuthCodeResponse|\Upmind\DomainNameApiSdk\SDK\StructType\ModifyChildNameServerResponse|\Upmind\DomainNameApiSdk\SDK\StructType\ModifyContactsResponse|\Upmind\DomainNameApiSdk\SDK\StructType\ModifyForwardResponse|\Upmind\DomainNameApiSdk\SDK\StructType\ModifyNameServerResponse|\Upmind\DomainNameApiSdk\SDK\StructType\ModifyPrivacyProtectionStatusResponse|\Upmind\DomainNameApiSdk\SDK\StructType\ModifyRenewalModeResponse|\Upmind\DomainNameApiSdk\SDK\StructType\ModifyStatusResponse|\Upmind\DomainNameApiSdk\SDK\StructType\PayRenewalResponse|\Upmind\DomainNameApiSdk\SDK\StructType\PreRegistirationResponse|\Upmind\DomainNameApiSdk\SDK\StructType\PushResponse|\Upmind\DomainNameApiSdk\SDK\StructType\QueryTransferResponse|\Upmind\DomainNameApiSdk\SDK\StructType\RegisterResponse|\Upmind\DomainNameApiSdk\SDK\StructType\RegisterWithContactInfoResponse|\Upmind\DomainNameApiSdk\SDK\StructType\RejectTransferResponse|\Upmind\DomainNameApiSdk\SDK\StructType\RenewResponse|\Upmind\DomainNameApiSdk\SDK\StructType\ResendIncomingTransferFOAMailResponse|\Upmind\DomainNameApiSdk\SDK\StructType\ResendOutgoingTransferFOAMailResponse|\Upmind\DomainNameApiSdk\SDK\StructType\RestoreResponse|\Upmind\DomainNameApiSdk\SDK\StructType\SaveContactsResponse|\Upmind\DomainNameApiSdk\SDK\StructType\SetRenewalModeResponse|\Upmind\DomainNameApiSdk\SDK\StructType\SyncFromRegistryResponse|\Upmind\DomainNameApiSdk\SDK\StructType\SyncResponse|\Upmind\DomainNameApiSdk\SDK\StructType\TransferResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
