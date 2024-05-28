<?php

namespace App;

class Employee extends User
{

    public function __construct(
        string $name,
        string $firstName,
        private string $empNumber,
    )
    {
        parent::__construct($firstName, $name);
    }

    public function getEmpNumber(): string
    {
        return $this->empNumber;
    }

    public function setEmpNumber(string $empNumber): void
    {
        $this->empNumber = $empNumber;
    }

    //fonction en commun, ignore
    //public function getInfos(): string
    //{
    //    return $this->empNumber;
    //}
    public function getInfos(): string
    {
        return "Numero d'employee : ". " " . $this->empNumber;
    }
}