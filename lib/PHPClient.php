<?php

namespace Offchaindata;

use Offchaindata\Handler\AuthHandler;
use Offchaindata\Handler\DateHandler;
use stdClass;

class PHPClient
{
    public $call;

    public function __construct($token, array $options = [])
    {
        $this->call = new stdClass;
        $this->call->auth = new AuthHandler($token, $options);
        $this->call->date = new DateHandler($token, $options);
    }
}