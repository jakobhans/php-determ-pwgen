<?php

class determPwGen
{
    private $rounds;
    private $salt;
    private $site_label;
    private $username;

    function __construct($rounds = 1000, $salt)
    {
        $this->rounds = $rounds;
        $this->salt = $salt;
    } 

    function generateHash($site_label, $username) {
        if (isset($this->salt) && isset($site_label) && isset($username)) {
            $string = $this->salt . $site_label . $username;
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
