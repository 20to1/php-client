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
            'accept' => 'application/json',
            'token' => $token
        ];

        $this->call = new Callables();
    }
}