<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 17:30
 */
namespace b2\sprocket\moysklad\model;

class AbstractSalesReturn extends ComingInOperation{

    //--------------------------------------------------------------------------------------------
    //attributes
    /**
     * @var uuid
     */
    protected $demandUuid;//="b689f5ee-86ce-11e4-90a2-8ecb002e3f32"


    //--------------------------------------------------------------------------------------------
    //properties
    /**
     * @var uuid[]
     */
    private $lossesUuid;


    /**
     * @var uuid[]
     */
    private $paymentsUuid;

    /**
     * @var SalesReturnPosition[]
     */
    private $salesReturnPosition;
}