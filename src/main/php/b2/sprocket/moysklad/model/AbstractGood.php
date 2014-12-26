<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 25.12.2014
 * Time: 18:59
 */

namespace b2\sprocket\moysklad\model;


class AbstractGood extends goodFolder{
        protected $minPrice;//" type="xs:double" use="required"/>
        protected $uomUuid;//" type="xs:IDREF"/>
        protected $countryUuid;//" type="xs:IDREF"/>
        protected $supplierUuid;//" type="xs:IDREF"/>
        protected $salePrice;//" type="xs:double"/>
        protected $saleCurrencyUuid;//" type="xs:IDREF"/>
        protected $buyCurrencyUuid;//" type="xs:IDREF"/>

        /**
         * @var barcode[]
         */
        protected $barcode;

        /**
         * @var GoodPrices
         */
        protected $salePrices;

    /**
     * @return mixed
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * @param mixed $minPrice
     */
    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;
    }

    /**
     * @return mixed
     */
    public function getUomUuid()
    {
        return $this->uomUuid;
    }

    /**
     * @param mixed $uomUuid
     */
    public function setUomUuid($uomUuid)
    {
        $this->uomUuid = $uomUuid;
    }

    /**
     * @return mixed
     */
    public function getCountryUuid()
    {
        return $this->countryUuid;
    }

    /**
     * @param mixed $countryUuid
     */
    public function setCountryUuid($countryUuid)
    {
        $this->countryUuid = $countryUuid;
    }

    /**
     * @return mixed
     */
    public function getSupplierUuid()
    {
        return $this->supplierUuid;
    }

    /**
     * @param mixed $supplierUuid
     */
    public function setSupplierUuid($supplierUuid)
    {
        $this->supplierUuid = $supplierUuid;
    }

    /**
     * @return mixed
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * @param mixed $salePrice
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;
    }

    /**
     * @return mixed
     */
    public function getSaleCurrencyUuid()
    {
        return $this->saleCurrencyUuid;
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
    public function getBuyCurrencyUuid()
    {
        return $this->buyCurrencyUuid;
    }

    /**
     * @param mixed $buyCurrencyUuid
     */
    public function setBuyCurrencyUuid($buyCurrencyUuid)
    {
        $this->buyCurrencyUuid = $buyCurrencyUuid;
    }

    /**
     * @return barcode[]
     */
    public function getBarcode()
    {
        return $this->barcodes;
    }

    /**
     * @param barcode[] $barcodes
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    /**
     * @return GoodPrices
     */
    public function getSalePrices()
    {
        return $this->salePrices;
    }

    /**
     * @param GoodPrices $salePrices
     */
    public function setSalePrices($salePrices)
    {
        $this->salePrices = $salePrices;
    }

}