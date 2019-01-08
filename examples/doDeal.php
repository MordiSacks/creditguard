<?php

use CreditGuard\Consts\CreditType;
use CreditGuard\Consts\Currency;
use CreditGuard\Consts\Language;
use CreditGuard\Consts\MpiValidation;
use CreditGuard\Consts\TransactionType;
use CreditGuard\Requests\DoDealRequest;

require __DIR__ . '/bootstrap.php';

$doDealRedirectRequest = new DoDealRequest();

$doDealRedirectRequest
    ->setLanguage(Language::HEBREW)
    ->setTransactionType(TransactionType::DEBIT)
    ->setCreditType(CreditType::REGULAR_CREDIT)
    ->setValidation(MpiValidation::J4)
    ->setCurrency(Currency::USD)
    ->setTotal(100)
    // if using token use setCardId
    ->setCardNo('4580123412341234')
    ->setCardExpiration('0120') // Jan 2020
;

/** @var \CreditGuard\Responses\DoDealResponse $response */
$response = $cg->execute($doDealRedirectRequest);

dd($response, $response->toArray());
