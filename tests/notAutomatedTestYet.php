<?php

use Offchaindata\PHPClient;

require_once('vendor/autoload.php');
require_once('autoload.php');

$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6OTk5OVwvYXBpXC92MVwvbG9naW4iLCJpYXQiOjE1ODE5NzMyOTksImV4cCI6MTU4MTk3Njg5OSwibmJmIjoxNTgxOTczMjk5LCJqdGkiOiJCS0ZxcGs2QW5ITzB2SlN1Iiwic3ViIjoxLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.MzO-4-6zRUfcN286cvw6duoDFJThz-G9dKDJdmr3ObY";

$client = new PHPClient($token);

var_dump($client->call->auth->me()->getBody());