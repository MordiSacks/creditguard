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
    ->setLanguage(Language::HEBREW)
    ->setTransactionType(TransactionType::DEBIT)
    ->setCreditType(CreditType::REGULAR_CREDIT)
    ->setMpiValidation(MpiValidation::J102)
    ->setUniqueid('test-1-' . time())
    ->setSuccessUrl($baseurl . '/returnFromRedirect.php?status=success')
    ->setErrorUrl($baseurl . '/returnFromRedirect.php?status=error')
    ->setCancelUrl($baseurl . '/returnFromRedirect.php?status=cancel')
    ->setDescription('Test transaction')
    ->setCurrency(Currency::USD)
    ->setTotal(100);

/** @var \CreditGuard\Responses\DoDealRedirectResponse $response */
$response = $cg->execute($doDealRedirectRequest);

header('Location: ' . $response->getMpiHostedPageUrl());

exit;
