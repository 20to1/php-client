<?php


namespace Offchaindata\Handler;


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

        $conf = $this->getConfig($url, $options);

        curl_setopt_array(
            $resource,
            $conf
        );

        curl_exec($resource);

        return $resource;
    }

    public function getConfig($url, $options)
    {
        $conf = [
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => true,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_MAXREDIRS      => 0,
            CURLOPT_ENCODING       => "",
            CURLOPT_AUTOREFERER    => true,
            CURLOPT_CONNECTTIMEOUT => 120,
            CURLOPT_TIMEOUT        => 120,
            CURLOPT_HTTPHEADER     => $GLOBALS['headers']
        ];

        if (isset($options['body'])) {
            $conf[CURLOPT_POSTFIELDS] = json_encode($options['body']);
        }

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