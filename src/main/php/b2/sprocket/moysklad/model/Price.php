<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 26.12.2014
 * Time: 17:08
 */

namespace b2\sprocket\moysklad\model;


class Price extends Entity{
        protected $currencyUuid;
        protected $priceTypeUuid;
        protected $value;

    /**
     * @return mixed
     */
    public function getCurrencyUuid()
    {
        return $this->currencyUuid;
    }

    /**
     * @param mixed $currencyUuid
     */
    public function setCurrencyUuid($currencyUuid)
    {
        $this->currencyUuid = $currencyUuid;
    }

    /**
     * @return mixed
     */
    public function getPriceTypeUuid()
    {
        return $this->priceTypeUuid;
    }

    /**
     * @param mixed $priceTypeUuid
     */
    public function setPriceTypeUuid($priceTypeUuid)
    {
        $this->priceTypeUuid = $priceTypeUuid;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}