<?php


namespace Offchaindata;

use Offchaindata\Api\AuthHandler;
use Offchaindata\Api\DateHandler;

/**
 * Class Callables
 * @package  Offchaindata\PHPClient
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class Callables
{
    /**
     * @var AuthHandler API Authenticator
     */
    public $auth;
    public $date;

    /**
     * Callables constructor
     */
    public function __construct($token, array $options = null)
    {
        $this->auth = new AuthHandler($token, $options);
        $this->date = new DateHandler($token, $options);
    }
}