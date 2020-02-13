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
    public function __construct(array $options = ['token' => null])
    {
        $GLOBALS = [
            'accept' => isset($options['accept']) ? $options['accept'] : 'application/json',
            'token'  => isset($options['token']) ? $options['token'] : null
        ];

        $this->call = new Callables();
    }
}