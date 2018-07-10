<?php

namespace App\Requests;

class CreateCurrencyRequest
{
    private $name;

    public function __construct(string $name)
    {
        return $this->name = $name;
    }


    public function getName(): string
    {
        // todo implement
        return $this->name;
    }
}