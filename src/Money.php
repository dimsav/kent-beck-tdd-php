<?php

class Money
{
    protected $amount;
    protected $currency;

    public function currency()
    {
        return $this->currency;
    }

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

    public function times($multiplier)
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function equals(Money $money)
    {
        return $this->amount == $money->amount
        && $this->currency() == $money->currency();
    }
}