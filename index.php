<?php

require_once 'vendor/autoload.php';

use App\Email; // FQCN

/*
App => src/
Email => Email.php
==> src/Email.php
*/

$email = new Email("atu@ef.zw");
echo $email->getDomain();
