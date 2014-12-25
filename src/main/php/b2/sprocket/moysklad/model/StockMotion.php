<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 19:30
 */
namespace b2\sprocket\moysklad\model;
class StockMotion extends Motion {
    //attributes
    /**
     * @var uid
     */
    protected $countryUuid;

    /**
     * @var uid
     */
    protected $gtdUuid;

    /**
     * @return uid
     */
    public function getCountryUuid()
    {
        return $this->countryUuid;
    }

    /**
     * @param uid $countryUuid
     */
    public function setCountryUuid($countryUuid)
    {
        $this->countryUuid = $countryUuid;
    }

    /**
     * @return uid
     */
    public function getGtdUuid()
    {
        return $this->gtdUuid;
    }

    /**
     * @param uid $gtdUuid
     */
    public function setGtdUuid($gtdUuid)
    {
        $this->gtdUuid = $gtdUuid;
    }



}