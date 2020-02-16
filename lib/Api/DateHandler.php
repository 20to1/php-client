<?php


namespace Offchaindata\Api;


use Offchaindata\Handler\CurlFactory;
use Offchaindata\Support\ClientResponse;

class DateHandler extends ClientResponse
{
    private $options = [];
    protected $resources;
    private $baseURI = 'https://offchaindata.com/api/v1/date';

    public function __construct($token, array $options = null)
    {
        $this->options = $options;
        $this->options['token'] = $token;
    }

    public function date(array $params = null)
    {
        $factory = new CurlFactory();

        $this->options['body'] = $params;

        $this->resources = $factory->create(
            "GET",
            $this->baseURI,
            $this->options
        );

        return $this;
    }

    public function holidays(array $params = null)
    {
        $factory = new CurlFactory();

        $this->options['body'] = $params;

        $this->resources = $factory->create(
            "GET",
            $this->baseURI . "/holidays",
            $this->options
        );

        return $this;
    }

    public function locations(array $params = null)
    {
        $factory = new CurlFactory();

        $this->resources = $factory->create(
            "GET",
            $this->baseURI . "/locations",
            $this->options
        );

        return $this;
    }
}