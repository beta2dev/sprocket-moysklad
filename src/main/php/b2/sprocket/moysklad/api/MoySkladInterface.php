<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 09.12.2014
 * Time: 12:10
 */

namespace b2\sprocket\moysklad\api;
use b2\sprocket\moysklad\classes;


class MoySkladInterface
{
    private $userIdentity;


    private $cfg;



    public function __construct($paramUserIdentity)
    {
        function __construct()
        {
            $this->cfg = b2config()->b2moysklad([
                'password' => 'user',
                'username' => 'pass'
            ]);

        }



        $this->converter = new \b2\sprocket\moysklad\classes\DataConverter();
        $this->userIdentity = $paramUserIdentity;
    }

    public function getGood($id=NULL,$filter=null)
    {
        $this->getAnything('Good',$id,$filter);
    }

    public function getGoodFolder($id=null,$filter=null)
    {
        $this->getAnything('GoodFolder',$id);
        //return $this->converter->simplexmlToContact($tmp);
    }

    public function getCompany($id=null,$filter=null)
    {
        $this->getAnything('Company',$id,$filter);
    }

    public function filterToString($filters)
    {
        $result=[];
        foreach($filters AS $filter){
            $result[]=$filter->stringify();
        }
        return implode(';',$result);

    }



    public function getAnything($entityType,$entityId,$filter=null)
    {
        //https://online.moysklad.ru/exchange/rest/ms/xml/Company/e57adece-7947-11e4-90a2-8eca0009829c
        $getUri="https://online.moysklad.ru/exchange/rest/ms/xml/".$entityType."/".$entityId;

       /*
        * здесь зовём нечто...
        */

        if(!empty($filter)){
            $filterRequest=$this->filterToString($filter);
            $getUri=$getUri."?".$filterRequest;
        }


        $httpService= new \b2\task\services\http\HttpService();
        $httpRequest= new \b2\task\services\http\HttpRequest();



        $httpRequest->setDestination('GET',$getUri);
        $httpRequest->setBasicAuth(){

        $this->setAuthUsername($this->cfg['username']);
        $this->setAuthUsername($this->cfg['password']);
    }


        $taskRef=new \b2\task\TaskRef();

        $taskRef->setAddress('moysklad.gate');
        $taskRef->setClass('MoySkladGate');
        $taskRef->setMethod('parseHttpResponse');

        $httpService->execute($httpRequest, $taskRef);
    }













}