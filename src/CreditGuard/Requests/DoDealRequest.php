<?php

namespace CreditGuard\Requests;


use CreditGuard\Consts\TransactionCode;

class DoDealRequest extends AbstractRequest
{
    public function __construct()
    {
        parent::__construct();

        /** Init mandatory arbitrary redirect fields */
        $this->setTransactionCode(TransactionCode::PHONE);
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
     * All card non present
     * transactions and e-commerce
     * must be marked as ‘Phone’
     * Please see XML API for further
     * details
     *
     * @return string
     */
    public function getTransactionCode() { return $this->get('transactionCode'); }

    /**
     * <b>CG Type:</b> AlphaNumeric
     * <br>
     * <b>CG Value:</b> Phone | Magnetic
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     * All card non present
     * transactions and e-commerce
     * must be marked as ‘Phone’
     * Please see XML API for further
     * details
     *
     * @see TransactionCode
     *
     * @param string $value
     *
     * @return static
     */
    public function setTransactionCode(string $value) { return $this->set('transactionCode', $value); }


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


    /**
     * Indicates a request for MPI
     * page and transaction setup
     *
     * @return string
     */
    public function getValidation() { return $this->get('validation'); }

    /**
     * <b>CG Type:</b> AlphaNumeric
     * <br>
     * <b>CG Value:</b> <font color="red">TxnSetup</font>
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     * Indicates a request for MPI
     * page and transaction setup
     *
     * @param string $value
     *
     * @return static
     */
    public function setValidation(string $value) { return $this->set('validation', $value); }


    /**
     * Main Terminal number as
     * defined for the
     * merchant at CG
     * Gateway within the
     * integration process
     *
     * @return string
     */
    public function getMainTerminalNumber() { return $this->get('mainTerminalNumber'); }

    /**
     * <b>CG Type:</b> AlphaNumeric
     * <br>
     * <b>CG Value:</b>
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     * Main Terminal number as
     * defined for the
     * merchant at CG
     * Gateway within the
     * integration process
     *
     * @param string $value
     *
     * @return static
     */
    public function setMainTerminalNumber(string $value) { return $this->set('mainTerminalNumber', $value); }


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
     * Card expiration date
     * (Month and year) MMYY
     *
     * @return string
     */
    public function getCvv() { return $this->get('cvv'); }

    /**
     * <b>CG Type:</b> Numeric (1-4)
     * <br>
     * <b>CG Value:</b>
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     *
     * Three/four last digits on back of
     * credit card.
     * You can also send:
     * 0–merchant chooses not to pass
     * CVV.
     * 2–CVV is not readable.
     * 9–card does not have CVV.
     *
     * @param string $value
     *
     * @return static
     */
    public function setCvv(string $value) { return $this->set('cvv', $value); }


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
     * Israeli ID number of card owner
     *
     * @return string
     */
    public function getId() { return $this->get('id'); }

    /**
     * <b>CG Type:</b> Numeric (4-10)
     * <br>
     * <b>CG Value:</b>
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     * Israeli ID number of card owner.
     *
     * @param string $value
     *
     * @return static
     */
    public function setId(string $value) { return $this->set('id', $value); }


    /**
     * Customer email
     *
     * @return string
     */
    public function getEmail() { return $this->get('email'); }

    /**
     * <b>CG Type:</b> AlphaNumeric (32)
     * <br>
     * <b>CG Value:</b> Customer email
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * Customer email
     *
     * @param string $value
     *
     * @return static
     */
    public function setEmail(string $value) { return $this->set('email', $value); }


    /**
     * Client IP
     *
     * @return string
     */
    public function getClientIp() { return $this->get('clientIP'); }

    /**
     * <b>CG Type:</b> Unknown (ipv4 assumed)
     * <br>
     * <b>CG Value:</b> Client IP
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * Client IP
     *
     * @param string $value
     *
     * @return static
     */
    public function setClientIp(string $value) { return $this->set('clientIP', $value); }


    /**
     * User defined field
     *
     * @return string
     */
    public function getUserData1() { return $this->commandXml->customerData->userData1; }

    /**
     * <b>CG Type:</b> AlphaNumeric (256)
     * <br>
     * <b>CG Value:</b> User defined attribute
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * User defined field
     *
     * @param string $value
     *
     * @return static
     */
    public function setUserData1(string $value)
    {
        $this->commandXml->customerData->userData1 = $value;
        return $this;
    }


    /**
     * User defined field
     *
     * @return string
     */
    public function getUserData2() { return $this->commandXml->customerData->userData2; }

    /**
     * <b>CG Type:</b> AlphaNumeric (256)
     * <br>
     * <b>CG Value:</b> User defined attribute
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * User defined field
     *
     * @param string $value
     *
     * @return static
     */
    public function setUserData2(string $value)
    {
        $this->commandXml->customerData->userData2 = $value;
        return $this;
    }


    /**
     * User defined field
     *
     * @return string
     */
    public function getUserData3() { return $this->commandXml->customerData->userData3; }

    /**
     * <b>CG Type:</b> AlphaNumeric (256)
     * <br>
     * <b>CG Value:</b> User defined attribute
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * User defined field
     *
     * @param string $value
     *
     * @return static
     */
    public function setUserData3(string $value)
    {
        $this->commandXml->customerData->userData3 = $value;
        return $this;
    }


    /**
     * User defined field
     *
     * @return string
     */
    public function getUserData4() { return $this->commandXml->customerData->userData4; }

    /**
     * <b>CG Type:</b> AlphaNumeric (256)
     * <br>
     * <b>CG Value:</b> User defined attribute
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * User defined field
     *
     * @param string $value
     *
     * @return static
     */
    public function setUserData4(string $value)
    {
        $this->commandXml->customerData->userData4 = $value;
        return $this;
    }


    /**
     * User defined field
     *
     * @return string
     */
    public function getUserData5() { return $this->commandXml->customerData->userData5; }

    /**
     * <b>CG Type:</b> AlphaNumeric (256)
     * <br>
     * <b>CG Value:</b> User defined attribute
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * User defined field
     *
     * @param string $value
     *
     * @return static
     */
    public function setUserData5(string $value)
    {
        $this->commandXml->customerData->userData5 = $value;
        return $this;
    }


    /**
     * User defined field
     *
     * @return string
     */
    public function getUserData6() { return $this->commandXml->customerData->userData6; }

    /**
     * <b>CG Type:</b> AlphaNumeric (256)
     * <br>
     * <b>CG Value:</b> User defined attribute
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * User defined field
     *
     * @param string $value
     *
     * @return static
     */
    public function setUserData6(string $value)
    {
        $this->commandXml->customerData->userData6 = $value;
        return $this;
    }


    /**
     * User defined field
     *
     * @return string
     */
    public function getUserData7() { return $this->commandXml->customerData->userData7; }

    /**
     * <b>CG Type:</b> AlphaNumeric (256)
     * <br>
     * <b>CG Value:</b> User defined attribute
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * User defined field
     *
     * @param string $value
     *
     * @return static
     */
    public function setUserData7(string $value)
    {
        $this->commandXml->customerData->userData7 = $value;
        return $this;
    }


    /**
     * User defined field
     *
     * @return string
     */
    public function getUserData8() { return $this->commandXml->customerData->userData8; }

    /**
     * <b>CG Type:</b> AlphaNumeric (256)
     * <br>
     * <b>CG Value:</b> User defined attribute
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * User defined field
     *
     * @param string $value
     *
     * @return static
     */
    public function setUserData8(string $value)
    {
        $this->commandXml->customerData->userData8 = $value;
        return $this;
    }


    /**
     * User defined field
     *
     * @return string
     */
    public function getUserData9() { return $this->commandXml->customerData->userData9; }

    /**
     * <b>CG Type:</b> AlphaNumeric (256)
     * <br>
     * <b>CG Value:</b> User defined attribute
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * User defined field
     *
     * @param string $value
     *
     * @return static
     */
    public function setUserData9(string $value)
    {
        $this->commandXml->customerData->userData9 = $value;
        return $this;
    }


    /**
     * User defined field
     *
     * @return string
     */
    public function getUserData10() { return $this->commandXml->customerData->userData10; }

    /**
     * <b>CG Type:</b> AlphaNumeric (256)
     * <br>
     * <b>CG Value:</b> User defined attribute
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * User defined field
     *
     * @param string $value
     *
     * @return static
     */
    public function setUserData10(string $value)
    {
        $this->commandXml->customerData->userData10 = $value;
        return $this;
    }

}