<?php

namespace App\Entity;

use App\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wallet
{
    use SoftDeletes;

    public function money()
    {
        return $this->hasMany(Money::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
