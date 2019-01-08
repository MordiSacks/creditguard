<?php

namespace CreditGuard\Objects;


use CreditGuard\Responses\AbstractResponse;

class Transaction
{
    /** @var \SimpleXMLElement */
    protected $xml;


    /**
     * Transaction constructor.
     *
     * @param string|\SimpleXMLElement $xml
     */
    public function __construct($xml)
    {
        if ($xml instanceof \SimpleXMLElement) {
            $this->xml = $xml;
        } else {
            $this->xml = simplexml_load_string((string)$xml);
        }
    }

    public function toArray()
    {
        $array = [];
        foreach (get_class_methods($this) as $method) {
            if (substr($method, 0, 3) === 'get') {
                $res = call_user_func([$this, $method]);

                $array[lcfirst(substr($method, 3))] = (string)$res;
            }
        }

        return $array;
    }

    public function getStatus()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getStatusText()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getExtendedStatus()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getExtendedStatusText()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getExtendedUserMessage()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getTerminalNumber()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCardBin()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCardMask()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCardLength()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCardNo()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCardName()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCardExpiration()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCardType()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCreditCompany()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCardBrand()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCardAcquirer()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getServiceCode()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getTransactionType()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCreditType()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCurrency()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getBaseCurrency()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getBaseAmount()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getTransactionCode()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getTotal()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getFirstPayment()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getPeriodicalPayment()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getNumberOfPayments()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getPaymentsInterest()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getMid()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getUniqueid()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getMpiValidation()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getToken()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getMpiHostedPageUrl()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getReturnUrl()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getSuccessUrl()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getErrorUrl()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCancelUrl()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getClubId()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getValidation()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCommReason()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getStarTotal()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getClubCode()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCreditGroup()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getPfsc()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getAuthAmount()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getPinKeyIn()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getBalance()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getIntIn()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getIntOut()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getIdStatus()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCvvStatus()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getAuthSource()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getAuthNumber()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getFileNumber()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getSlaveTerminalNumber()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getSlaveTerminalSequence()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getEci()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getClientIp()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getEmail()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCavv()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getUser()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getAddonData()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getSupplierNumber()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getId()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getShiftId1()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getShiftId2()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getShiftId3()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getShiftTxnDate()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCgUid()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCardHash()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getMessage()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getUserMessage()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getMpiTransactionId()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getFinancialStatus()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getTranId()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getShovar()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getTransactionDate()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return AbstractResponse::normalize($this->xml->{$field}, 'dateTime') ;
    }

    public function getTransactionTime()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getShvaReferanceNo()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getTranbName()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getTransmitId()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }

    public function getCustomerData()
    {
        $field = AbstractResponse::_getterToField(__FUNCTION__);
        return (string)$this->xml->{$field} ?: null;
    }
}