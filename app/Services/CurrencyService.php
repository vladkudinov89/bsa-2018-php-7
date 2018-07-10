<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 10.07.18
 * Time: 17:17
 */

namespace App\Services;

use App\Entity\Currency;
use App\Requests\CreateCurrencyRequest;

class CurrencyService implements CurrencyServiceInterface
{
    public function create(CreateCurrencyRequest $request): Currency
    {
        $currency = new Currency();
        $currency->name = $request->getName();
        $currency->save();

        return $currency;
    }
}