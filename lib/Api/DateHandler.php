<?php


namespace Offchaindata\Api;


use Offchaindata\Handler\CurlFactory;
use Offchaindata\Support\ClientResponse;

class DateHandler extends ClientResponse
{
    protected $resources;

    public function date(array $params)
    {
        $factory = new CurlFactory();

        $this->resources = $factory->create(
            "GET",
            $GLOBALS['url']['date'],
            $options['body'] = $params
        );

        return $this;
    }

    public function holidays(array $params)
    {
        $factory = new CurlFactory();

        $this->resources = $factory->create(
            "GET",
            $GLOBALS['url']['holidays'],
            $options['body'] = $params
        );

        return $this;
    }

    public function locations(array $params)
    {
        $factory = new CurlFactory();

        $this->resources = $factory->create(
            "GET",
            $GLOBALS['url']['locations'],
            $options['body'] = $params
        );

        return $this;
    }
}