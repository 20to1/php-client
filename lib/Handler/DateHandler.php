<?php

namespace Offchaindata\Handler;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7;

class DateHandler
{
    private $options;

    public function __construct($token, array $options = [])
    {
        $this->options = $options;
        $this->options['headers'] = [
            'Authorization' => "Bearer " . $token
        ];
    }

    public function date($params)
    {
        $this->options['form_params'] = $params;

        return $this->doRequest('POST', 'https://offchaindata.com/api/v1/date');
    }

    public function locations()
    {
        return $this->doRequest('GET', 'https://offchaindata.com/api/v1/date/locations');
    }

    public function holidays($params)
    {
        $this->options['form_params'] = $params;

        return $this->doRequest('POST', 'https://offchaindata.com/api/v1/date/holidays');
    }

    public function doRequest($method, $url)
    {
        $client = new Client();

        try {
            $response = $client->request($method, $url, $this->options);
        } catch (ClientException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }
}