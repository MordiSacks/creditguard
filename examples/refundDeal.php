<?php


use CreditGuard\Requests\RefundDealRequest;

require __DIR__ . '/bootstrap.php';

$refundDealRequest = new RefundDealRequest();

$refundDealRequest->setTranId('12345678')
                  ->setTotal('100');

/** @var \CreditGuard\Responses\RefundDealResponse $response */
$response = $cg->execute($refundDealRequest);

dd($response, $response->toArray());
