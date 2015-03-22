<?php 

class Sum implements Expression {

    /**
     * @var Expression
     */
    public $augend;

    /**
     * @var Expression
     */
    public $addend;

    public function __construct(Expression $augend, Expression $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    public function reduce(Bank $bank, $to)
    {
        $amount = $this->augend->reduce($bank, $to)->amount + $this->addend->reduce($bank, $to)->amount;
        return new Money($amount, $to);
    }

    /**
     * @param Expression $addend
     *
     * @return Expression
     */
    public function plus(Expression $addend)
    {
        return new Sum($this, $addend);
    }

}