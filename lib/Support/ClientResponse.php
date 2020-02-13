<?php


namespace Offchaindata\PHPClient\Support;


class ClientResponse
{
    protected $resources;

    public function getHandle()
    {
        return curl_exec($this->resources);
    }

    public function getPartials()
    {
        $headerSize = curl_getinfo($this->resources, CURLINFO_HEADER_SIZE);

        $partials = [
            'headers' => substr($this->getHandle(), 0, $headerSize),
            'body' => substr($this->getHandle(), $headerSize),
        ];

        return $partials;
    }

    /**
     * Return HTTP Body from cURL request
     */
    public function getBody()
    {
        return $this->getPartials()['body'];
    }

    /**
     * Return HTTP Headers from cURL request
     */
    public function getHeaders()
    {
        $headersRaw = $this->getPartials()['headers'];

        $explotion = array_filter(explode("\r\n", $headersRaw));

        unset($explotion[0]);

        $explotion = $this->serialize($explotion);

        return $explotion;
    }

    public function getContentType()
    {
        return curl_getinfo($this->resources, CURLINFO_CONTENT_TYPE);
    }

    public function getStatusCode()
    {
        return curl_getinfo($this->resources, CURLINFO_HTTP_CODE);
    }

    public function serialize($resources)
    {
        $result = [];
        foreach ($resources as $resource) {
            $resource = str_replace(" ", "", $resource);
            $obj = explode(":", $resource, 2);

            $result[$obj[0]] = $obj[1];
        }

        return $result;
    }
}