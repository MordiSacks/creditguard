<?php

use CreditGuard\Requests\CancelDealRequest;

require __DIR__ . '/bootstrap.php';

$cancelDealRequest = new CancelDealRequest();

$cancelDealRequest->setTranId('12345678');

/** @var \CreditGuard\Responses\CancelDealResponse $response */
$response = $cg->execute($cancelDealRequest);

dd($response, $response->toArray());
