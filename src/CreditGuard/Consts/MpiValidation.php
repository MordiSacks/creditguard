<?php

namespace CreditGuard\Consts;


class MpiValidation
{
    /**
     * @var string
     *
     * Verifies card locally.
     * If the card is ok and the total amount
     * of the deal is under the ceiling, a
     * debit is made without
     * communication to Shva.
     * If it's above the ceiling, an error
     * occurs.
     */
    const NO_COMM = 'NoComm';
    const J1      = self::NO_COMM;

    /**
     * @var string
     *
     * A local check on the CG Gateway
     * for the validity of the credit card
     * number and if it exist in the blocked
     * cards list. No actual debit occurs.
     */
    const NORMAL = 'Normal';
    const J2     = self::NORMAL;

    /**
     * @var string
     *
     * Same as J2 (Normal). It also returns
     * ceiling limit in the total field. for
     * Israeli cards Only
     */
    const CREDIT_LIMIT = 'CreditLimit';
    const J3           = self::CREDIT_LIMIT;

    /**
     * @var string
     *
     * Verifies card locally or in credit
     * company; depends on ceiling ZFL
     * terminal parameters
     * A positive response
     * results in actual
     * settlement.
     */
    const AUTO_COMM = 'AutoComm';
    const J4        = self::AUTO_COMM;

    /**
     * @var string
     *
     * Verifies card by credit company
     * regardless of the ceiling ZFL
     * terminal parameters. No settlement is
     * performed; the amount of verify
     * without settlement is held in card
     * holder's obligor. (This is used for
     * authorization purposes only.)
     * Available only when the credit
     * card company allows it on the
     * terminal
     */
    const VERIFY = 'Verify';
    const J5     = self::VERIFY;

    /**
     * @var string
     *
     * Verifies card by credit company
     * regardless of the ceiling ZFL
     * terminal parameters; settlement is
     * performed.
     */
    const DEALER = 'Dealer';
    const J6     = self::DEALER;

    /**
     * @var string
     *
     * Performs a J4 transaction. Yet the
     * transaction will not be deposited.
     * The method of depositing the
     * transactions can be configured per
     * merchant or by releasing the
     * transaction with AutoCommRelease
     * command.
     */
    const AUTO_COMM_HOLD = 'AutoCommHold';
    const J9             = self::AUTO_COMM_HOLD;

    /**
     * @var string
     *
     * A local check on the CG Gateway
     * for the validity of the credit card
     * number for tokenization purposes.
     * Perform an actual J2 request and
     * return cardId when terminal is
     * configured to do so.
     */
    const TOKEN = 'Token';
    const J102  = self::TOKEN;

    /**
     * @var string
     *
     * Used for releasing a transaction
     * (previously performed by using J9).
     * Releasing a transaction can be done
     * by using the original card number,
     * the cardId (when supported on the
     * terminal) or track2 when the original
     * transaction was performed with
     * track2. See examples for usage
     */
    const AUTO_COMM_RELEASE = 'AutoCommRelease';
    const J109              = self::AUTO_COMM_RELEASE;

    /**
     * @var string
     *
     * Used for retrieving card number of
     * an existing card id that was
     * generated for the merchant
     * This option is configuration
     * dependent.
     */
    const CARD_NO = 'cardNo';
    const J201    = self::CARD_NO;
}