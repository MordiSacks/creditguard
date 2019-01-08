<?php

namespace CreditGuard\Responses;


class InquireMpiTransactionsResponse extends AbstractResponse
{

    /** @var \SimpleXMLElement */
    protected $inquireTransactions;

    protected function init()
    {
        $this->inquireTransactions = $this->xml->response->inquireTransactions;
    }


    public function getMpiTransactionId()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }

    public function getUniqueid()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }

    public function getAmount()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }

    public function getCurrency()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }

    public function getAuthNumber()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }

    public function getCardId()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }

    public function getLanguageCode()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }

    public function getStatusCode()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }

    public function getStatusText()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }

    public function getErrorCode()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }

    public function getErrorText()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }

    public function getCgGatewayResponseCode()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }

    public function getCgGatewayResponseText()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }

    public function getCgGatewayResponseXML()
    {
        $field = static::_getterToField(__FUNCTION__);
        return new DoDealResponse($this->inquireTransactions->row->{$field}->ashrait->asXML());
    }

    public function getQueryErrorText()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }

    public function getXRem()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }

    public function getPersonalId()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }

    public function getCardExpiration()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->row->{$field} ?: null;
    }
}