<?php

namespace Offchaindata\Handler;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7;
use Offchaindata\Supports\ClientResponse;

class AuthHandler
{
    protected $resources;
    private $options;

    public function __construct($token, array $options = [])
    {
        $this->options = $options;
        $this->options['headers'] = [
            'Authorization' => "Bearer " . $token
        ];
    }

    public function me()
    {
        $client = new Client();

        try {
            $response = $client->request("GET", 'localhost:9999/api/v1/auth/me', $this->options);
        } catch (ClientException $e) {
            $response = $e->getResponse();
        }

        $this->resources = $response;

        return $this;
    }
}