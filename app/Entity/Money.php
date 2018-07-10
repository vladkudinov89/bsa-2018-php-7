<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\SoftDeletes;

class Money
{
    use SoftDeletes;

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function wallet()
    {
        return $this->belongTo(Wallet::class);
    }

}
