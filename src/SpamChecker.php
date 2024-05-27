<?php

namespace App;

class SpamChecker
{
    private const SPAM_DOMAINS = ["test.com", "hello.net"];

    public function isSpam(Email $email): bool
    {
        // Je récupère le domaine de l'email
        $domain = $email->getDomain();
        // Chercher si ce domaine se trouve dans le tableau des spams
        $isSpam = in_array($domain, self::SPAM_DOMAINS);
        // Retourner le résultat de la recherche
        return $isSpam;
    }
}
