<?php
/**
 * Created by IntelliJ IDEA.
 * User: Дмитрий Липеев
 * Date: 19.12.2014
 * Time: 14:37
 */
namespace b2\sprocket\moysklad\model;




class DemandExtension {
    protected $opened;//="false"
    protected $carrierUuid;
    protected $loadName;//=""
    protected $consignorIndication;//=""
    protected $transportFacility;//=""
    protected $carNumber;
    protected $goodPackQuantity;

    /**
     * @return mixed
     */
    public function getGoodPackQuantity()
    {
        return $this->goodPackQuantity;
    }

    /**
     * @param mixed $goodPackQuantity
     */
    public function setGoodPackQuantity($goodPackQuantity)
    {
        $this->goodPackQuantity = $goodPackQuantity;
    }



    /**
     * @return mixed
     */
    public function getCarrierUuid()
    {
        return $this->carrierUuid;
    }

    /**
     * @param mixed $carrierUuid
     */
    public function setCarrierUuid($carrierUuid)
    {
        $this->carrierUuid = $carrierUuid;
    }



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