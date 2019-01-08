<?php

namespace CreditGuard\Requests;


use Carbon\Carbon;

class InquireTransactionsRequest extends AbstractRequest
{

    public function __construct()
    {
        parent::__construct();

    }

    /**
     * Terminal number as
     * defined for the
     * merchant at CG
     * Gateway within the
     * integration process
     *
     * @return string
     */
    public function getTerminalNumber() { return $this->get('terminalNumber'); }

    /**
     * <b>CG Type:</b> AlphaNumeric
     * <br>
     * <b>CG Value:</b>
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     * Terminal number as
     * defined for the
     * merchant at CG
     * Gateway within the
     * integration process
     *
     * @param string $value
     *
     * @return static
     */
    public function setTerminalNumber(string $value) { return $this->set('terminalNumber', $value); }


    /**
     * Unique ID of transaction.
     *
     * @return string
     */
    public function getTranId() { return (string)$this->get('tranId'); }

    /**
     * Unique ID of transaction.
     *
     * @param string $value
     *
     * @return static
     */
    public function setTranId(string $value) { return $this->set('tranId', $value); }


    /**
     * User data
     * Transaction identifier
     * (X Field)
     *
     * @return string
     */
    public function getUser() { return $this->get('user'); }

    /**
     * <b>CG Type:</b> String (19)
     * <br>
     * <b>CG Value:</b> User data
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * Transaction identifier
     * (X Field)
     *
     * @param string $value
     *
     * @return static
     */
    public function setUser(string $value) { return $this->set('user', $value); }


    /**
     * Card number in
     * regular transaction,
     * must be CGMPI for
     * transaction setup
     *
     * @return string
     */
    public function getCardNo() { return $this->get('cardNo'); }

    /**
     * <b>CG Type:</b> AlphaNumeric(19)
     * <br>
     * <b>CG Value:</b> <font color="red">CGMPI</font>
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     * Card number in
     * regular transaction,
     * must be CGMPI for
     * transaction setup
     *
     * @param string $value
     *
     * @return static
     */
    public function setCardNo(string $value) { return $this->set('cardNo', $value); }


    /**
     * Card token in
     * regular transaction,
     * must be CGMPI for
     * transaction setup
     *
     * @return string
     */
    public function getCardId() { return $this->get('cardId'); }

    /**
     * <b>CG Type:</b> AlphaNumeric(19)
     * <br>
     * <b>CG Value:</b> <font color="red">CGMPI</font>
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     * Card token in
     * regular transaction,
     * must be CGMPI for
     * transaction setup
     *
     * @param string $value
     *
     * @return static
     */
    public function setCardId(string $value) { return $this->set('cardId', $value); }


    /**
     * Card expiration date
     * (Month and year) MMYY
     *
     * @return string
     */
    public function getCardExpiration() { return $this->get('cardExpiration'); }

    /**
     * <b>CG Type:</b> Date (4)
     * <br>
     * <b>CG Value:</b> MMYY
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     * Card expiration date
     * (Month and year) MMYY
     *
     * @param string $value
     *
     * @return static
     */
    public function setCardExpiration(string $value) { return $this->set('cardExpiration', $value); }


    /**
     * Currency code,
     * According to ISO-4217
     *
     * @return string
     */
    public function getCurrency() { return $this->get('currency'); }

    /**
     * <b>CG Type:</b> AlphaNumeric(3)
     * <br>
     * <b>CG Value:</b> ILS|USD
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     * Currency code,
     * According to ISO-4217
     *
     * @see Currency
     *
     * @param string $value
     *
     * @return static
     */
    public function setCurrency(string $value) { return $this->set('currency', $value); }


    /**
     * Card brand
     *
     * @return string
     */
    public function getCardBrand() { return (string)$this->get('cardBrand'); }

    /**
     * Card brand
     *
     * @param string $value
     *
     * @return static
     */
    public function setCardBrand(string $value) { return $this->set('cardBrand', $value); }


    /**
     * The authorization number from the credit
     * company. This is used only to enter authorization
     * numbers received by the credit company via
     * phone or previous authorization transactions.
     *
     * @return string
     */
    public function getAuthNumber() { return (string)$this->get('authNumber'); }

    /**
     * The authorization number from the credit
     * company. This is used only to enter authorization
     * numbers received by the credit company via
     * phone or previous authorization transactions.
     *
     * @param string $value
     *
     * @return static
     */
    public function setAuthNumber($value) { return $this->set('authNumber', $value); }


    /**
     * Ashrait result
     *
     * @return string
     */
    public function getAshraitResult() { return (string)$this->get('ashraitResult'); }

    /**
     * Ashrait result
     *
     * @param string $value
     *
     * @return static
     */
    public function setAshraitResult(string $value) { return $this->set('ashraitResult', $value); }


    /**
     * Shva reference number
     *
     * @return string
     */
    public function getShvaReferanceNo() { return (string)$this->get('shvaReferanceNo'); }

    /**
     * Shva reference number
     *
     * @param string $value
     *
     * @return static
     */
    public function setShvaReferanceNo(string $value) { return $this->set('shvaReferanceNo', $value); }


    /**
     * The total amount of
     * the transaction in
     * cents (agorot). 100 ILS
     * will be 10000
     *
     * @return int
     */
    public function getTotal() { return (int)$this->get('total'); }

    /**
     * <b>CG Type:</b> Numeric(8)
     * <br>
     * <b>CG Value:</b>
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     * The total amount of
     * the transaction in
     * cents (agorot). 100 ILS
     * will be 10000
     *
     * @param int $value
     *
     * @return static
     */
    public function setTotal(int $value) { return $this->set('total', $value); }


    /**
     * transmit Id
     *
     * @return string
     */
    public function getTransmitId() { return (string)$this->get('transmitId'); }

    /**
     * transmit Id
     *
     * @param string $value
     *
     * @return static
     */
    public function setTransmitId(string $value) { return $this->set('transmitId', $value); }


    /**
     * Financial status
     *
     * @return string
     */
    public function getFinancialStatus() { return (string)$this->get('financialStatus'); }

    /**
     * Financial status
     *
     * @param string $value
     *
     * @return static
     */
    public function setFinancialStatus(string $value) { return $this->set('financialStatus', $value); }


    /**
     * shovar
     *
     * @return string
     */
    public function getShovar() { return (string)$this->get('shovar'); }

    /**
     * shovar
     *
     * @param string $value
     *
     * @return static
     */
    public function setShovar(string $value) { return $this->set('shovar', $value); }


    /**
     * Credit company
     *
     * @return string
     */
    public function getCreditCompany() { return (string)$this->get('creditCompany'); }

    /**
     * Credit company
     *
     * @param string $value
     *
     * @return static
     */
    public function setCreditCompany(string $value) { return $this->set('creditCompany', $value); }


    /**
     * From deal date
     *
     * @return Carbon|\Carbon\CarbonInterface|null
     */
    public function getFromDealDate()
    {
        $value = (string)$this->get('fromDealDate');
        if (!$value) {
            return null;
        }
        return Carbon::parse($value);
    }

    /**
     * From deal date
     * search criteria of type -
     * range - for matching
     * transactions by deal date
     *
     * @param string|\DateTime|Carbon $value
     *
     * @return static
     */
    public function setFromDealDate($value)
    {
        return $this->set('fromDealDate', static::normalizeDate($value));
    }


    /**
     * To deal date
     *
     * @return Carbon|\Carbon\CarbonInterface|null
     */
    public function getToDealDate()
    {
        $value = (string)$this->get('toDealDate');
        if (!$value) {
            return null;
        }
        return Carbon::parse($value);
    }

    /**
     * To deal date
     * search criteria of type -
     * range - for matching
     * transactions by deal date
     *
     * @param string|\DateTime|Carbon $value
     *
     * @return static
     */
    public function setToDealDate($value)
    {
        return $this->set('toDealDate', static::normalizeDate($value));
    }


    /**
     * From transmit date
     *
     * @return Carbon|\Carbon\CarbonInterface|null
     */
    public function getFromTransmitDate()
    {
        $value = (string)$this->get('fromTransmitDate');
        if (!$value) {
            return null;
        }
        return Carbon::parse($value);
    }

    /**
     * From transmit date
     * search criteria of type -
     * range - for matching
     * transactions by transmit date
     *
     * @param string|\DateTime|Carbon $value
     *
     * @return static
     */
    public function setFromTransmitDate($value)
    {
        return $this->set('fromTransmitDate', static::normalizeDate($value));
    }


    /**
     * To transmit date
     *
     * @return Carbon|\Carbon\CarbonInterface|null
     */
    public function getToTransmitDate()
    {
        $value = (string)$this->get('toTransmitDate');
        if (!$value) {
            return null;
        }
        return Carbon::parse($value);
    }

    /**
     * To transmit date
     * search criteria of type -
     * range - for matching
     * transactions by transmit date
     *
     * @param string|\DateTime|Carbon $value
     *
     * @return static
     */
    public function setToTransmitDate($value)
    {
        return $this->set('toTransmitDate', static::normalizeDate($value));
    }


}