<?php


namespace Offchaindata\PHPClient\Handler;


class CurlFactory
{
    public function create($method, $url, $options = null)
    {
        $resource = curl_init();

        $conf = $this->getConfig($url);

        curl_setopt_array(
            $resource,
            $conf
        );

        $response = curl_exec($resource);

        return $resource;
    }

    public function getConfig($url)
    {
        return [
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
    }
}