<?php


namespace Offchaindata\PHPClient;

use Offchaindata\PHPClient\Api\Auth;

/**
 * Class Callables
 * @package  Offchaindata\PHPClient
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class Callables
{
    /**
     * @var Auth API Authenticator
     */
    public $auth;

    /**
     * Callables constructor
     * @param null
     */
    public function __construct()
    {
        $this->auth = new Auth();
    }
}