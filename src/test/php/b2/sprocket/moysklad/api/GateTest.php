<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 11.12.2014
 * Time: 13:25
 */


namespace b2\sprocket\moysklad\api;

include '../../../../../../config/config.php';


use b2\sprocket\moysklad\classes;
use b2\sprocket\moysklad\api;
use b2\lib;


$GLOBALS['b2foundation'] = 'c:\arbeit\fast\dev\trunk\foundation\src\main\php';
require_once 'c:\arbeit\fast\dev\trunk\foundation\src\main\php\b2\sys\classloading.php';
b2classpath('c:\arbeit\sprocket-moysklad\src\main\php\\');
b2classpath('C:\arbeit\fast\dev\trunk\framework\src\main\php\\');
//$GLOBALS['b2classloader']




class GetTest //extends \PHPUnit_Framework_TestCase
{
    public function testXmlToGood()
    {


    }

}
//$rq = new \b2\task\services\http\HttpRequest();

//var_export(get_declared_classes());

$msInterface=new MoySkladInterface(['username'=>'user','password'=>'passwd']);

$msInterface->getGood('123123');


//var_export(get_declared_classes());

