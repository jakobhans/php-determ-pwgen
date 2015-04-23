PHP deterministic password generator
====================================
A deterministic password generator written in PHP.

Why?
----
People usually manage their account's passwords two different ways. Either they use a couple passwords for all their accounts or they create a different, complex password for each account and store them in a password manager. This password generator uses the best of both alternatives. The password is complex, secure and different for each different salt, account and user combination. On the other hand the password is not saved anywhere and this script can be executed anywhere.

Usage
-----
The tool is to be used in the CLI. Simply execute the script and follow the instructions.
```
php php-determ-pwgen.php
```

Inspiration
-----------
Inspired on I3ck's <a href="https://github.com/I3ck/determ-pwgen">determ-pwgen in Python</a>. No code was reused.