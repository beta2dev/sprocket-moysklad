<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 18:54
 */
namespace b2\sprocket\moysklad\model;

class LegendEntity  extends InfoEntity{
    /*
    * <LegendEntity reservedSum="0.0"
            name="00001"
            updated="2014-12-18T19:15:18.271+03:00"
            updatedBy="admin@zloperdov" readMode="SELF"
            changeMode="SELF">
        <accountUuid>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountUuid>
        <accountId>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountId>
        <uuid>654fda14-86ce-11e4-90a2-8ecb002e30ac</uuid>
        <externalcode>9LWwTihwiie8YABCSP6883</externalcode>
        <description>заказ поставщика</description>

    </LegendEntity>
    */

    //attributes ---------------------------------------
    /**
     * @var string
     * required
     */
    protected $name;

    /**
     * @var string
     * required
     */
    protected $code;


    /**
     * @var string
     * required
     */
    protected $externalcode;


    /**
     * @var string
     * required
     */
    protected $description;







}