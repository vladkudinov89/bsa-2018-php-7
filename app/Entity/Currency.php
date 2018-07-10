<?php

namespace App\Entity;

class Currency
{
    public function money()
    {
        return $this->hasMany(Money::class);
    }
}
