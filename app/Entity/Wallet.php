<?php

namespace App\Entity;

use App\Entity\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wallet extends Model
{
    use SoftDeletes;

    protected $table = "wallet";

    public function money()
    {
        return $this->hasMany(Money::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
