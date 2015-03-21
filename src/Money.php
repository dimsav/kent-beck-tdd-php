<?php

abstract class Money
{
    protected $amount;
    protected $currency;

    abstract public function currency();

    public function __construct($amount, $currency)
    {
        $this->amount   = $amount;
        $this->currency = $currency;
    }

    public static function dollar($amount)
    {
        return new Dollar($amount, 'USD');
    }

    public static function franc($amount)
    {
        return new Franc($amount, 'CHF');
    }

    public function equals($money)
    {
        return $this->amount == $money->amount && get_class($this) == get_class($money);
    }
}