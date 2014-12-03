<?php
/**
 * Created by IntelliJ IDEA.
 * User: dlipeev
 * Date: 24.11.14
 * Time: 15:56
 */


namespace b2\sprocket\moysklad\api;

class Price extends MoyskladRec
{

    /**
    *
    * @var string uuid
    */
    private $currencyUuid;


    /**
    *
    * @var string
    */
    private $priceTypeUuid;


    /**
    *
    * @var float precision 0.1
    */
    private $value;



    /**
     * @param string $currencyUuid
     */
    public function setCurrencyUuid($currencyUuid)
    {
        $this->currencyUuid = $currencyUuid;
    }

    /**
     * @return string
     */
    public function getCurrencyUuid()
    {
        return $this->currencyUuid;
    }

    /**
     * @param string $priceTypeUuid
     */
    public function setPriceTypeUuid($priceTypeUuid)
    {
        $this->priceTypeUuid = $priceTypeUuid;
    }

    /**
     * @return string
     */
    public function getPriceTypeUuid()
    {
        return $this->priceTypeUuid;
    }

    /**
     * @param float $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    public function getNS(){
        return __NAMESPACE__;
    }



}

