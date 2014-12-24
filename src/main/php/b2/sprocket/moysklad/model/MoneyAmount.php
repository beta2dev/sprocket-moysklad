<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 19:25
 */
namespace b2\sprocket\moysklad\model;

class MoneyAmount {

    /**
     * @var double
     */
    protected $sum;

    /**
     * @var double
     */
    protected $sumInCurrency;

    /**
     * @return float
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * @param float $sum
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
    }

    /**
     * @return float
     */
    public function getSumInCurrency()
    {
        return $this->sumInCurrency;
    }

    /**
     * @param float $sumInCurrency
     */
    public function setSumInCurrency($sumInCurrency)
    {
        $this->sumInCurrency = $sumInCurrency;
    }
}