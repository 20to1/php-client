<?php


namespace Offchaindata\Api;

use Offchaindata\Handler\CurlFactory;
use Offchaindata\Support\ClientResponse;

class AuthHandler extends ClientResponse
{
    private $options = [];
    protected $resources;

    public function __construct($token, array $options = null)
    {
        $this->options = $options;
        $this->options['token'] = $token;
    }

    public function me()
    {
        $factory = new CurlFactory();

        $this->resources = $factory->create(
            "GET",
            'localhost:9999/api/v1/auth/me',
            $this->options
        );

        return $this;
    }
}