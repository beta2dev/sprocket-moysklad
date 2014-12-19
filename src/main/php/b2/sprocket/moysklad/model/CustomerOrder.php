<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 16:52
 */
namespace b2\sprocket\moysklad\model;

class CustomerOrder extends Order{
    /*
     * <?xml version="1.0" encoding="UTF-8"?>
<collection total="1" start="0" count="1000">
    <customerOrder reservedSum="0.0" targetAgentUuid="90fcf102-86cb-11e4-90a2-8ecb002dcabb"
                   sourceAgentUuid="90fe2b3f-86cb-11e4-90a2-8ecb002dcac0"
                   sourceStoreUuid="90fe2502-86cb-11e4-90a2-8ecb002dcabd" applicable="true"
                   moment="2014-12-18T18:56:00+03:00" targetAccountUuid="90fcf354-86cb-11e4-90a2-8ecb002dcabc"
                   sourceAccountUuid="90fe2cd5-86cb-11e4-90a2-8ecb002dcac1" payerVat="true" rate="1.0"
                   vatIncluded="true" created="2014-12-18T18:57:34.425+03:00" createdBy="admin@zloperdov"
                   employeeUuid="9101d9be-86cb-11e4-90a2-8ecb002dcac7" name="00001"
                   updated="2014-12-18T19:17:34.746+03:00" updatedBy="admin@zloperdov" readMode="SELF"
                   changeMode="SELF">
        <accountUuid>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountUuid>
        <accountId>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountId>
        <uuid>9602aaa6-86ce-11e4-90a2-8ecb002e394f</uuid>
        <externalcode>mRQRk-YggWuwcPFIj6Tnm3</externalcode>
        <description>заказ покупателей</description>
        <sum sum="200000.0" sumInCurrency="200000.0"/>
        <demandsUuid>
            <demandRef>b689f5ee-86ce-11e4-90a2-8ecb002e3f32</demandRef>
        </demandsUuid>
        <invoicesOutUuid/>
        <paymentsUuid/>
        <customerOrderPosition discount="0.0" quantity="1.0" consignmentUuid="2e76e0e4-86ce-11e4-90a2-8ecb002e29e4"
                               goodUuid="2e76dcb0-86ce-11e4-90a2-8ecb002e29e2" vat="0" readMode="SELF"
                               changeMode="SELF">
            <accountUuid>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountUuid>
            <accountId>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountId>
            <uuid>9602ec86-86ce-11e4-90a2-8ecb002e3950</uuid>
            <basePrice sum="200000.0" sumInCurrency="200000.0"/>
            <price sum="200000.0" sumInCurrency="200000.0"/>
            <things/>
            <reserve>0.0</reserve>
        </customerOrderPosition>
        <purchaseOrdersUuid/>
    </customerOrder>
</collection>
     */



    /**
     * @var uuid[]
     */
    private $demandsUuid;

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
    private $purchaseOrdersUuid;

    /**
     * @var uuid[]
     */
    private $customerOrderPosition;


}