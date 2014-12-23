<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 22.12.2014
 * Time: 16:09
 */

namespace b2\sprocket\moysklad\model;

require_once __DIR__ . './test.boot.php';
//echo __DIR__ . './test.boot.php';


$GLOBALS['b2foundation'] = 'c:\arbeit\fast2\foundation\src\main\php';
require_once 'c:\arbeit\fast2\foundation\src\main\php\b2\sys\classloading.php';
b2classpath('c:\arbeit\sprocket-moysklad\src\main\php\\');



class MoySkladXMLParser extends \PHPUnit_Framework_TestCase{

    public $mapper;

    function setUp()
    {
        //var_export(get_declared_classes());
        $this->mapper = new MoyskladXmlMapper();

    }

    function test_Simple(){
        $xml='<entity reservedSum="0.0"
updated="2014-12-18T19:15:18.271+03:00"
updatedBy="admin@zloperdov" readMode="SELF"
accessMode="accessmode"
changeMode="SELF">
<accountUuid>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountUuid>
<accountId>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountId>
<uuid>654fda14-86ce-11e4-90a2-8ecb002e30ac</uuid>
</entity>';

        $obj = $this->mapper->map($xml);

        $reference=new Entity();
        $reference->setAccessMode('accessmode');
        $reference->setReadMode('SELF');
        $reference->setGroupUuid(NULL);
        $reference->setAccountUuid('90e1c841-86cb-11e4-90a2-8ecb00001cd3');
        $reference->setAccountId('90e1c841-86cb-11e4-90a2-8ecb00001cd3');
        $reference->setUuid('654fda14-86ce-11e4-90a2-8ecb002e30ac');

        $this->assertEquals($obj,$reference);

        var_export($obj);

    }


}


    $ms=new MoySkladXMLParser();
    $ms->setUp();