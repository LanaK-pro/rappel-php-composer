<?php

require_once 'vendor/autoload.php';
use App\Employee;
use App\Client;
use App\UserList;
use App\User;

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

$employee = new Employee("Lana", "Karmaoui", "10");
$client = new Client("Zohra", "Bekkai", true , "2");

var_dump($employee, $client);

$list = new UserList(
    [
        $employee,
        $client,
        new Employee("Bababa", "baba", "12"),
        new Client ("tatata", "tata", false, "23")
    ]
);

var_dump($list);

$list->display();