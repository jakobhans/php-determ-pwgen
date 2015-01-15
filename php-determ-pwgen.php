<?php

include_once('determPwGenClass.php');

fwrite(STDOUT, "php-determ-pwgen\n");
fwrite(STDOUT, "A deterministic password generator in PHP\n");
fwrite(STDOUT, "By jakobhans (https://github.com/jakobhans/php-determ-pwgen). Version 1.0\n");
fwrite(STDOUT, "Inspired by determ-pwgen by I3ck (https://github.com/I3ck/determ-pwgen). Same logic is used, no code has been reused.\n\n\n");
fwrite(STDOUT, "This piece of software works hashing your username and site label with a salt (a password) you will be using every time you want to retrieve the same generated password for the same username and site label.\n");
fwrite(STDOUT, "Follow the instructions to generate your password.\n\n");

fwrite(STDOUT, "Enter the salt for the password generation:\n");
$salt = fgets(STDIN);
fwrite(STDOUT, "\nEnter a label for the site of the account:\n");
$site_label = fgets(STDIN);
fwrite(STDOUT, "\nEnter the username of the account:\n");
$username = fgets(STDIN);
fwrite(STDOUT, "\nEnter the number of rounds you want the password to be hashed. Defaults to 1000 if you don't input a value.\n");
$rounds = intval(fgets(STDIN));


$pwd_object = new determPwGen($rounds, $salt, $site_label, $username);

$site_pwd = $pwd_object->generateHash();

fwrite(STDOUT, "\n\nYour password for " . $site_label . "\n" . $site_pwd . "\n");

?>