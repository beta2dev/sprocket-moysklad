<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 17:30
 */
namespace b2\sprocket\moysklad\model;

class AbstractSalesReturn extends ComingInOperation{

    //--------------------------------------------------------------------------------------------
    //attributes
    /**
     * @var uuid
     */
    protected $demandUuid;//="b689f5ee-86ce-11e4-90a2-8ecb002e3f32"


    //--------------------------------------------------------------------------------------------
    //properties
    /**
     * @var uuid[]
     */
    private $lossesUuid;


    /**
     * @var uuid[]
     */
    private $paymentsUuid;

    /**
     * @var SalesReturnPosition[]
     */
    private $salesReturnPosition;

    /**
     * @return uuid
     */
    public function getDemandUuid()
    {
        return $this->demandUuid;
    }

    /**
     * @param uuid $demandUuid
     */
    public function setDemandUuid($demandUuid)
    {
        $this->demandUuid = $demandUuid;
    }

    /**
     * @return uuid[]
     */
    public function getLossesUuid()
    {
        return $this->lossesUuid;
    }

    /**
     * @param uuid[] $lossesUuid
     */
    public function setLossesUuid($lossesUuid)
    {
        $this->lossesUuid = $lossesUuid;
    }

    /**
     * @return uuid[]
     */
    public function getPaymentsUuid()
    {
        return $this->paymentsUuid;
    }

    /**
     * @param uuid[] $paymentsUuid
     */
    public function setPaymentsUuid($paymentsUuid)
    {
        $this->paymentsUuid = $paymentsUuid;
    }

    /**
     * @return SalesReturnPosition[]
     */
    public function getSalesReturnPosition()
    {
        return $this->salesReturnPosition;
    }

    /**
     * @param SalesReturnPosition[] $salesReturnPosition
     */
    public function setSalesReturnPosition($salesReturnPosition)
    {
        $this->salesReturnPosition = $salesReturnPosition;
    }
}