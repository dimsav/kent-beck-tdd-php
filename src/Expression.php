<?php

interface Expression
{
    public function reduce(Bank $bank, $to);
}