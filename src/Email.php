<?php

namespace App;

class Email
{
    public function __construct(private string $email)
    {
    }

    public function getDomain(): string
    {
        $emailParts = explode('@', $this->email);
        return $emailParts[1];
    }
}
