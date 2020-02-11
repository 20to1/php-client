<?php


namespace TwentyToOne\PHPClient\Handler;


class CurlFactory
{
    private $curl;

    public function __construct()
    {
        $this->curl = curl_init();

        curl_setopt($this->curl, CURLOPT_HTTPHEADER, [
            'Accept: ' . $GLOBALS['accept']
        ]);

        return $this->curl;
    }

    public function sendRequest($options = null)
    {
        if (isset($options['url'])) {
            curl_setopt($this->curl, CURLOPT_URL, $options['url']);
        }

        return curl_exec($this->curl);
    }
}