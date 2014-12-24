<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 19:34
 */
namespace b2\sprocket\moysklad\model;

class Motion extends Entity{
    /**
     * @var moneyAmount
     */
    protected $basePrice;

    /**
     * @var moneyAmount
     */
    protected $price;

    /**
     * @var thing[]
     */
    protected $things;








//attributes ---------------------------
    /**
     * @var double required
     */
    protected $discount;

    /**
     * @var double required
     */
    protected $quantity;

    /**
     * @var uuid
     */
    protected $goodPackUuid;

    /**
     * @var uuid
     */
    protected $consignmentUuid;

    /**
     * @var uuid
     */
    protected $goodUuid;

    /**
     * @var uuid
     */
    protected $slotUuid;

    /**
     * @var long
     */
    protected $vat;

    /**
     * @return moneyAmount
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * @param moneyAmount $basePrice
     */
    public function setBasePrice($basePrice)
    {
        $this->basePrice = $basePrice;
    }

    /**
     * @return moneyAmount
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param moneyAmount $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return thing[]
     */
    public function getThings()
    {
        return $this->things;
    }

    /**
     * @param thing[] $things
     */
    public function setThings($things)
    {
        $this->things = $things;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param float $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return uuid
     */
    public function getGoodPackUuid()
    {
        return $this->goodPackUuid;
    }

    /**
     * @param uuid $goodPackUuid
     */
    public function setGoodPackUuid($goodPackUuid)
    {
        $this->goodPackUuid = $goodPackUuid;
    }

    /**
     * @return uuid
     */
    public function getConsignmentUuid()
    {
        return $this->consignmentUuid;
    }

    /**
     * @param uuid $consignmentUuid
     */
    public function setConsignmentUuid($consignmentUuid)
    {
        $this->consignmentUuid = $consignmentUuid;
    }

    /**
     * @return uuid
     */
    public function getGoodUuid()
    {
        return $this->goodUuid;
    }

    /**
     * @param uuid $goodUuid
     */
    public function setGoodUuid($goodUuid)
    {
        $this->goodUuid = $goodUuid;
    }

    /**
     * @return uuid
     */
    public function getSlotUuid()
    {
        return $this->slotUuid;
    }

    /**
     * @param uuid $slotUuid
     */
    public function setSlotUuid($slotUuid)
    {
        $this->slotUuid = $slotUuid;
    }

    /**
     * @return long
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param long $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }

}