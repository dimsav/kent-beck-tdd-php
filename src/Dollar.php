<?php

class Dollar extends Money
{
    public function __construct($amount, $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function currency()
    {
        return $this->currency;
    }
}