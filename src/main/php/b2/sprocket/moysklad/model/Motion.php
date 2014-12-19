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

}