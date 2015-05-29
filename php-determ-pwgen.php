<?php

include_once('DeterministicPasswordGeneratorClass.php');

fwrite(STDOUT, "php-determ-pwgen\n");
fwrite(STDOUT, "A deterministic password generator in PHP\n");
fwrite(STDOUT, "By jakobhans (https://github.com/jakobhans/php-determ-pwgen). Version 1.0\n");
fwrite(STDOUT, "This piece of software works hashing your username and site label with a salt (a password) you will be using every time you want to retrieve the same generated password for the same username and site label.\n");
fwrite(STDOUT, "Follow the instructions to generate your password.\n\n");

fwrite(STDOUT, "Enter the salt for the password generation:\n");
$salt = fgets(STDIN);
fwrite(STDOUT, "\nEnter a label for the site of the account:\n");
$siteLabel = fgets(STDIN);
fwrite(STDOUT, "\nEnter the username of the account:\n");
$username = fgets(STDIN);
fwrite(STDOUT, "\nEnter the number of rounds you want the password to be hashed. Defaults to 1000 if you don't input a value.\n");
$rounds = intval(fgets(STDIN));


$pwd_object = new DeterministicPasswordGenerator($salt, $rounds);

$site_pwd = $pwd_object->generateHash($siteLabel, $username);

fwrite(STDOUT, "\n\nYour password for " $username . " at " . $siteLabel . "\n" . $site_pwd . "\n\n");

?>