<?php

namespace Tests\Unit;

use Offchaindata\Api\DateHandler;
use PHPUnit\Framework\TestCase;

class DateHandlerTest extends TestCase
{
    private $token;

    protected function setUp() : void
    {
        $this->token = '';
    }

    public function testLocations()
    {
        $date = new DateHandler($this->token);

        $response = $date->locations();

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

    public function testDate()
    {
        $date = new DateHandler($this->token);

        $response = $date->date(["date" => "2019-01-01","country" => "AU","subdivision" => "NSW"]);

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

    public function testHolidays()
    {
        $date = new DateHandler($this->token);

        $response = $date->holidays(["country" => "AU","subdivision" => "NSW", "year" => 2020]);

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
