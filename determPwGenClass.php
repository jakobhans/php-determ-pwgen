<?php

class determPwGen
{
    private $rounds;
    private $salt;
    private $site_label;
    private $username;

    function __construct($rounds = 1000, $salt, $site_label, $username)
    {
        $this->rounds = $rounds;
        $this->salt = $salt;
        $this->site_label = $site_label;
        $this->username = $username;
    } 

    function generateHash() {
        if (isset($this->salt) && isset($this->site_label) && isset($this->username)) {
            $i = 0;
            $string = $this->salt . $this->site_label . $this->username;
            $hash = '';
            while($i <= $this->rounds) {
                // Hash string
            }
        }
    }
}
