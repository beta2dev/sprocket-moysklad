<?php




namespace b2\sprocket\moysklad\api;
/**
 * Class CustomerOrderPosition
 *
 * позиция в заказе покупателя
 *
 * <customerOrderPosition discount="0.0" quantity="2.0" consignmentUuid="e2fd0f61-6c23-11e4-90a2-8ecb00342f68"
    goodUuid="e2fd0aff-6c23-11e4-90a2-8ecb00342f66" vat="18" readMode="SELF"
    changeMode="SELF">
    <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
    <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
    <uuid>304ff86d-6fcb-11e4-7a07-673d0017b0bf</uuid>
    <basePrice sum="55.0" sumInCurrency="55.0"/>
    <price sum="55.0" sumInCurrency="55.0"/>
    <things/>
    <reserve>0.0</reserve>
    </customerOrderPosition>
 */
class CustomerOrderPosition extends MoyskladRec
{
    protected $discount;//="0.0"

    /**
     * @var string
     */
    protected $quantity;//="2.0"

    /**
     * @var string
     */
    protected $consignmentUuid;//="e2fd0f61-6c23-11e4-90a2-8ecb00342f68"

    /**
     * @var string
     */
    protected $goodUuid;//="e2fd0aff-6c23-11e4-90a2-8ecb00342f66"

    /**
     * @var int
     */
    protected $vat;//="18"

    /**
     * @var string
     */
    protected $readMode;//="SELF"

    /**
     * @var string
     */
    protected $changeMode;//="SELF">

    /**
     * @var string
     */
    protected $accountUuid;//>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>

    /**
     * @var string
     */
    protected $accountId;//>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>

    /**
     * @var string
     */
    protected $uuid;//>304ff86d-6fcb-11e4-7a07-673d0017b0bf</uuid>

    /**
     * @var string
     */
    protected $basePriceSum="0.0";//

    /**
     * @var string
     */
    protected $basePricesumInCurrency="0.0";///>

    /**
     * @var string
     */
    protected $priceSum="0.0";

    /**
     * @var string
     */
    protected $priceSumInCurrency="0.0";//>

    /**
     * @var Thing[]
     */
    protected $things;///>

    /**
     * @var string
     */
    protected $reserve;

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return string
     */
    public function getAccountUuid()
    {
        return $this->accountUuid;
    }

    /**
     * @param string $accountUuid
     */
    public function setAccountUuid($accountUuid)
    {
        $this->accountUuid = $accountUuid;
    }

    /**
     * @return string
     */
    public function getBasePriceSum()
    {
        return $this->basePriceSum;
    }

    /**
     * @param string $basePriceSum
     */
    public function setBasePriceSum($basePriceSum)
    {
        $this->basePriceSum = $basePriceSum;
    }

    /**
     * @return string
     */
    public function getBasePricesumInCurrency()
    {
        return $this->basePricesumInCurrency;
    }

    /**
     * @param string $basePricesumInCurrency
     */
    public function setBasePricesumInCurrency($basePricesumInCurrency)
    {
        $this->basePricesumInCurrency = $basePricesumInCurrency;
    }

    /**
     * @return string
     */
    public function getChangeMode()
    {
        return $this->changeMode;
    }

    /**
     * @param string $changeMode
     */
    public function setChangeMode($changeMode)
    {
        $this->changeMode = $changeMode;
    }

    /**
     * @return string
     */
    public function getConsignmentUuid()
    {
        return $this->consignmentUuid;
    }

    /**
     * @param string $consignmentUuid
     */
    public function setConsignmentUuid($consignmentUuid)
    {
        $this->consignmentUuid = $consignmentUuid;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param mixed $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return string
     */
    public function getGoodUuid()
    {
        return $this->goodUuid;
    }

    /**
     * @param string $goodUuid
     */
    public function setGoodUuid($goodUuid)
    {
        $this->goodUuid = $goodUuid;
    }

    /**
     * @return string
     */
    public function getPriceSum()
    {
        return $this->priceSum;
    }

    /**
     * @param string $priceSum
     */
    public function setPriceSum($priceSum)
    {
        $this->priceSum = $priceSum;
    }

    /**
     * @return string
     */
    public function getPriceSumInCurrency()
    {
        return $this->priceSumInCurrency;
    }

    /**
     * @param string $priceSumInCurrency
     */
    public function setPriceSumInCurrency($priceSumInCurrency)
    {
        $this->priceSumInCurrency = $priceSumInCurrency;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getReadMode()
    {
        return $this->readMode;
    }

    /**
     * @param string $readMode
     */
    public function setReadMode($readMode)
    {
        $this->readMode = $readMode;
    }

    /**
     * @return string
     */
    public function getReserve()
    {
        return $this->reserve;
    }

    /**
     * @param string $reserve
     */
    public function setReserve($reserve)
    {
        $this->reserve = $reserve;
    }

    /**
     * @return Thing[]
     */
    public function getThings()
    {
        return $this->things;
    }

    /**
     * @param Thing[] $things
     */
    public function setThings($things)
    {
        $this->things = $things;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * @return int
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param int $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }//>0.0</reserve>



}
