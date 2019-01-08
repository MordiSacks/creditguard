<?php

namespace CreditGuard\Consts;


class CreditType
{
    /** @var string Single payment debit */
    const REGULAR_CREDIT = 'RegularCredit';

    /**
     * @var string
     *
     * "Isracredit", "AMEX credit", "Visa
     * Adif/30+", "Diners Adif/30+" (local
     * Israeli payment method)
     */
    const ISRA_CREDIT = 'IsraCredit';

    /** @var string Ad hock debit- "Hiyuv Miyadi" (local Israeli payment method) */
    const AD_HOCK = 'AdHock';

    /** @var string  Club deal (local Israeli payment method) */
    const CLUB_DEAL = 'ClubDeal';

    /**
     * @var string
     *
     * Special alpha – "super credit" (local
     * Israeli payment method).
     * Tag numberOfPayments is
     * mandatory
     */
    const SPECIAL_ALPHA = 'SpecialAlpha';

    /**
     * @var string
     *
     * Special credit - "credit"/"fixed
     * payments credit" (local Israeli
     * payment method).
     * Tag numberOfPayments is
     * mandatory
     */
    const SPECIAL_CREDIT = 'SpecialCredit';

    /**
     * @var string
     *
     * Multiple payments debit
     * (installments).
     * Tags numberOfPayments,
     * periodicalPayment and firstPayment
     * are mandatory according to the notes
     * below
     */
    const PAYMENTS = 'Payments';

    /** @var string Payment club (local Israeli payment method) */
    const PAYMENTS_CLUB = 'PaymentsClub';
}