<?php


namespace Offchaindata\PHPClient;

/**
 * Class Client
 * @package  TwentyToOne\PHPClient
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class Client
{
    public $call;

    /**
     * @var Object deserializer
     */
    protected $serializer;

    /**
     * Client constructor.
     * @param string     $token   JWT Auth token
     * @param array|null $options HTTP custom options
     */
    public function __construct($token, array $options = null)
    {
        $GLOBALS = [
            'url'    => [
                // 'auth' => 'https://offchaindata.com/api/v1/auth/me',
                'auth' => 'localhost:9999/api/v1/auth/me',
                'date' => 'localhost:9999/api/v1/date',
                'holidays' => 'localhost:9999/api/v1/date/holidays',
                'locations' => 'localhost:9999/api/v1/date/locations',
            ],
            'headers' => [
                'Authorization: Bearer ' . $token,
                'Content-Type: ' . isset($options['content-type']) ? $options['content-type'] : 'application/json',
                'Accept: ' . isset($options['accept']) ? $options['accept'] : 'application/json',
            ],
        ];

        $this->call = new Callables();
    }
}