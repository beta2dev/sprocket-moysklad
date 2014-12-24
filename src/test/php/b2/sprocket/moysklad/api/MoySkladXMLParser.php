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

define('PATH_TO_XML', __DIR__.'\..\..\..\..\..\resources\xmlIn\\');
define('PATH_TO_DUMP',__DIR__.'\..\..\..\..\..\resources\dump\\');



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

    function test_CustomerOrder(){
        $inXml=PATH_TO_XML.'CustomerOrder.xml';
        $inDump=PATH_TO_DUMP.'customerOrder.dump';

        $xml=file_get_contents($inXml);
        $reference=file_get_contents($inDump);

        $obj = $this->mapper->map($xml);
        $parsedObj=var_export($obj,true);
        $this->assertEquals($reference,$parsedObj);

    }

    function test_Demand(){
        $inXml=PATH_TO_XML.'Demand.xml';
        $inDump=PATH_TO_DUMP.'customerOrder.dump';

        $xml=file_get_contents($inXml);
        $reference=file_get_contents($inDump);

        $obj = $this->mapper->map($xml);


        $parsedObj=var_export($obj);

        $this->assertEquals($reference,$parsedObj);

    }


}


    $ms=new MoySkladXMLParser();
    $ms->setUp();