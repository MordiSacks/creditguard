<?php

use CreditGuard\Consts\CreditType;
use CreditGuard\Consts\Currency;
use CreditGuard\Consts\Language;
use CreditGuard\Consts\MpiValidation;
use CreditGuard\Consts\TransactionType;
use CreditGuard\Requests\DoDealRedirectRequest;

require __DIR__ . '/bootstrap.php';

$doDealRedirectRequest = new DoDealRedirectRequest();

$doDealRedirectRequest
    ->setVersion('2000')
    ->setLanguage(Language::HEBREW)
    ->setTransactionType(TransactionType::DEBIT)
    ->setCreditType(CreditType::PAYMENTS)
    ->setMpiValidation(MpiValidation::J4)
    ->setUniqueid('test-1-' . time())
    ->setSuccessUrl($baseurl . '/returnFromRedirect.php?status=success')
    ->setErrorUrl($baseurl . '/returnFromRedirect.php?status=error')
    //->setCancelUrl($baseurl . '/returnFromRedirect.php?status=cancel')
    ->setDescription('Test transaction')
    ->setNumberOfPayments('1 2 3 4 5')
    //->setPaymentsInterest('0 2000 3000 4000 5000')
    ->setCurrency(Currency::USD)
    ->setTotal(500 * 100);


/** @var \CreditGuard\Responses\DoDealRedirectResponse $response */
$response = $cg->execute($doDealRedirectRequest);
header('Location: ' . $response->getMpiHostedPageUrl());

exit;
