<?php


namespace Offchaindata\PHPClient\Api;

use Offchaindata\PHPClient\Handler\CurlFactory;
use Offchaindata\PHPClient\Support\ClientResponse;

class Auth extends ClientResponse
{
    private $url ='https://offchaindata.com/api/v1/auth/me';

    protected $resources;

    public function me()
    {
        $factory = new CurlFactory();

        $this->resources = $factory->create("GET", $this->url);

        return $this;
    }
}