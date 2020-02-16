<?php

namespace Offchaindata;

use Offchaindata\Api\AuthHandler;
use PHPUnit\Framework\TestCase;

class AuthHandlerTest extends TestCase
{
    private $token;

    protected function setUp() : void
    {
        $this->token = '';
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
