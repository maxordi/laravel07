<?php


namespace App\Services;


use App\Interfaces\ICurrencyInterface;

class PriorBank implements ICurrencyInterface
{

    public function getCurrency(string $curency, string $date)
    {
        dump(333);
    }

    public function getAllCurrenciesOnDate(string $date)
    {
        dump(4444);
    }
}
