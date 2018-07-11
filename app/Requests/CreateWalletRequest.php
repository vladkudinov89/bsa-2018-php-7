<?php

namespace App\Requests;

class CreateWalletRequest
{
    // todo implement

    private $userId;

    public function __construct(int $userId)
    {
        return $this->userId = $userId;
    }


    public function getUserId(): int
    {
        return $this->userId;
    }
}

