<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 26.12.2014
 * Time: 12:11
 */

namespace b2\sprocket\moysklad\model;


class AbstractBarcode extends Entity{
    protected $barcode;//" type="xs:string"/>
    protected $barcodeType;

    /**
     * @return mixed
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param mixed $barcode
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    /**
     * @return mixed
     */
    public function getBarcodeType()
    {
        return $this->barcodeType;
    }

    /**
     * @param mixed $barcodeType
     */
    public function setBarcodeType($barcodeType)
    {
        $this->barcodeType = $barcodeType;
    }//" type="barcodeType"/>

}