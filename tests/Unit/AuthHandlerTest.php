<?php

namespace Offchaindata;

use Offchaindata\Api\AuthHandler;
use PHPUnit\Framework\TestCase;

class AuthHandlerTest extends TestCase
{
    private $token;

    protected function setUp() : void
    {
        $this->token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6OTk5OVwvYXBpXC92MVwvbG9naW4iLCJpYXQiOjE1ODE4OTIxODQsImV4cCI6MTU4MTg5NTc4NCwibmJmIjoxNTgxODkyMTg0LCJqdGkiOiJpeHRxN3JXNmd2OU15U1pUIiwic3ViIjoxLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.nW12Py0siXh9GAitNIyUlHv1jAvSYr0-vVnwNBrN4Oc';
    }

    public function testMe()
    {
        $auth = new AuthHandler($this->token);

        $response = $auth->me();

        /**
         * Status code response
         */
        $this->assertEquals(200, $response->getStatusCode());

        /**
         * Body response
         * @return array
         */
        $this->assertIsArray($response->getBody());

        /**
         * Body response
         * @return string
         */
        $this->assertIsString($response->getBodyRaw());

        /**
         * Complete headers response
         * @return array
         */
        $this->assertIsArray($response->getHeaders());

    }
}
