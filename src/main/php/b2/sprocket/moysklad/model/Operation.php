<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 16:48
 */
namespace b2\sprocket\moysklad\model;



class Operation extends LegendEntity {

    /**
     * @var uuid
     * XS
     */
    protected $stateUuid;//" type="xs:IDREF"/>


    /**
     * @var uuid
     */
    protected $targetAgentUuid;//" type="xs:IDREF"/>

    /**
     * @var uuid
     */
    protected $sourceAgentUuid;//" type="xs:IDREF"/>

    /**
     * @var uuid
     */
    protected $targetStoreUuid;//" type="xs:IDREF"/>

    /**
     * @var uuid
     */
    protected $sourceStoreUuid;//" type="xs:IDREF"/>

    /**
     * @var bool
     * XS
     */
    protected $applicable;//" type="xs:boolean" use="required"/>

    /**
     * @var uuid
     * XS
     */
    protected $projectUuid;//" type="xs:IDREF"/>

    /**
     * @var uuid
     * XS
     */
    protected $contractUuid;//" type="xs:IDREF"/>

    /**
     * @var datetime
     * XS
     */
    protected $moment;//" type="xs:dateTime"/>

    /**
     * @var uuid
     * XS
     */
    protected $targetAccountUuid;//" type="xs:IDREF"/>

    /**
     * @var uuid
     * XS
     */
    protected $sourceAccountUuid;//" type="xs:IDREF"/>

    /**
     * @var boolean
     */
    protected $payerVat;//" type="xs:boolean"/>

    /**
     * @var uuid
     * XS
     */
    protected $retailStoreUuid;//" type="xs:IDREF"/>

    /**
     * @var uuid
     * XS
     */
    protected $currencyUuid;//" type="xs:IDREF"/>

    /**
     * @var double
     * required
     */
    protected $rate;//" type="xs:double" use="required"/>

    /**
     * @var boolean
     * required
     */
    protected $vatIncluded;//" type="xs:boolean" use="required"/>

    /**
     * @var datetime
     */
    protected $created;//" type="xs:dateTime"/>

    /**
     * @var string
     */
    protected $createdBy;//" type="xs:string"/>

    /**
     * @var uuid
     * XS
     */
    protected $employeeUuid;//" type="xs:IDREF"/>





    //properties --------------------------------------------------------------
    /**
     * @var operationAttributeValue[]
     */
    protected $attribute;

    /**
     * @var operationDocument[]
     */
    protected $document;

    /**
     * @var moneyAmount
     * XS
     */
    protected $sum;

    /**
     * @return uuid
     */
    public function getStateUuid()
    {
        return $this->stateUuid;
    }

    /**
     * @param uuid $stateUuid
     */
    public function setStateUuid($stateUuid)
    {
        $this->stateUuid = $stateUuid;
    }

    /**
     * @return uuid
     */
    public function getTargetAgentUuid()
    {
        return $this->targetAgentUuid;
    }

    /**
     * @param uuid $targetAgentUuid
     */
    public function setTargetAgentUuid($targetAgentUuid)
    {
        $this->targetAgentUuid = $targetAgentUuid;
    }

    /**
     * @return uuid
     */
    public function getSourceAgentUuid()
    {
        return $this->sourceAgentUuid;
    }

    /**
     * @param uuid $sourceAgentUuid
     */
    public function setSourceAgentUuid($sourceAgentUuid)
    {
        $this->sourceAgentUuid = $sourceAgentUuid;
    }

    /**
     * @return uuid
     */
    public function getTargetStoreUuid()
    {
        return $this->targetStoreUuid;
    }

    /**
     * @param uuid $targetStoreUuid
     */
    public function setTargetStoreUuid($targetStoreUuid)
    {
        $this->targetStoreUuid = $targetStoreUuid;
    }

    /**
     * @return uuid
     */
    public function getSourceStoreUuid()
    {
        return $this->sourceStoreUuid;
    }

    /**
     * @param uuid $sourceStoreUuid
     */
    public function setSourceStoreUuid($sourceStoreUuid)
    {
        $this->sourceStoreUuid = $sourceStoreUuid;
    }

    /**
     * @return boolean
     */
    public function isApplicable()
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
     * @return uuid
     */
    public function getProjectUuid()
    {
        return $this->projectUuid;
    }

    /**
     * @param uuid $projectUuid
     */
    public function setProjectUuid($projectUuid)
    {
        $this->projectUuid = $projectUuid;
    }

    /**
     * @return uuid
     */
    public function getContractUuid()
    {
        return $this->contractUuid;
    }

    /**
     * @param uuid $contractUuid
     */
    public function setContractUuid($contractUuid)
    {
        $this->contractUuid = $contractUuid;
    }

    /**
     * @return datetime
     */
    public function getMoment()
    {
        return $this->moment;
    }

    /**
     * @param datetime $moment
     */
    public function setMoment($moment)
    {
        $this->moment = $moment;
    }

    /**
     * @return uuid
     */
    public function getTargetAccountUuid()
    {
        return $this->targetAccountUuid;
    }

    /**
     * @param uuid $targetAccountUuid
     */
    public function setTargetAccountUuid($targetAccountUuid)
    {
        $this->targetAccountUuid = $targetAccountUuid;
    }

    /**
     * @return uuid
     */
    public function getSourceAccountUuid()
    {
        return $this->sourceAccountUuid;
    }

    /**
     * @param uuid $sourceAccountUuid
     */
    public function setSourceAccountUuid($sourceAccountUuid)
    {
        $this->sourceAccountUuid = $sourceAccountUuid;
    }

    /**
     * @return boolean
     */
    public function isPayerVat()
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
     * @return uuid
     */
    public function getRetailStoreUuid()
    {
        return $this->retailStoreUuid;
    }

    /**
     * @param uuid $retailStoreUuid
     */
    public function setRetailStoreUuid($retailStoreUuid)
    {
        $this->retailStoreUuid = $retailStoreUuid;
    }

    /**
     * @return uuid
     */
    public function getCurrencyUuid()
    {
        return $this->currencyUuid;
    }

    /**
     * @param uuid $currencyUuid
     */
    public function setCurrencyUuid($currencyUuid)
    {
        $this->currencyUuid = $currencyUuid;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return boolean
     */
    public function isVatIncluded()
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

    /**
     * @return datetime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param datetime $created
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
     * @return uuid
     */
    public function getEmployeeUuid()
    {
        return $this->employeeUuid;
    }

    /**
     * @param uuid $employeeUuid
     */
    public function setEmployeeUuid($employeeUuid)
    {
        $this->employeeUuid = $employeeUuid;
    }

    /**
     * @return operationAttributeValue[]
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @param operationAttributeValue[] $attribute
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;
    }

    /**
     * @return operationDocument[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param operationDocument[] $document
     */
    public function setDocument($document)
    {
        $this->document = $document;
    }

    /**
     * @return moneyAmount
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * @param moneyAmount $sum
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
    }






}