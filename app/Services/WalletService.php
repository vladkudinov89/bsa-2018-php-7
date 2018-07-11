<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 11.07.18
 * Time: 5:51
 */

namespace App\Services;


use App\Entity\Wallet;
use App\Requests\CreateWalletRequest;
use Illuminate\Support\Collection;

class WalletService implements WalletServiceInterface
{
    public function findCurrencies(int $walletId): Collection
    {
        // TODO: Implement findCurrencies() method.
    }

    public function findByUser(int $userId): ?Wallet
    {
        // TODO: Implement findByUser() method.
        return Wallet::find($userId);
    }

    public function create(CreateWalletRequest $request): Wallet
    {
        // TODO: Implement create() method.
    }
}