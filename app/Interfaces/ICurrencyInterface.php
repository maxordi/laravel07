<?php


namespace App\Interfaces;


interface ICurrencyInterface
{
    public function getCurrency(string $curency, string $date);

    public function getAllCurrenciesOnDate(string $date);
}
