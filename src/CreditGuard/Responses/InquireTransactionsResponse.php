<?php

namespace CreditGuard\Responses;


use CreditGuard\Objects\Transaction;

class InquireTransactionsResponse extends AbstractResponse
{

    /** @var \SimpleXMLElement */
    protected $inquireTransactions;

    /** @var Transaction[] */
    protected $transactions = [];

    protected function init()
    {
        $this->inquireTransactions = $this->xml->response->inquireTransactions;

        $transactions = $this->inquireTransactions->transactions->transaction;

        foreach ($transactions as $transaction) {
            $this->transactions[] = new Transaction($transaction);
        }
    }

    public function getPageNumber()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->totals->{$field} ?: null;
    }

    public function getPagesAmount()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->totals->{$field} ?: null;
    }

    public function getQueryResultId()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->totals->{$field} ?: null;
    }

    public function getTotal()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->totals->{$field} ?: null;
    }

    public function getTotalMatch()
    {
        $field = static::_getterToField(__FUNCTION__);
        return (string)$this->inquireTransactions->totals->{$field} ?: null;
    }

    public function getTransactions()
    {
        return $this->transactions;
    }

}