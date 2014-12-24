<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 19:48
 */
namespace b2\sprocket\moysklad\model;

class OrderPosition extends Motion {
    /**
     * @var double
     */
    protected $reserve;

    /**
     * @return float
     */
    public function getReserve()
    {
        return $this->reserve;
    }

    /**
     * @param float $reserve
     */
    public function setReserve($reserve)
    {
        $this->reserve = $reserve;
    }
}