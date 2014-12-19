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






}