<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 19:27
 */
namespace b2\sprocket\moysklad\model;

class ShipmentIn extends ComingIn{
/*
 *
<shipmentIn overhead="0.0" discount="0.0" quantity="4.0" consignmentUuid="2e76e0e4-86ce-11e4-90a2-8ecb002e29e4"
                    goodUuid="2e76dcb0-86ce-11e4-90a2-8ecb002e29e2" vat="0" readMode="SELF" changeMode="SELF">
            <accountUuid>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountUuid>
            <accountId>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountId>
            <uuid>72b8fb45-86ce-11e4-90a2-8ecb002e3394</uuid>
            <basePrice sum="200000.0" sumInCurrency="200000.0"/>
            <price sum="200000.0" sumInCurrency="200000.0"/>
            <things/>
        </shipmentIn> */

    //attributes ----------------
    /**
     * @var double
     */
    protected $overhead;

    /**
     * @return float
     */
    public function getOverhead()
    {
        return $this->overhead;
    }

    /**
     * @param float $overhead
     */
    public function setOverhead($overhead)
    {
        $this->overhead = $overhead;
    }

}