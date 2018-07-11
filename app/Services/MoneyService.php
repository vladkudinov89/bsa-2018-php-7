<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 11.07.18
 * Time: 6:17
 */

namespace App\Services;


use App\Entity\Money;
use App\Requests\CreateMoneyRequest;

class MoneyService implements MoneyServiceInterface
{
    public function create(CreateMoneyRequest $request): Money
    {
        // TODO: Implement create() method.
        $money = new Money();
        $money->currency_id = $request->getCurrencyId();
        $money->wallet_id = $request->getWalletId();
        $money->amount = $request->getAmount();
        $money->save();

        return $money;

    }

    public function maxAmount(): float
    {
        // TODO: Implement maxAmount() method.
        return Money::max('amount');
    }

}