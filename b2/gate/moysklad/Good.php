<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 24.11.14
 * Time: 11:02
 */

namespace b2\gate\moysklad;

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
    private $salesPrices;


    /**
     *
     * @var GoodImage[]
     */
    private $images;





}