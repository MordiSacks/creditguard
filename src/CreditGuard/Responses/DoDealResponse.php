<?php

namespace CreditGuard\Responses;


class DoDealResponse extends AbstractResponse
{

    /** @var \SimpleXMLElement */
    protected $doDeal;

    protected function init()
    {
        $this->doDeal = $this->xml->response->doDeal;
    }

    public function getStatus()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getStatusText()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getExtendedStatus()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getExtendedStatusText()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getExtendedUserMessage()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getTerminalNumber()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCardBin()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCardMask()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCardLength()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCardNo()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCardName()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCardExpiration()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCardType()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCreditCompany()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCardBrand()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCardAcquirer()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getServiceCode()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getTransactionType()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCreditType()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCurrency()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getBaseCurrency()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getBaseAmount()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getTransactionCode()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getTotal()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getFirstPayment()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getPeriodicalPayment()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getNumberOfPayments()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getClubId()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getValidation()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCommReason()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getStarTotal()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getClubCode()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCreditGroup()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getPfsc()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getAuthAmount()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getPinKeyIn()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getBalance()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getIntIn()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getIntOut()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getIdStatus()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCvvStatus()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getAuthSource()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getAuthNumber()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getFileNumber()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getSlaveTerminalNumber()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getSlaveTerminalSequence()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getEci()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getClientIp()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getEmail()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCavv()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getUser()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getAddonData()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getSupplierNumber()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getId()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getShiftId1()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getShiftId2()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getShiftId3()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getShiftTxnDate()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCgUid()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getCardHash()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

    public function getDigitalWalletData()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->doDeal->{$field} ?: null;
    }

}