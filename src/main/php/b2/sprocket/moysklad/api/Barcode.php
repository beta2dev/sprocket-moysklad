<?php


namespace b2\sprocket\moysklad\api;

class Barcode extends MoyskladRec
{
    /**
     * @internal example $barcode="20000011"
     * @var int
     */
    private $barcode;

    /**
     * @internal example $barcodeType="EAN8"
     * @var string
     */
    private $barcodeType;

    /**
    * @internal example $barcodeReadMode="ALL"
    * @var string
    */
    private $barcodeReadMode;

    /**
     * @param int $barcode
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    /**
     * @return int
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param string $barcodeReadMode
     */
    public function setBarcodeReadMode($barcodeReadMode)
    {
        $this->barcodeReadMode = $barcodeReadMode;
    }

    /**
     * @return string
     */
    public function getBarcodeReadMode()
    {
        return $this->barcodeReadMode;
    }

    /**
     * @param string $barcodeType
     */
    public function setBarcodeType($barcodeType)
    {
        $this->barcodeType = $barcodeType;
    }

    /**
     * @return string
     */
    public function getBarcodeType()
    {
        return $this->barcodeType;
    }




}
