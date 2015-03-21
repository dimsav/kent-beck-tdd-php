<?php

abstract class Money
{
    protected $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public static function dollar($amount)
    {
        return new Dollar($amount);
    }

    public static function franc($amount)
    {
        return new Franc($amount);
    }

    public function equals($money)
    {
        return $this->amount == $money->amount && get_class($this) == get_class($money);
    }
}