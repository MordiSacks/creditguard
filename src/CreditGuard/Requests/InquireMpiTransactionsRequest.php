<?php

namespace CreditGuard\Requests;


/**
 * @method self setQueryName(string $string) : static
 */
class InquireMpiTransactionsRequest extends AbstractRequest
{
    protected $command = 'inquireTransactions';

    public function __construct()
    {
        parent::__construct();

        /** Init mandatory arbitrary redirect fields */
        $this->setQueryName('mpiTransaction');
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
     * Mpi token
     *
     * @return string
     */
    public function getMpiTransactionId() { return $this->get('mpiTransactionId'); }

    /**
     * <b>CG Type:</b>
     * <br>
     * <b>CG Value:</b>
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     * Mpi token
     *
     * @param string $value
     *
     * @return static
     */
    public function setMpiTransactionId(string $value) { return $this->set('mpiTransactionId', $value); }


}