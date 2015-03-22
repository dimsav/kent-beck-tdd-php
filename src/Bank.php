<?php 

class Bank {

    /**
     * @param Expression $source
     * @param string     $to
     *
     * @return Expression
     */
    public function reduce(Expression $source, $to)
    {
        return $source->reduce($to);
    }
}