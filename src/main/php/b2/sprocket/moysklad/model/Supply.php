<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 16:56
 */
namespace b2\sprocket\moysklad\model;

class Supply extends ComingInOperation{


    /*
     * <?xml version="1.0" encoding="UTF-8"?>
<collection total="1" start="0" count="1000">
    <supply incomingNumber="" overheadDistribution="BY_PRICE" purchaseOrderUuid="654fda14-86ce-11e4-90a2-8ecb002e30ac"
            targetAgentUuid="90fcf102-86cb-11e4-90a2-8ecb002dcabb"
            sourceAgentUuid="90fe27cf-86cb-11e4-90a2-8ecb002dcabe"
            targetStoreUuid="90fe2502-86cb-11e4-90a2-8ecb002dcabd" applicable="true" moment="2014-12-18T18:56:00+03:00"
            targetAccountUuid="90fcf354-86cb-11e4-90a2-8ecb002dcabc"
            sourceAccountUuid="90fe29d6-86cb-11e4-90a2-8ecb002dcabf" payerVat="true" rate="1.0" vatIncluded="true"
            created="2014-12-18T18:56:35.219+03:00" createdBy="admin@zloperdov" name="00001"
            updated="2014-12-18T19:15:37.709+03:00" updatedBy="admin@zloperdov" readMode="SELF" changeMode="SELF">
        <accountUuid>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountUuid>
        <accountId>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountId>
        <uuid>72b8a87d-86ce-11e4-90a2-8ecb002e3392</uuid>
        <externalcode>JfNdBhinhlG6SO5PoV-3L1</externalcode>
        <description>закупка - приёмка</description>
        <sum sum="800000.0" sumInCurrency="800000.0"/>
        <invoicesInUuid/>
        <overhead sum="0.0" sumInCurrency="0.0"/>
        <paymentsUuid/>
        <shipmentIn overhead="0.0" discount="0.0" quantity="4.0" consignmentUuid="2e76e0e4-86ce-11e4-90a2-8ecb002e29e4"
                    goodUuid="2e76dcb0-86ce-11e4-90a2-8ecb002e29e2" vat="0" readMode="SELF" changeMode="SELF">
            <accountUuid>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountUuid>
            <accountId>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountId>
            <uuid>72b8fb45-86ce-11e4-90a2-8ecb002e3394</uuid>
            <basePrice sum="200000.0" sumInCurrency="200000.0"/>
            <price sum="200000.0" sumInCurrency="200000.0"/>
            <things/>
        </shipmentIn>
        <purchaseReturnsUuid>
            <purchaseReturnRef>7870632e-86ce-11e4-90a2-8ecb002e3458</purchaseReturnRef>
        </purchaseReturnsUuid>
    </supply>
</collection>
     */

    //--------------------------------------------------------------------------------------------
    //attributes
    /**
     * @var uuid
     */
    private $factureInUuid;//" type="xs:IDREF"/>

    /**
     * @var dateTime
     */
    private $incomingDate;//" type="xs:dateTime"/>

    /**
     * @var overheadDistribution
     */
    private $incomingNumber;//" type="xs:string"/>

    /**
     * @var overheadDistribution
     */
    private $overheadDistribution;//" type="overheadDistribution"/>

    /**
     * @var uuid
     */
    private $purchaseOrderUuid;//" type="xs:IDREF"/>


    //--------------------------------------------------------------------------------------------
    //properties


    /**
     * @var MoneyAmount
     */
    private $overhead;


    /**
     * @var uuid[]
     */
    private $invoicesInUuid;


    /**
     * @var uuid[]
     */

    private $paymentsUuid;

    /**
     * @var ShipmentIn[]
     */
    private $shipmentIn;


    /**
     * @var uuid[]
     */
    private $purchaseReturnsUuid;

    /**
     * @return uuid
     */
    public function getFactureInUuid()
    {
        return $this->factureInUuid;
    }

    /**
     * @param uuid $factureInUuid
     */
    public function setFactureInUuid($factureInUuid)
    {
        $this->factureInUuid = $factureInUuid;
    }

    /**
     * @return dateTime
     */
    public function getIncomingDate()
    {
        return $this->incomingDate;
    }

    /**
     * @param dateTime $incomingDate
     */
    public function setIncomingDate($incomingDate)
    {
        $this->incomingDate = $incomingDate;
    }

    /**
     * @return overheadDistribution
     */
    public function getIncomingNumber()
    {
        return $this->incomingNumber;
    }

    /**
     * @param overheadDistribution $incomingNumber
     */
    public function setIncomingNumber($incomingNumber)
    {
        $this->incomingNumber = $incomingNumber;
    }

    /**
     * @return overheadDistribution
     */
    public function getOverheadDistribution()
    {
        return $this->overheadDistribution;
    }

    /**
     * @param overheadDistribution $overheadDistribution
     */
    public function setOverheadDistribution($overheadDistribution)
    {
        $this->overheadDistribution = $overheadDistribution;
    }

    /**
     * @return uuid
     */
    public function getPurchaseOrderUuid()
    {
        return $this->purchaseOrderUuid;
    }

    /**
     * @param uuid $purchaseOrderUuid
     */
    public function setPurchaseOrderUuid($purchaseOrderUuid)
    {
        $this->purchaseOrderUuid = $purchaseOrderUuid;
    }

    /**
     * @return MoneyAmount
     */
    public function getOverhead()
    {
        return $this->overhead;
    }

    /**
     * @param MoneyAmount $overhead
     */
    public function setOverhead($overhead)
    {
        $this->overhead = $overhead;
    }

    /**
     * @return uuid[]
     */
    public function getInvoicesInUuid()
    {
        return $this->invoicesInUuid;
    }

    /**
     * @param uuid[] $invoicesInUuid
     */
    public function setInvoicesInUuid($invoicesInUuid)
    {
        $this->invoicesInUuid = $invoicesInUuid;
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
     * @return ShipmentIn[]
     */
    public function getShipmentIn()
    {
        return $this->shipmentIn;
    }

    /**
     * @param ShipmentIn[] $shipmentIn
     */
    public function setShipmentIn($shipmentIn)
    {
        $this->shipmentIn = $shipmentIn;
    }

    /**
     * @return uuid[]
     */
    public function getPurchaseReturnsUuid()
    {
        return $this->purchaseReturnsUuid;
    }

    /**
     * @param uuid[] $purchaseReturnsUuid
     */
    public function setPurchaseReturnsUuid($purchaseReturnsUuid)
    {
        $this->purchaseReturnsUuid = $purchaseReturnsUuid;
    }


}