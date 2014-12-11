<?php

class determPwGen
{

    private $rounds;
    private $site_label;
    private $username;

    function __construct($rounds, $site_label, $username)
    {
        $this->rounds = $rounds;
        $this->site_label = $site_label;
        $this->username = $username;
    } 

}
