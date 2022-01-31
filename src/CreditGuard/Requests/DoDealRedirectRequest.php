<?php

namespace CreditGuard\Requests;


use CreditGuard\Consts\TransactionCode;

class DoDealRedirectRequest extends AbstractRequest
{
    protected $command = 'doDeal';

    public function __construct()
    {
        parent::__construct();

        /** Init mandatory arbitrary redirect fields */
        $this->setTransactionCode(TransactionCode::PHONE)
             ->setCardNo('CGMPI')
             ->setValidation('TxnSetup');
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
     * OK page URL –
     * overrides setup
     * parameter
     *
     * @return string
     */
    public function getSuccessUrl() { return $this->get('successUrl'); }

    /**
     * <b>CG Type:</b> String (256)
     * <br>
     * <b>CG Value:</b> Must be a Legal URL
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * OK page URL –
     * overrides setup
     * parameter
     *
     * @param string $value
     *
     * @return static
     */
    public function setSuccessUrl(string $value) { return $this->set('successUrl', $value); }


    /**
     * NOT OK page URL –
     * overrides setup
     * parameter
     *
     * @return string
     */
    public function getErrorUrl() { return $this->get('errorUrl'); }

    /**
     * <b>CG Type:</b> String (256)
     * <br>
     * <b>CG Value:</b> Must be a Legal URL
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * NOT OK page URL –
     * overrides setup
     * parameter
     *
     * @param string $value
     *
     * @return static
     */
    public function setErrorUrl(string $value) { return $this->set('errorUrl', $value); }


    /**
     * CANCEL page URL –
     * when present the
     * cancel button will
     * appear on the
     * payment page -
     * overrides setup
     * parameter
     *
     * @return string
     */
    public function getCancelUrl() { return $this->get('cancelUrl'); }

    /**
     * <b>CG Type:</b> String (256)
     * <br>
     * <b>CG Value:</b> Must be a Legal URL
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * CANCEL page URL –
     * when present the
     * cancel button will
     * appear on the
     * payment page -
     * overrides setup
     * parameter
     *
     * @param string $value
     *
     * @return static
     */
    public function setCancelUrl(string $value) { return $this->set('cancelUrl', $value); }


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
     * @param string $value
     *
     * @return static
     * @see Currency
     *
     */
    public function setCurrency(string $value) { return $this->set('currency', $value); }


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
     * @param string $value
     *
     * @return static
     * @see TransactionType
     *
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
     * @param string $value
     *
     * @return static
     * @see CreditType
     *
     */
    public function setCreditType(string $value) { return $this->set('creditType', $value); }


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
     * @param string $value
     *
     * @return static
     * @see TransactionCode
     *
     */
    public function setTransactionCode(string $value) { return $this->set('transactionCode', $value); }


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
     * This option adds to the total amount a specific interest that can change for each
     * value of number of payments that is chosen in the dropdown list.
     * The interest will be displayed in the payment page separately
     * The interest tag value is defined as a list of amounts and the number of list
     * elements will be same as the number of list elements in 'numberOfPayments'
     * The interest item value is the absolute interest amount in cents/agorot
     * (100 ILS will be 10000)
     * Zero (0) value is considered as no interest
     *
     * @return string
     */
    public function getPaymentsInterest() { return $this->get('paymentsInterest'); }

    /**
     * This option adds to the total amount a specific interest that can change for each
     * value of number of payments that is chosen in the dropdown list.
     * The interest will be displayed in the payment page separately
     * The interest tag value is defined as a list of amounts and the number of list
     * elements will be same as the number of list elements in 'numberOfPayments'
     * The interest item value is the absolute interest amount in cents/agorot
     * (100 ILS will be 10000)
     * Zero (0) value is considered as no interest
     *
     * @param string $value
     *
     * @return static
     */
    public function setPaymentsInterest(string $value) { return $this->set('paymentsInterest', $value); }

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
     * Allocated by CG Gateway for
     * the merchant – identifies the
     * redirect page & design
     *
     * @return string
     */
    public function getMid() { return $this->get('mid'); }

    /**
     * <b>CG Type:</b> String (15)
     * <br>
     * <b>CG Value:</b> Merchant ID
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     * Allocated by CG Gateway for
     * the merchant – identifies the
     * redirect page & design
     *
     * @param string $value
     *
     * @return static
     */
    public function setMid(string $value) { return $this->set('mid', $value); }


    /**
     * Generated by merchant. This
     * ID must be unique at least
     * within the last 24 hours. It is
     * advisable to generate a new
     * uuid for each transaction.
     *
     * @return string
     */
    public function getUniqueid() { return $this->get('uniqueid'); }

    /**
     * <b>CG Type:</b> String (64)
     * <br>
     * <b>CG Value:</b> Unique transaction ID
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     * Generated by merchant. This
     * ID must be unique at least
     * within the last 24 hours. It is
     * advisable to generate a new
     * uuid for each transaction.
     *
     * @param string $value
     *
     * @return static
     */
    public function setUniqueid(string $value) { return $this->set('uniqueid', $value); }


    /**
     * Indicates what transaction will
     * be performed by the MPI and
     * setup the hosted page
     * transaction accordingly.
     * A regular sale is AutoComm
     * For tokenization only use
     * 'Token'.
     * For authorization only on a
     * two phase sale use ‘Verify’
     * for reverse tokenization
     * (when enabled) use 'CardNo',
     * for other transaction type
     * refer to "validation" tag XML
     * API documentation
     *
     * @return string
     */
    public function getMpiValidation() { return $this->get('mpiValidation'); }

    /**
     * <b>CG Type:</b> AlphaNumeric
     * <br>
     * <b>CG Value:</b>
     * AutoComm
     * Token
     * Verify
     * AutoCommHold
     * CardNo
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     * Indicates what transaction will
     * be performed by the MPI and
     * setup the hosted page
     * transaction accordingly.
     * A regular sale is AutoComm
     * For tokenization only use
     * 'Token'.
     * For authorization only on a
     * two phase sale use ‘Verify’
     * for reverse tokenization
     * (when enabled) use 'CardNo',
     * for other transaction type
     * refer to "validation" tag XML
     * API documentation
     *
     * @param string $value
     *
     * @return static
     * @see MpiValidation
     *
     */
    public function setMpiValidation(string $value) { return $this->set('mpiValidation', $value); }


    /**
     * Will be optionally displayed
     * on the payment page
     *
     * @return string
     */
    public function getDescription() { return $this->get('description'); }

    /**
     * <b>CG Type:</b> AlphaNumeric(256)
     * <br>
     * <b>CG Value:</b>Description of sold goods/transaction
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * Will be optionally displayed
     * on the payment page
     *
     * @param string $value
     *
     * @return static
     */
    public function setDescription(string $value)
    {
        // Filter all illegal chars as described on CG's errors
        $value = preg_replace('/[^a-zA-Zא-תF0-9_:\- ]/', '', $value);
        return $this->set('description', $value);
    }


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
	 * Invoice as
	 * defined for the
	 * merchant at CG
	 * Gateway within the
	 * integration process
	 *
	 * @param $key
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setInvoiceParam( $key, string $value ) {
		$this->commandXml->invoice->{$key} = $value;

		return $this;
	}

	public function setPaymentPageData($key, $value){
	    $this->commandXml->paymentPageData->{$key} = $value;
	    return $this;
    }

}
