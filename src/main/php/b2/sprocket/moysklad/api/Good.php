<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 24.11.14
 * Time: 11:02
 */

namespace b2\sprocket\moysklad\api;

class Good extends MoyskladObject
{

/**
 * Учёт по серийным нмоерам товаров
 * @var bool
 */
private $isSerialTrackable;

    /**
    *
    * @internal example $buyPrice="5.0"
    * @var
    */
    private $buyPrice;

    /**
    *
    * @internal example $minimumBalance="5.0"
    * @var float
    */

    private $minimumBalance;

    /**
    *
    * @var float precision is 0.1
    */
    private $weight;

    /**
    *
    * @var float precision is 0.1
    */
    private $volume;

    /**
    *
    * @var float precision is 0.1
    */
    private $minPrice;

    /**
    *
    * Единица измерения
    * @var string uuid
    */
    private $uomUuid;

    /**
    *
    * @var uuid
    */
    private $countryUuid;

    /**
    *
    * @var uuid
    */
    private $supplierUuid;

    /**
    *
    * @var float precision is 0.1
    */
    private $salePrice;

    /**
    *
    * @var
    */
    private $saleCurrencyUuid;

    /**
    *
    * @var
    */
    private $buyCurrencyUuid;

    /**
    *
    * @var bool
    */
    private $archived;

    /**
    *
    * @internal example $productCode="артикул 1"
    * @var string
    */
    private $productCode;

    /**
    * @internal example $vat="10"
    * @var int НДС  процентах???
    */
    private $vat;

    /**
    *
    * @var string
    */
    private $name;

    /**
     *
     * @var string
     */
    private $account;

    /**
     *
     * @var string
     */
    private $code;


    /**
     * @internal example $externalcode="mnJMlaZnhX6BMK5tT0-Am0"
     * @var string
     */
    private $externalcode;


    /**
     * Описание
     * @var string
     */
    private $description;

    /**
    * Штрихкод,
    *
    * @var Barcode
    */
    private $barcode;


    /**
    *
    * @var Price[]
    */
    private $salePrices;


    /**
     *
     * @var GoodImage[]
     */
    private $images;

    /**
     * @param string $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param boolean $archived
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;
    }

    /**
     * @return boolean
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * @param \Barcode $barcode
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    /**
     * @return \Barcode
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param mixed $buyCurrencyUuid
     */
    public function setBuyCurrencyUuid($buyCurrencyUuid)
    {
        $this->buyCurrencyUuid = $buyCurrencyUuid;
    }

    /**
     * @return mixed
     */
    public function getBuyCurrencyUuid()
    {
        return $this->buyCurrencyUuid;
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
    public function getBuyPrice()
    {
        return $this->buyPrice;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param \uuid $countryUuid
     */
    public function setCountryUuid($countryUuid)
    {
        $this->countryUuid = $countryUuid;
    }

    /**
     * @return \uuid
     */
    public function getCountryUuid()
    {
        return $this->countryUuid;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $externalcode
     */
    public function setExternalcode($externalcode)
    {
        $this->externalcode = $externalcode;
    }

    /**
     * @return string
     */
    public function getExternalcode()
    {
        return $this->externalcode;
    }

    /**
     * @param \GoodImage[] $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }

    /**
     * @return \GoodImage[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param boolean $isSerialTrackable
     */
    public function setIsSerialTrackable($isSerialTrackable)
    {
        $this->isSerialTrackable = $isSerialTrackable;
    }

    /**
     * @return boolean
     */
    public function getIsSerialTrackable()
    {
        return $this->isSerialTrackable;
    }

    /**
     * @param float $minPrice
     */
    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;
    }

    /**
     * @return float
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * @param float $minimumBalance
     */
    public function setMinimumBalance($minimumBalance)
    {
        $this->minimumBalance = $minimumBalance;
    }

    /**
     * @return float
     */
    public function getMinimumBalance()
    {
        return $this->minimumBalance;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $productCode
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param mixed $saleCurrencyUuid
     */
    public function setSaleCurrencyUuid($saleCurrencyUuid)
    {
        $this->saleCurrencyUuid = $saleCurrencyUuid;
    }

    /**
     * @return mixed
     */
    public function getSaleCurrencyUuid()
    {
        return $this->saleCurrencyUuid;
    }

    /**
     * @param float $salePrice
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;
    }

    /**
     * @return float
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * @param \Price[] $salesPrices
     */
    public function setSalePrices($salePrices)
    {
        $this->salePrices = $salePrices;
    }

    /**
     * @return \Price[]
     */
    public function getSalePrices()
    {
        return $this->salePrices;
    }

    /**
     * @param \uuid $supplierUuid
     */
    public function setSupplierUuid($supplierUuid)
    {
        $this->supplierUuid = $supplierUuid;
    }

    /**
     * @return \uuid
     */
    public function getSupplierUuid()
    {
        return $this->supplierUuid;
    }

    /**
     * @param string $uomUuid
     */
    public function setUomUuid($uomUuid)
    {
        $this->uomUuid = $uomUuid;
    }

    /**
     * @return string
     */
    public function getUomUuid()
    {
        return $this->uomUuid;
    }

    /**
     * @param int $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    /**
     * @return int
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param float $volume
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param float $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }





}