<?php

use CreditGuard\Requests\InquireTransactionsRequest;

require __DIR__ . '/bootstrap.php';

$inquireTransactionsRequest = new InquireTransactionsRequest();

$inquireTransactionsRequest
    ->setFromDealDate(\Carbon\Carbon::now()->addDays(-1));


$response = $cg->execute($inquireTransactionsRequest);

dd($response, $response->toArray());
