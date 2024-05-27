<?php

require_once 'vendor/autoload.php';

use App\Email;
use App\SpamChecker;// FQCN

/*
App => src/
Email => Email.php
==> src/Email.php
*/

$email = new Email("atu@test.com");
echo $email->getDomain();

// Créer une instance de SpamChecker
$checker = new SpamChecker();
// Appeler sur cette instance la méthode isSpam en lui passant
// l'instance d'Email
var_dump($checker->isSpam($email));
