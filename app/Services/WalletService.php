<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 11.07.18
 * Time: 5:51
 */

namespace App\Services;


use App\Entity\Currency;
use App\Entity\Money;
use App\Entity\Wallet;
use App\Requests\CreateWalletRequest;
use Illuminate\Support\Collection;

class WalletService implements WalletServiceInterface
{
    public function findCurrencies(int $walletId): Collection
    {
        // TODO: Implement findCurrencies() method.
        return Currency::whereHas('money', function ($query) use ($walletId){
            $query->where('wallet_id', $walletId);
        })->get();
    }

    public function findByUser(int $userId): ?Wallet
    {
        // TODO: Implement findByUser() method.
        return Wallet::where('user_id', $userId)->first();
    }

    public function create(CreateWalletRequest $request): Wallet
    {
        // TODO: Implement create() method.
        $userId = $request->getUserId();
        $wallet = Wallet::where('user_id' , $userId)->first();

        if($wallet != null){
            throw new \LogicException();
        }

        $wallet = new Wallet();
        $wallet->user_id = $userId;
        $wallet->save();

        return $wallet;

    }
}