<?php

use CreditGuard\CreditGuard;

require(__DIR__ . '/../vendor/autoload.php');

// you get this parameters from CreditGuard

$cg_url         = '';
$cg_user        = '';
$cg_password    = '';
$cg_terminal_id = '';
$cg_mid         = '';

// for return from cg hosted page
$baseurl = 'http://example.com/examples';

$cg = new CreditGuard($cg_url, $cg_user, $cg_password, $cg_terminal_id, $cg_mid);