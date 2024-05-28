<?php

namespace App;

abstract class User
{
    public function __construct(
        protected string $name,
        protected string $firstname,
    )
    {
    }

    // fonction en commun
    abstract public function getInfos(): string;

    //Fonction pour le nom

    public function getFullName(): string
    {
        return  "Nom:" . " " . $this->firstname . " " . $this->name;
    }
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


}