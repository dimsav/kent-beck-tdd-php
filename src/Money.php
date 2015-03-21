<?php

class Money
{
    protected $amount;

    public function equals($money)
    {
        return $this->amount == $money->amount;
    }
}