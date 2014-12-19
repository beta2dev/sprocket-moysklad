<?php
/**
 * Created by IntelliJ IDEA.
 * User: Дмитрий Липеев
 * Date: 19.12.2014
 * Time: 14:37
 */
namespace b2\sprocket\moysklad\model;




class Extension {
    protected $opened;//="false"
    protected $loadName;//=""
    protected $consignorIndication;//=""
    protected $transportFacility;//=""
    protected $carNumber;

    /**
     * @return mixed
     */
    public function getOpened()
    {
        return $this->opened;
    }

    /**
     * @param mixed $opened
     */
    public function setOpened($opened)
    {
        $this->opened = $opened;
    }

    /**
     * @return mixed
     */
    public function getLoadName()
    {
        return $this->loadName;
    }

    /**
     * @param mixed $loadName
     */
    public function setLoadName($loadName)
    {
        $this->loadName = $loadName;
    }

    /**
     * @return mixed
     */
    public function getConsignorIndication()
    {
        return $this->consignorIndication;
    }

    /**
     * @param mixed $consignorIndication
     */
    public function setConsignorIndication($consignorIndication)
    {
        $this->consignorIndication = $consignorIndication;
    }

    /**
     * @return mixed
     */
    public function getTransportFacility()
    {
        return $this->transportFacility;
    }

    /**
     * @param mixed $transportFacility
     */
    public function setTransportFacility($transportFacility)
    {
        $this->transportFacility = $transportFacility;
    }

    /**
     * @return mixed
     */
    public function getCarNumber()
    {
        return $this->carNumber;
    }

    /**
     * @param mixed $carNumber
     */
    public function setCarNumber($carNumber)
    {
        $this->carNumber = $carNumber;
    }//=""/>






}