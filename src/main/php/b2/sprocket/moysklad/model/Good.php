<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 25.12.2014
 * Time: 18:36
 */

namespace b2\sprocket\moysklad\model;


class Good extends AbstractGood{
        protected $isSerialTrackable;
        protected $buyPrice;
        protected $minimumBalance;
        protected $weight;
        protected $volume;

        protected $images ;
        protected $preferences ;
        protected $pack ;

    /**
     * @return mixed
     */
    public function getIsSerialTrackable()
    {
        return $this->isSerialTrackable;
    }

    /**
     * @param mixed $isSerialTrackable
     */
    public function setIsSerialTrackable($isSerialTrackable)
    {
        $this->isSerialTrackable = $isSerialTrackable;
    }

    /**
     * @return mixed
     */
    public function getBuyPrice()
    {
        return $this->buyPrice;
    }

    /**
     * @param mixed $buyPrice
     */
    public function setBuyPrice($buyPrice)
    {
        $this->buyPrice = $buyPrice;
    }

    /**
     * @return mixed
     */
    public function getMinimumBalance()
    {
        return $this->minimumBalance;
    }

    /**
     * @param mixed $minimumBalance
     */
    public function setMinimumBalance($minimumBalance)
    {
        $this->minimumBalance = $minimumBalance;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param mixed $volume
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * @return mixed
     */
    public function getPreferences()
    {
        return $this->preferences;
    }

    /**
     * @param mixed $preferences
     */
    public function setPreferences($preferences)
    {
        $this->preferences = $preferences;
    }

    /**
     * @return mixed
     */
    public function getPack()
    {
        return $this->pack;
    }

    /**
     * @param mixed $pack
     */
    public function setPack($pack)
    {
        $this->pack = $pack;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param mixed $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }

    /**
     * @return mixed
     */
    public function getPreference()
    {
        return $this->preference;
    }

    /**
     * @param mixed $preference
     */
    public function setPreference($preference)
    {
        $this->preference = $preference;
    }




}