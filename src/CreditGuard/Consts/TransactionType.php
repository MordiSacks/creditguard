<?php

namespace CreditGuard\Consts;


class TransactionType
{
    /** @var string Card holder is credited */
    const CREDIT = 'Credit';

    /** @var string Card holder is charged */
    const DEBIT = 'Debit';
}