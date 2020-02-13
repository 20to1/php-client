<?php


namespace Offchaindata\PHPClient\Handler;


class CurlFactory
{
    private $methods = [
        'GET',
        'POST',
        'OPTIONS',
        'DELETE',
        'PUT',
        'PATCH',
    ];

    private $method;

    public function create($method, $url, $options = null)
    {
        $this->method = $method;

        $this->sanitizeMethod();

        $resource = curl_init();

        $conf = $this->getConfig($url);

        curl_setopt_array(
            $resource,
            $conf
        );

        curl_exec($resource);

        return $resource;
    }

    public function getConfig($url)
    {
        $conf = [
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_ENCODING       => "",
            CURLOPT_AUTOREFERER    => true,
            CURLOPT_CONNECTTIMEOUT => 120,
            CURLOPT_TIMEOUT        => 120,
        ];
        return $conf;
    }

    public function sanitizeMethod()
    {
        if (!in_array($this->method, $this->methods)) {
            echo "Method not recognized";
            die;
        }
    }
}