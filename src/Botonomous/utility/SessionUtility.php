<?php

namespace Botonomous\utility;

/**
 * Class SessionUtility.
 *
 * @SuppressWarnings(PHPMD.Superglobals)
 * $_SESSION is wrapped in two functions and every session manipulation should use this call
 */
class SessionUtility
{
    /**
     * SessionUtility constructor.
     */
    public function __construct()
    {
        session_start();
    }

    /**
     * @return mixed
     */
    public function getSession(): array
    {
        return $_SESSION;
    }

    /**
     * @param mixed $session
     */
    public function setSession(array $session)
    {
        $_SESSION = $session;
    }

    /**
     * @param $key
     * @param $value
     */
    public function set(string $key, $value)
    {
        $session = $this->getSession();
        $session[$key] = $value;
        $this->setSession($session);
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public function get($key)
    {
        $session = $this->getSession();

        if (!isset($session[$key])) {
            /* @noinspection PhpInconsistentReturnPointsInspection */
            return;
        }

        return $session[$key];
    }
}
