<?php

use CreditGuard\Requests\InquireMpiTransactionsRequest;
use CreditGuard\Responses\InquireMpiTransactionsResponse;

require(__DIR__ . '/bootstrap.php');

$inquireMpiTransactionsRequest = new InquireMpiTransactionsRequest();

$inquireMpiTransactionsRequest->setMpiTransactionId($_REQUEST['txId']);

/** @var InquireMpiTransactionsResponse $response */
$response = $cg->execute($inquireMpiTransactionsRequest);

dd(
    $_REQUEST,
    $response,
    $response->getCgGatewayResponseXml(),
    $response->toArray(),
    null
);