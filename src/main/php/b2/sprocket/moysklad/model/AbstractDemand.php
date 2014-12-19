<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 18:35
 */
namespace b2\sprocket\moysklad\model;

class AbstractDemand extends ComingOutOperation{
/*
 *     <demand
 *      customerOrderUuid="9602aaa6-86ce-11e4-90a2-8ecb002e394f"
            targetAgentUuid="90fe2b3f-86cb-11e4-90a2-8ecb002dcac0"
            sourceAgentUuid="90fcf102-86cb-11e4-90a2-8ecb002dcabb"
            sourceStoreUuid="90fe2502-86cb-11e4-90a2-8ecb002dcabd" applicable="true" moment="2014-12-18T18:58:00+03:00"
            targetAccountUuid="90fe2cd5-86cb-11e4-90a2-8ecb002dcac1"
            sourceAccountUuid="90fcf354-86cb-11e4-90a2-8ecb002dcabc" payerVat="true" rate="1.0" vatIncluded="true"
            created="2014-12-18T18:58:28.998+03:00" createdBy="admin@zloperdov"
            employeeUuid="9101d9be-86cb-11e4-90a2-8ecb002dcac7" name="00001" updated="2014-12-18T19:18:22.909+03:00"
            updatedBy="admin@zloperdov" readMode="SELF" changeMode="SELF">
        <accountUuid>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountUuid>
        <accountId>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountId>
        <uuid>b689f5ee-86ce-11e4-90a2-8ecb002e3f32</uuid>
        <externalcode>gyOv_11Wjz6nlq6KeMTy12</externalcode>
        <description>отгрузка покупателям</description>
        <sum sum="200000.0" sumInCurrency="200000.0"/>
        <invoicesOutUuid/>
        <paymentsUuid/>
        <shipmentOut discount="0.0" quantity="1.0" consignmentUuid="2e76e0e4-86ce-11e4-90a2-8ecb002e29e4"
                     goodUuid="2e76dcb0-86ce-11e4-90a2-8ecb002e29e2" vat="0" readMode="SELF" changeMode="SELF">
            <accountUuid>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountUuid>
            <accountId>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountId>
            <uuid>b68a7777-86ce-11e4-90a2-8ecb002e3f34</uuid>
            <basePrice sum="200000.0" sumInCurrency="200000.0"/>
            <price sum="200000.0" sumInCurrency="200000.0"/>
            <things/>
        </shipmentOut>
        <salesReturnsUuid>
            <salesReturnRef>b8c2edca-86ce-11e4-90a2-8ecb002e3fb7</salesReturnRef>
        </salesReturnsUuid>
    </demand>
 */

    //attributes -------------------------------
    /**
     * @var uuid
     * XS
     */
    private $customerOrderUuid;//" type="xs:IDREF"/>

    /**
     * @var uuid
     * XS
     */
    private $factureUuid;



    //properties
    /**
     * @var uuid[]
     */
    private $invoicesOutUuid;


    /**
     * @var uuid[]
     */
    private $paymentsUuid;


    /**
     * @var uuid[]
     */
    private $salesReturnsUuid;


    /**
     * @var ShipmentOut[]
     */
    private $shipmentOut;




























}