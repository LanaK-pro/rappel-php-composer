<?php

namespace App;

class Client extends User
{

    public function __construct(
        string $name,
        string $firstname,
        private bool $isPremium,
        private string $clientNumber,
    )
    {
        parent::__construct($name, $firstname);
    }

    public function getClientNumber(): string
    {
        return $this->clientNumber;
    }

    public function setClientNumber(string $clientNumber): void
    {
        $this->clientNumber = $clientNumber;
    }

    public function getisPremium(): bool
    {
        return $this->isPremium;
    }

    public function setIsPremium(bool $isPremium): void
    {
        $this->isPremium = $isPremium;
    }



    //fonction en commun


    public function getInfos(): string
    {
        if ($this->isPremium)
        {
            return "Je suis un client premium" . " " . "Numero client : " .  $this->clientNumber;
        } else
        {
            return "Je ne suis PAS un client premium" . " " . "Numero client : " .  $this->clientNumber;
        }
    }


}