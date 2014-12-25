<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 16:52
 */
namespace b2\sprocket\moysklad\model;

class PurchaseOrder extends Order{
    /*
     * <?xml version="1.0" encoding="UTF-8"?>
<collection total="1" start="0" count="1000">
    <purchaseOrder reservedSum="0.0" targetAgentUuid="90fcf102-86cb-11e4-90a2-8ecb002dcabb"
                   sourceAgentUuid="90fe27cf-86cb-11e4-90a2-8ecb002dcabe"
                   targetStoreUuid="90fe2502-86cb-11e4-90a2-8ecb002dcabd" applicable="true"
                   moment="2014-12-18T18:55:00+03:00" targetAccountUuid="90fcf354-86cb-11e4-90a2-8ecb002dcabc"
                   sourceAccountUuid="90fe29d6-86cb-11e4-90a2-8ecb002dcabf" payerVat="true" rate="1.0"
                   vatIncluded="true" created="2014-12-18T18:56:12.722+03:00" createdBy="admin@zloperdov"
                   employeeUuid="9101d9be-86cb-11e4-90a2-8ecb002dcac7" name="00001"
                   updated="2014-12-18T19:15:18.271+03:00" updatedBy="admin@zloperdov" readMode="SELF"
                   changeMode="SELF">
        <accountUuid>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountUuid>
        <accountId>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountId>
        <uuid>654fda14-86ce-11e4-90a2-8ecb002e30ac</uuid>
        <externalcode>9LWwTihwiie8YABCSP6883</externalcode>
        <description>заказ поставщика</description>
        <sum sum="800000.0" sumInCurrency="800000.0"/>
        <customerOrdersUuid/>
        <internalOrders/>
        <invoicesUuid/>
        <paymentsUuid/>
        <purchaseOrderPosition discount="0.0" quantity="4.0" consignmentUuid="2e76e0e4-86ce-11e4-90a2-8ecb002e29e4"
                               goodUuid="2e76dcb0-86ce-11e4-90a2-8ecb002e29e2" vat="0" readMode="SELF"
                               changeMode="SELF">
            <accountUuid>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountUuid>
            <accountId>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountId>
            <uuid>65501af4-86ce-11e4-90a2-8ecb002e30ad</uuid>
            <basePrice sum="200000.0" sumInCurrency="200000.0"/>
            <price sum="200000.0" sumInCurrency="200000.0"/>
            <things/>
            <reserve>0.0</reserve>
        </purchaseOrderPosition>
        <suppliesUuid>
            <supplyRef>72b8a87d-86ce-11e4-90a2-8ecb002e3392</supplyRef>
        </suppliesUuid>
    </purchaseOrder>
</collection>
     */

    /**
     * @var uuid[]
     */
    protected $customerOrdersUuid;

    /**
     * @var uuid[]
     */
    protected $internalOrders;

    /**
     * @var uuid[]
     */
    protected $invoicesUuid;

    /**
     * @var uuid[]
     */
    protected $paymentsUuid;

    /**
     * @var uuid[]
     */
    protected $suppliesUuid;

    /**
     * @var PurchaseOrderPosition[]
     */
    protected $purchaseOrderPosition;

    /**
     * @return uuid[]
     */
    public function getCustomerOrdersUuid()
    {
        return $this->customerOrdersUuid;
    }

    /**
     * @param uuid[] $customerOrdersUuid
     */
    public function setCustomerOrdersUuid($customerOrdersUuid)
    {
        $this->customerOrdersUuid = $customerOrdersUuid;
    }

    /**
     * @return uuid[]
     */
    public function getInternalOrders()
    {
        return $this->internalOrders;
    }

    /**
     * @param uuid[] $internalOrders
     */
    public function setInternalOrders($internalOrders)
    {
        $this->internalOrders = $internalOrders;
    }

    /**
     * @return uuid[]
     */
    public function getInvoicesUuid()
    {
        return $this->invoicesUuid;
    }

    /**
     * @param uuid[] $invoicesUuid
     */
    public function setInvoicesUuid($invoicesUuid)
    {
        $this->invoicesUuid = $invoicesUuid;
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
     * @return uuid[]
     */
    public function getSuppliesUuid()
    {
        return $this->suppliesUuid;
    }

    /**
     * @param uuid[] $suppliesUuid
     */
    public function setSuppliesUuid($suppliesUuid)
    {
        $this->suppliesUuid = $suppliesUuid;
    }

    /**
     * @return PurchaseOrderPosition[]
     */
    public function getPurchaseOrderPosition()
    {
        return $this->purchaseOrderPosition;
    }

    /**
     * @param PurchaseOrderPosition[] $purchaseOrderPosition
     */
    public function setPurchaseOrderPosition($purchaseOrderPosition)
    {
        $this->purchaseOrderPosition = $purchaseOrderPosition;
    }

}