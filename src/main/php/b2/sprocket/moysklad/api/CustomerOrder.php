<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 03.12.2014
 * Time: 14:18
 */

/*
<customerOrder deliveryPlannedMoment="2014-11-28T18:53:00+03:00" reservedSum="0.0"
                       stateUuid="468ad89b-7009-11e4-90a2-8ecb002d430a"
                       targetAgentUuid="c353d549-6c18-11e4-90a2-8ecb00335568"
                       sourceAgentUuid="c35afd9a-6c18-11e4-90a2-8ecb0033557b"
                       sourceStoreUuid="c35500b5-6c18-11e4-90a2-8ecb0033556a" applicable="true"
                       moment="2014-11-19T18:54:00+03:00" targetAccountUuid="c353d758-6c18-11e4-90a2-8ecb00335569"
                       sourceAccountUuid="c35b0100-6c18-11e4-90a2-8ecb0033557c" payerVat="true"
                       currencyUuid="c3550b1c-6c18-11e4-90a2-8ecb0033556f" rate="1.0" vatIncluded="true"
                       created="2014-11-19T18:58:22.760+03:00" createdBy="admin@test_api"
                       employeeUuid="c358e601-6c18-11e4-90a2-8ecb0033557a" name="999"
                       updated="2014-11-19T19:43:06.684+03:00" updatedBy="admin@test_api" readMode="SELF"
                       changeMode="SELF">
            <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
            <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
            <uuid>e4ce0139-7004-11e4-90a2-8ecb002c3792</uuid>
            <externalcode>3GFa_aiBgQW8PungsoxOU1</externalcode>
            <attribute operationUuid="e4ce0139-7004-11e4-90a2-8ecb002c3792"
                       metadataUuid="135dac6f-7004-11e4-90a2-8ecb002c16e0"
                       goodValueUuid="14e7ee75-7002-11e4-90a2-8ecb002bd51e" updated="2014-11-19T18:58:22.762+03:00"
                       updatedBy="admin@test_api" readMode="SELF" changeMode="SELF">
                <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                <uuid>e4ce4a5f-7004-11e4-90a2-8ecb002c379b</uuid>
            </attribute>
            <attribute operationUuid="e4ce0139-7004-11e4-90a2-8ecb002c3792"
                       metadataUuid="135daf7c-7004-11e4-90a2-8ecb002c16e3" booleanValue="true"
                       updated="2014-11-19T18:58:22.762+03:00" updatedBy="admin@test_api" readMode="SELF"
                       changeMode="SELF">
                <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                <uuid>e4ce47f6-7004-11e4-90a2-8ecb002c3796</uuid>
            </attribute>
            <attribute operationUuid="e4ce0139-7004-11e4-90a2-8ecb002c3792"
                       metadataUuid="135db04f-7004-11e4-90a2-8ecb002c16e4"
                       valueText="тестовый текст. отличается от тестовой строки, видимо, размером."
                       updated="2014-11-19T18:58:22.762+03:00" updatedBy="admin@test_api" readMode="SELF"
                       changeMode="SELF">
                <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                <uuid>e4ce4966-7004-11e4-90a2-8ecb002c3799</uuid>
            </attribute>
            <attribute operationUuid="e4ce0139-7004-11e4-90a2-8ecb002c3792"
                       metadataUuid="fc358768-6fff-11e4-90a2-8ecb002b8cae" valueString="ТЕСТОВАЯ СТРОКА"
                       updated="2014-11-19T18:58:22.762+03:00" updatedBy="admin@test_api" readMode="SELF"
                       changeMode="SELF">
                <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                <uuid>e4ce48eb-7004-11e4-90a2-8ecb002c3798</uuid>
            </attribute>
            <attribute operationUuid="e4ce0139-7004-11e4-90a2-8ecb002c3792"
                       metadataUuid="135daa59-7004-11e4-90a2-8ecb002c16df" timeValue="2014-11-05T18:53:00+03:00"
                       updated="2014-11-19T18:58:22.762+03:00" updatedBy="admin@test_api" readMode="SELF"
                       changeMode="SELF">
                <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                <uuid>e4ce486e-7004-11e4-90a2-8ecb002c3797</uuid>
            </attribute>
            <attribute operationUuid="e4ce0139-7004-11e4-90a2-8ecb002c3792"
                       metadataUuid="135dad92-7004-11e4-90a2-8ecb002c16e1" updated="2014-11-19T18:58:22.761+03:00"
                       updatedBy="admin@test_api" readMode="SELF" changeMode="SELF">
                <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                <uuid>e4ce45c4-7004-11e4-90a2-8ecb002c3793</uuid>
                <file created="2014-11-19T18:55:52.184+03:00" filename="TEST_FILE.txt" name="TEST_FILE.txt"
                      updated="2014-11-19T18:55:52.184+03:00" updatedBy="admin@test_api" readMode="ALL"
                      changeMode="NONE">
                    <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                    <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                    <uuid>8b0e063f-7004-11e4-90a2-8ecb002c2c0a</uuid>
                    <externalcode>Swpsy2OVgnuMD_j3sb4Or0</externalcode>
                </file>
            </attribute>
            <attribute operationUuid="e4ce0139-7004-11e4-90a2-8ecb002c3792"
                       metadataUuid="135dae77-7004-11e4-90a2-8ecb002c16e2" doubleValue="777.777"
                       updated="2014-11-19T18:58:22.762+03:00" updatedBy="admin@test_api" readMode="SELF"
                       changeMode="SELF">
                <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                <uuid>e4ce4779-7004-11e4-90a2-8ecb002c3795</uuid>
            </attribute>
            <attribute operationUuid="e4ce0139-7004-11e4-90a2-8ecb002c3792"
                       metadataUuid="bb7321e9-7000-11e4-90a2-8ecb002ba00a" longValue="777777"
                       updated="2014-11-19T18:58:22.762+03:00" updatedBy="admin@test_api" readMode="SELF"
                       changeMode="SELF">
                <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                <uuid>e4ce46ee-7004-11e4-90a2-8ecb002c3794</uuid>
            </attribute>
            <attribute operationUuid="e4ce0139-7004-11e4-90a2-8ecb002c3792"
                       metadataUuid="135db153-7004-11e4-90a2-8ecb002c16e5" valueText="http://vk.com"
                       updated="2014-11-19T18:58:22.762+03:00" updatedBy="admin@test_api" readMode="SELF"
                       changeMode="SELF">
                <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                <uuid>e4ce49e2-7004-11e4-90a2-8ecb002c379a</uuid>
            </attribute>
            <sum sum="300.0" sumInCurrency="300.0"/>
            <demandsUuid/>
            <invoicesOutUuid/>
            <paymentsUuid/>
            <customerOrderPosition discount="0.0" quantity="1.0" consignmentUuid="e2fd0f61-6c23-11e4-90a2-8ecb00342f68"
                                   goodUuid="e2fd0aff-6c23-11e4-90a2-8ecb00342f66" vat="10" readMode="SELF"
                                   changeMode="SELF">
                <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                <uuid>e4ce4b81-7004-11e4-90a2-8ecb002c379c</uuid>
                <basePrice sum="300.0" sumInCurrency="300.0"/>
                <price sum="300.0" sumInCurrency="300.0"/>
                <things/>
                <reserve>0.0</reserve>
            </customerOrderPosition>
            <purchaseOrdersUuid/>
        </customerOrder>
*/


namespace b2\sprocket\moysklad\api;
/**
 * Class CustomerOrder
 *
 * заказ покупателя
 *
 */
class CustomerOrder extends MoyskladObject
{
    /**
     * @var string
     */
    protected $deliveryPlannedMoment;//="2014-11-28T18:53:00+03:00"

    /**
     * @var string
     */
    protected $reservedSum;//="0.0"

    /**
     * @var string
     */
    protected $stateUuid;//="468ad89b-7009-11e4-90a2-8ecb002d430a"

    /**
     * @var string
     */
    protected $targetAgentUuid;//="c353d549-6c18-11e4-90a2-8ecb00335568"

    /**
     * @var string
     */
    protected $sourceAgentUuid;//="c35afd9a-6c18-11e4-90a2-8ecb0033557b"

    /**
     * @var string
     */
    protected $sourceStoreUuid;//="c35500b5-6c18-11e4-90a2-8ecb0033556a"

    /**
     * @var bool
     */
    protected $applicable;//="true"

    /**
     * @var string
     */
    protected $moment;//="2014-11-19T18:54:00+03:00"

    /**
     * @var string
     */
    protected $targetAccountUuid;//="c353d758-6c18-11e4-90a2-8ecb00335569"

    /**
     * @var string
     */
    protected $sourceAccountUuid;//="c35b0100-6c18-11e4-90a2-8ecb0033557c"

    /**
     * @var bool
     */
    protected $payerVat;//="true"

    /**
     * @var string
     */
    protected $currencyUuid;//="c3550b1c-6c18-11e4-90a2-8ecb0033556f"

    /**
     * @var string
     */
    protected $rate;//="1.0"

    /**
     * @var bool
     */
    protected $vatIncluded;//="true"

    /**
     * @var string
     */
    protected $created;//="2014-11-19T18:58:22.760+03:00"

    /**
     * @var string
     */
    protected $createdBy;//="admin@test_api"

    /**
     * @var string
     */
    protected $employeeUuid;//="c358e601-6c18-11e4-90a2-8ecb0033557a"

    /**
     * @var string
     */
    protected $name;//="999"

    /**
     * @var string
     */
    protected $updated;//="2014-11-19T19:43:06.684+03:00"

    /**
     * @var string
     */
    protected $updatedBy;//="admin@test_api"

    /**
     * @var string
     */
    protected $readMode;//="SELF"

    /**
     * @var string
     */
    protected $changeMode;//="SELF"


    protected $sum;//="300.0"

    protected $sumInCurrency;//="300.0"/>


    /**
     * @var DemandUid[]
     */
    protected $demandsUuid;

    /**
     * @var InvoiceOutUid[]
     */
    protected $invoicesOutUuid;

    /**
     * @var PaymentUid[]
     */
    protected $paymentsUuid;

    /**
     * @var PurcheseOrderUid[]
     */
    protected $purchaseOrdersUuid;

    /**
     * @var PurcheseOrderUid[]
     */
    protected $externalCode;


    protected $attributes;

    /**
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param mixed $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }


    /**
     * @return PurcheseOrderUid[]
     */
    public function getExternalCode()
    {
        return $this->externalCode;
    }

    /**
     * @param PurcheseOrderUid[] $externalCode
     */
    public function setExternalCode($externalCode)
    {
        $this->externalCode = $externalCode;
    }

    /**
     * @var CustomerOrderPosition[]
     */
    protected $customerOrderPosition;

    /**
     * @return boolean
     */
    public function getApplicable()
    {
        return $this->applicable;
    }

    /**
     * @param boolean $applicable
     */
    public function setApplicable($applicable)
    {
        $this->applicable = $applicable;
    }

    /**
     * @return string
     */
    public function getChangeMode()
    {
        return $this->changeMode;
    }

    /**
     * @param string $changeMode
     */
    public function setChangeMode($changeMode)
    {
        $this->changeMode = $changeMode;
    }

    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return string
     */
    public function getCurrencyUuid()
    {
        return $this->currencyUuid;
    }

    /**
     * @param string $currencyUuid
     */
    public function setCurrencyUuid($currencyUuid)
    {
        $this->currencyUuid = $currencyUuid;
    }

    /**
     * @return CustomerOrderPosition[]
     */
    public function getCustomerOrderPosition()
    {
        return $this->customerOrderPosition;
    }

    /**
     * @param CustomerOrderPosition[] $customerOrderPosition
     */
    public function setCustomerOrderPosition($customerOrderPosition)
    {
        $this->customerOrderPosition = $customerOrderPosition;
    }

    /**
     * @return string
     */
    public function getDeliveryPlannedMoment()
    {
        return $this->deliveryPlannedMoment;
    }

    /**
     * @param string $deliveryPlannedMoment
     */
    public function setDeliveryPlannedMoment($deliveryPlannedMoment)
    {
        $this->deliveryPlannedMoment = $deliveryPlannedMoment;
    }

    /**
     * @return DemandUid[]
     */
    public function getDemandsUuid()
    {
        return $this->demandsUuid;
    }

    /**
     * @param DemandUid[] $demandsUuid
     */
    public function setDemandsUuid($demandsUuid)
    {
        $this->demandsUuid = $demandsUuid;
    }

    /**
     * @return string
     */
    public function getEmployeeUuid()
    {
        return $this->employeeUuid;
    }

    /**
     * @param string $employeeUuid
     */
    public function setEmployeeUuid($employeeUuid)
    {
        $this->employeeUuid = $employeeUuid;
    }

    /**
     * @return InvoiceOutUid[]
     */
    public function getInvoicesOutUuid()
    {
        return $this->invoicesOutUuid;
    }

    /**
     * @param InvoiceOutUid[] $invoicesOutUuid
     */
    public function setInvoicesOutUuid($invoicesOutUuid)
    {
        $this->invoicesOutUuid = $invoicesOutUuid;
    }

    /**
     * @return string
     */
    public function getMoment()
    {
        return $this->moment;
    }

    /**
     * @param string $moment
     */
    public function setMoment($moment)
    {
        $this->moment = $moment;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return boolean
     */
    public function getPayerVat()
    {
        return $this->payerVat;
    }

    /**
     * @param boolean $payerVat
     */
    public function setPayerVat($payerVat)
    {
        $this->payerVat = $payerVat;
    }

    /**
     * @return PaymentUid[]
     */
    public function getPaymentsUuid()
    {
        return $this->paymentsUuid;
    }

    /**
     * @param PaymentUid[] $paymentsUuid
     */
    public function setPaymentsUuid($paymentsUuid)
    {
        $this->paymentsUuid = $paymentsUuid;
    }

    /**
     * @return PurcheseOrderUid[]
     */
    public function getPurchaseOrdersUuid()
    {
        return $this->purchaseOrdersUuid;
    }

    /**
     * @param PurcheseOrderUid[] $purchaseOrdersUuid
     */
    public function setPurchaseOrdersUuid($purchaseOrdersUuid)
    {
        $this->purchaseOrdersUuid = $purchaseOrdersUuid;
    }

    /**
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param string $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return string
     */
    public function getReadMode()
    {
        return $this->readMode;
    }

    /**
     * @param string $readMode
     */
    public function setReadMode($readMode)
    {
        $this->readMode = $readMode;
    }

    /**
     * @return string
     */
    public function getReservedSum()
    {
        return $this->reservedSum;
    }

    /**
     * @param string $reservedSum
     */
    public function setReservedSum($reservedSum)
    {
        $this->reservedSum = $reservedSum;
    }

    /**
     * @return string
     */
    public function getSourceAccountUuid()
    {
        return $this->sourceAccountUuid;
    }

    /**
     * @param string $sourceAccountUuid
     */
    public function setSourceAccountUuid($sourceAccountUuid)
    {
        $this->sourceAccountUuid = $sourceAccountUuid;
    }

    /**
     * @return string
     */
    public function getSourceAgentUuid()
    {
        return $this->sourceAgentUuid;
    }

    /**
     * @param string $sourceAgentUuid
     */
    public function setSourceAgentUuid($sourceAgentUuid)
    {
        $this->sourceAgentUuid = $sourceAgentUuid;
    }

    /**
     * @return string
     */
    public function getSourceStoreUuid()
    {
        return $this->sourceStoreUuid;
    }

    /**
     * @param string $sourceStoreUuid
     */
    public function setSourceStoreUuid($sourceStoreUuid)
    {
        $this->sourceStoreUuid = $sourceStoreUuid;
    }

    /**
     * @return string
     */
    public function getStateUuid()
    {
        return $this->stateUuid;
    }

    /**
     * @param string $stateUuid
     */
    public function setStateUuid($stateUuid)
    {
        $this->stateUuid = $stateUuid;
    }

    /**
     * @return mixed
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * @param mixed $sum
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
    }

    /**
     * @return mixed
     */
    public function getSumInCurrency()
    {
        return $this->sumInCurrency;
    }

    /**
     * @param mixed $sumInCurrency
     */
    public function setSumInCurrency($sumInCurrency)
    {
        $this->sumInCurrency = $sumInCurrency;
    }

    /**
     * @return string
     */
    public function getTargetAccountUuid()
    {
        return $this->targetAccountUuid;
    }

    /**
     * @param string $targetAccountUuid
     */
    public function setTargetAccountUuid($targetAccountUuid)
    {
        $this->targetAccountUuid = $targetAccountUuid;
    }

    /**
     * @return string
     */
    public function getTargetAgentUuid()
    {
        return $this->targetAgentUuid;
    }

    /**
     * @param string $targetAgentUuid
     */
    public function setTargetAgentUuid($targetAgentUuid)
    {
        $this->targetAgentUuid = $targetAgentUuid;
    }

    /**
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * @param string $updatedBy
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
    }

    /**
     * @return boolean
     */
    public function getVatIncluded()
    {
        return $this->vatIncluded;
    }

    /**
     * @param boolean $vatIncluded
     */
    public function setVatIncluded($vatIncluded)
    {
        $this->vatIncluded = $vatIncluded;
    }


}