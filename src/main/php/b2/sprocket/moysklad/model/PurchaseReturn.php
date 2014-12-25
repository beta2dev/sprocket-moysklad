<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 16:56
 */
namespace b2\sprocket\moysklad\model;

class PurchaseReturn extends ComingOutOperation{
/*
 * <?xml version="1.0" encoding="UTF-8"?>
<collection total="1" start="0" count="1000">
    <purchaseReturn supplyUuid="72b8a87d-86ce-11e4-90a2-8ecb002e3392"
                    targetAgentUuid="90fe27cf-86cb-11e4-90a2-8ecb002dcabe"
                    sourceAgentUuid="90fcf102-86cb-11e4-90a2-8ecb002dcabb"
                    sourceStoreUuid="90fe2502-86cb-11e4-90a2-8ecb002dcabd"
                    applicable="true"
                    moment="2014-12-18T18:56:00+03:00"
                    targetAccountUuid="90fe29d6-86cb-11e4-90a2-8ecb002dcabf"
                    sourceAccountUuid="90fcf354-86cb-11e4-90a2-8ecb002dcabc"
                    payerVat="true" rate="1.0"
                    vatIncluded="true"
                    created="2014-12-18T18:56:44.812+03:00" createdBy="admin@zloperdov" name="00001"
                    updated="2014-12-18T19:17:11.386+03:00" updatedBy="admin@zloperdov" readMode="SELF"
                    changeMode="SELF">
        <accountUuid>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountUuid>
        <accountId>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountId>
        <uuid>7870632e-86ce-11e4-90a2-8ecb002e3458</uuid>
        <externalcode>w1wynQ3igwK8eHLYLNQaZ1</externalcode>
        <description>возврат поставщикам</description>
        <sum sum="800000.0" sumInCurrency="800000.0"/>
        <paymentsUuid/>

        <purchaseReturnPosition discount="0.0" quantity="4.0" consignmentUuid="2e76e0e4-86ce-11e4-90a2-8ecb002e29e4"
                                goodUuid="2e76dcb0-86ce-11e4-90a2-8ecb002e29e2" vat="0" readMode="SELF"
                                changeMode="SELF">
            <accountUuid>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountUuid>
            <accountId>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountId>
            <uuid>7870abce-86ce-11e4-90a2-8ecb002e3459</uuid>
            <basePrice sum="200000.0" sumInCurrency="200000.0"/>
            <price sum="200000.0" sumInCurrency="200000.0"/>
            <things/>
        </purchaseReturnPosition>

    </purchaseReturn>
</collection>
 */

    //--------------------------------------------------------------------------------------------
    //attributes
    /**
     * @var uuid
     * XS
     */
    protected $factureUuid;

    /**
     * @var uuid
     * XS
     */
    protected $supplyUuid;

    //--------------------------------------------------------------------------------------------
    //properties

    /**
     * @var uuid[]
     */
    protected $paymentsUuid;

    /**
     * @var purchaseReturnPosition[]
     */
    protected $purchaseReturnPosition;

    /**
     * @return uuid
     */
    public function getFactureUuid()
    {
        return $this->factureUuid;
    }

    /**
     * @param uuid $factureUuid
     */
    public function setFactureUuid($factureUuid)
    {
        $this->factureUuid = $factureUuid;
    }

    /**
     * @return uuid
     */
    public function getSupplyUuid()
    {
        return $this->supplyUuid;
    }

    /**
     * @param uuid $supplyUuid
     */
    public function setSupplyUuid($supplyUuid)
    {
        $this->supplyUuid = $supplyUuid;
    }

    /**
     * @return uuid[]
     */
    public function getPaymentsUuid()
    {
        return $this->paymentsUuid;
    }

    /**
     * @param uuid[] $paymentsUuid
     */
    public function setPaymentsUuid($paymentsUuid)
    {
        $this->paymentsUuid = $paymentsUuid;
    }

    /**
     * @return purchaseReturnPosition[]
     */
    public function getPurchaseReturnPosition()
    {
        return $this->purchaseReturnPosition;
    }

    /**
     * @param purchaseReturnPosition[] $purchaseReturnPosition
     */
    public function setPurchaseReturnPosition($purchaseReturnPosition)
    {
        $this->purchaseReturnPosition = $purchaseReturnPosition;
    }




}