<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 16:49
 */
namespace b2\sprocket\moysklad\model;

class Order extends OperationWithPositions {
    /*
    * <Order reservedSum="0.0" targetAgentUuid="90fcf102-86cb-11e4-90a2-8ecb002dcabb"
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

    </Order>
    */







    //attributes ---------------------------
    /**
     * @var dateTime
     * XS
     */
    private $deliveryPlannedMoment;

    /**
     * @var double
     * XS
     */
    private $reservedSum;

    /**
     * @return dateTime
     */
    public function getDeliveryPlannedMoment()
    {
        return $this->deliveryPlannedMoment;
    }

    /**
     * @param dateTime $deliveryPlannedMoment
     */
    public function setDeliveryPlannedMoment($deliveryPlannedMoment)
    {
        $this->deliveryPlannedMoment = $deliveryPlannedMoment;
    }

    /**
     * @return float
     */
    public function getReservedSum()
    {
        return $this->reservedSum;
    }

    /**
     * @param float $reservedSum
     */
    public function setReservedSum($reservedSum)
    {
        $this->reservedSum = $reservedSum;
    }


}