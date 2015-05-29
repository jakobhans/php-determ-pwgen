<?php

class DeterministicPasswordGenerator
{
    private $rounds;
    private $salt;
    private $siteLabel;
    private $username;

    DEFAULT_ROUNDS = 1000;

    function __construct($salt, $rounds = NULL)
    {
        $this->salt = $salt;

        if (!$rounds) {
            $this->rounds = DEFAULT_ROUNDS;
        } else {
            $this->rounds = $rounds;
        }
    } 

    function generateHash($siteLabel, $username) {
        if (isset($this->salt) && isset($siteLabel) && isset($username)) {
            $string = $this->salt . $siteLabel . $username;
            $hash = '';
            do {
                $hash = hash('sha256', $hash . $string);
                $string = $hash;
            } while ($i++ < $this->rounds)
            return $hash;
        } else {
            return FALSE;
        }
    }
}
