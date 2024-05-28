<?php

namespace App;

class UserList
{
    public function __construct(
        /** @var User[] */
        private array $users,
    )
    {

    }

    public function display():void
    {
        foreach ($this->users as $u) {
            echo $u->getFullName() . " ". $u->getInfos() . "</br>";
        }
    }
}