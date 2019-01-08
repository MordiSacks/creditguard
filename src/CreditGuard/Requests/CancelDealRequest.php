<?php

namespace CreditGuard\Requests;


class CancelDealRequest extends AbstractRequest
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
     * The source of the authorization (ABS, manual,
     * credit company).
     *
     * @return string
     */
    public function getAuthSource() { return (string)$this->get('authSource'); }

    /**
     * The source of the authorization (ABS, manual,
     * credit company).
     *
     * @param string $value
     *
     * @return static
     */
    public function setAuthSource($value) { return $this->set('authSource', $value); }


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
     * Card holder is charged
     * Or card holder is credited.
     *
     * @return string
     */
    public function getTransactionType() { return $this->get('transactionType'); }

    /**
     * <b>CG Type:</b> AlphaNumeric
     * <br>
     * <b>CG Value:</b> Debit|Credit
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     * Card holder is charged
     * Or card holder is credited.
     *
     * @see TransactionType
     *
     * @param string $value
     *
     * @return static
     */
    public function setTransactionType(string $value) { return $this->set('transactionType', $value); }


    /**
     * Credit type
     *
     * @return string
     */
    public function getCreditType() { return $this->get('creditType'); }

    /**
     * <b>CG Type:</b> AlphaNumeric
     * <br>
     * <b>CG Value:</b> RegularCredit
     * Payments
     * IsraCredit
     * SpecialCredit
     * SpecialAlpha
     * PaymentsClub
     * Etc
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     * Credit type
     *
     * @see CreditType
     *
     * @param string $value
     *
     * @return static
     */
    public function setCreditType(string $value) { return $this->set('creditType', $value); }


    /**
     * Amount of first payment
     *
     * @return string
     */
    public function getFirstPayment() { return $this->get('firstPayment'); }

    /**
     * <b>CG Type:</b> Numeric(20)
     * <br>
     * <b>CG Value:</b>
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * Amount of first payment
     *
     * @param string $value
     *
     * @return static
     */
    public function setFirstPayment(string $value) { return $this->set('firstPayment', $value); }


    /**
     * Each periodical payments
     * amount
     *
     * @return string
     */
    public function getPeriodicalPayment() { return $this->get('periodicalPayment'); }

    /**
     * <b>CG Type:</b> Numeric(20)
     * <br>
     * <b>CG Value:</b>
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * Each periodical payments
     * amount
     *
     * @param string $value
     *
     * @return static
     */
    public function setPeriodicalPayment(string $value) { return $this->set('periodicalPayment', $value); }


    /**
     * In case CreditType isn’t
     * Payments please see XML API.
     * In case CreditType is
     * payments: if firstPayment and
     * periodicalPayment are filled
     * please see XML API otherwise
     * numberOfPayments indicates
     * the maximum number of
     * payments the card holder can
     * choose on the payment page.
     *
     * @return string
     */
    public function getNumberOfPayments() { return $this->get('numberOfPayments'); }

    /**
     * <b>CG Type:</b> Numeric(2)
     * <br>
     * <b>CG Value:</b>
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * In case CreditType isn’t
     * Payments please see XML API.
     * In case CreditType is
     * payments: if firstPayment and
     * periodicalPayment are filled
     * please see XML API otherwise
     * numberOfPayments indicates
     * the maximum number of
     * payments the card holder can
     * choose on the payment page.
     *
     * @param string $value
     *
     * @return static
     */
    public function setNumberOfPayments(string $value) { return $this->set('numberOfPayments', $value); }

}