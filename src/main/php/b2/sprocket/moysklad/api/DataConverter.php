<?php


namespace b2\sprocket\moysklad\api;



class DataConverter
{

    function setCommonAttributes($paramXml,$paramObject)
    {
        $paramObject->setAccountUuid( (string)$paramXml->accountUuid);
        $paramObject->setAccountId(   (string)$paramXml->accountId);
        $paramObject->setUuid(        (string)$paramXml->uuid);

        if (isset($paramXml->code))         {$paramObject->setCode((string) $paramXml->code);}
        if (isset($paramXml->externalcode)) {$paramObject->setExternalСode((string) $paramXml->code);}
        if (isset($paramXml->description))  {$paramObject->setDescription((string) $paramXml->code);}


        if (isset($paramXml['updated']))   {$paramObject->setUpdated((string)   $paramXml['updated']);}
        if (isset($paramXml['updatedBy'])) {$paramObject->setUpdatedBy((string) $paramXml['updatedBy']);}
        if (isset($paramXml['readMode']))  {$paramObject->setReadMode((string)  $paramXml['readMode']);}
        if (isset($paramXml['changeMode'])){$paramObject->setChangeMode((string)$paramXml['changeMode']);}
        if (isset($paramXml['parentUuid'])){$paramObject->setParentUuid((string)$paramXml['parentUuid']);}

    }


    function xmlToGood($param)
    {
        /*
         * <good isSerialTrackable="false"
         *      buyPrice="0.0"
         *      weight="0.0"
         *      volume="0.0"
         *      minPrice="0.0"
                uomUuid="19f1edc0-fc42-4001-94cb-c9ec9c62ec10"
                salePrice="0.0" archived="false"
                parentUuid="5a819792-7957-11e4-90a2-8eca000d38c7"
                productCode=""
                name="товар_в_root_1"
                updated="2014-12-01T15:42:08.193+03:00"
                updatedBy="admin@hrenovuha"
                readMode="ALL"
                changeMode="SELF">

                <accountUuid>e532ef02-7947-11e4-7a07-673c0000611b</accountUuid>
                <accountId>e532ef02-7947-11e4-7a07-673c0000611b</accountId>
                <uuid>764e7594-7957-11e4-90a2-8eca000d40f6</uuid>
                <code></code>
                <externalcode>SNR__6kZhiC-0wMZv9Xrz1</externalcode>
                <description></description>
                <barcode barcode="2000000000022" barcodeType="EAN13" readMode="ALL" changeMode="SELF">
                    <accountUuid>e532ef02-7947-11e4-7a07-673c0000611b</accountUuid>
                    <accountId>e532ef02-7947-11e4-7a07-673c0000611b</accountId>
                    <uuid>764e78b0-7957-11e4-90a2-8eca000d40f7</uuid>
                </barcode>
                <salePrices/>
                <preferences/>
                <images/>
            </good>
         *
         */
        $xmlRoot=simplexml_load_string($param);

        $good=new Good();
        $good->setBuyPrice(   (string)$xmlRoot['buyPrice']);
        $good->setWeight(     (string)$xmlRoot['weight']);
        $good->setVolume(     (string)$xmlRoot['volume']);
        $good->setMinPrice(   (string)$xmlRoot['minPrice']);
        $good->setUomUuid(    (string)$xmlRoot['uomUuid']);
        $good->setSalePrice(  (string)$xmlRoot['salePrice']);


        $good->setArchived(filter_var($xmlRoot['archived'], FILTER_VALIDATE_BOOLEAN));
        $good->setProductCode((string)$xmlRoot['productCode']);
        $good->setName(       (string)$xmlRoot['name']);


        $good->setParentUuid( (string)$xmlRoot['parentUuid']);

        $this->setCommonAttributes($xmlRoot,$good); //changeMode readMode updatedBy updated parentUuid code externalcode description AccountUuid AccountId Uuid

        $good->setBarcode($this->simplexmlToBarcode($xmlRoot->barcode));
        $good->setSalePrices($this->simplexmlToSalePrices($xmlRoot->salePrices->price));
        //$good->setPreferences($this->simplexmlToPreferences($xmlRoot->preferences));
        $good->setImages($this->simplexmlToImages($xmlRoot->images->image));

        return $good;

    }


    function simplexmlToBarcode($param)
    {
        /*<barcode barcode="2000000000022" barcodeType="EAN13" readMode="ALL" changeMode="SELF">
            <accountUuid>e532ef02-7947-11e4-7a07-673c0000611b</accountUuid>
            <accountId>e532ef02-7947-11e4-7a07-673c0000611b</accountId>
            <uuid>764e78b0-7957-11e4-90a2-8eca000d40f7</uuid>
        </barcode>*/
        $barcode= new Barcode();

        $barcode->setBarcode(     (string)$param['barcode']);
        $barcode->setBarcodeType( (string)$param['barcodeType']);
        $barcode->setReadMode(    (string)$param['readMode']);
        $barcode->setChangeMode(  (string)$param['changeMode']);

        $barcode->setAccountUuid( (string)$param->accountUuid);
        $barcode->setAccountId(   (string)$param->accountId);
        $barcode->setUuid(        (string)$param->uuid);

        $this->setCommonAttributes($param,$barcode); //changeMode readMode updatedBy updated parentUuid code externalcode description AccountUuid AccountId Uuid

        return $barcode;
    }


    function simplexmlToSalePrices($param)
    {
        $result=array();
        //var_export($param);
        //echo '=============='.count($param).'===============';
        if(count($param)==0){
            return NULL;
        }
        else {
            foreach($param AS $rec){
                $result[]=$this->simplexmlToPrice($rec);
            }
            return $result;
        }
    }


    function simplexmlToPrice($param)
    {
        $price=new Price();
        if(empty($param['priceTypeUuid'])){return NULL;}

        //аттрибуты
        $price->setCurrencyUuid( (string)$param['currencyUuid']);
        $price->setPriceTypeUuid((string)$param['priceTypeUuid']);
        $price->setValue(        (string)$param['value']);

        $this->setCommonAttributes($param,$price); //changeMode readMode updatedBy updated parentUuid code externalcode description AccountUuid AccountId Uuid

        return $price;
    }


    function simplexmlToImages($param)
    {
        if(count($param)==0){
            return NULL;
        } else {
            foreach($param AS $rec){
                $result[]=$this->simplexmlToImage($rec);
            }
            return $result;
        }
    }


    function simplexmlToImage($param)
    {
        /*
        <image tinyUuid="81d1b385-73dc-11e4-90a2-8ecb0024626d" created="2014-11-24T16:19:19.272+03:00"
           filename="9277645.jpg" miniatureUuid="81f0d483-73dc-11e4-90a2-8ecb00246279" name="9277645.jpg"
           updated="2014-11-24T16:19:19.534+03:00" updatedBy="admin@test_api" readMode="ALL"
           changeMode="NONE">
            <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
            <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
            <uuid>81d1bbfd-73dc-11e4-90a2-8ecb0024626e</uuid>
            <externalcode>zOFbZIArjUmP3Jgj2vRH10</externalcode>
        </image>
         */
        $image=new GoodImage();
        //аттрибуты
        if(empty($param['tinyUuid'])){return NULL;}

        $image->settinyUuid(     (string)$param['tinyUuid']);//"81d1b385-73dc-11e4-90a2-8ecb0024626d"
        $image->setcreated(      (string)$param['created']);
        $image->setfilename(     (string)$param['filename']);
        $image->setminiatureUuid((string)$param['miniatureUuid']);
        $image->setname(         (string)$param['name']);

        $this->setCommonAttributes($param,$image); //changeMode readMode updatedBy updated parentUuid code externalcode description AccountUuid AccountId Uuid

        return $image;
    }


    function xmlToGoodFolder($param)
    {
        /*<goodFolder
            archived="false"
            productCode=""
            vat="10" name="ГруппаКорневая"
           updated="2014-11-24T17:16:55.586+03:00" updatedBy="admin@test_api" readMode="ALL" changeMode="SELF">
            <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
            <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
            <uuid>8de88966-73e4-11e4-90a2-8ecb00264152</uuid>
            <code>1</code>
            <externalcode>NLfKBysYi0_lfpDiMP5kA1</externalcode>
            <description></description>
        </goodFolder>*/
        $xmlRoot=simplexml_load_string($param);

        $goodFolder=new GoodFolder();

        $goodFolder->setArchived(filter_var($xmlRoot['archived'], FILTER_VALIDATE_BOOLEAN));

        $goodFolder->setProductCode( (string)$xmlRoot['productCode']);
        $goodFolder->setVat(         (int)   $xmlRoot['vat']);
        $goodFolder->setName(        (string)$xmlRoot['name']);

        $this->setCommonAttributes($xmlRoot,$goodFolder); //changeMode readMode updatedBy updated parentUuid code externalcode description AccountUuid AccountId Uuid

        return $goodFolder;
    }



    function simplexmlToAttributeFile($param)
    {
        /*
                <file created="2014-11-19T18:55:52.184+03:00"
                      filename="TEST_FILE.txt"
                      name="TEST_FILE.txt"
                      updated="2014-11-19T18:55:52.184+03:00"
                      updatedBy="admin@test_api"
                      readMode="ALL"
                      changeMode="NONE">
                    <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                    <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                    <uuid>8b0e063f-7004-11e4-90a2-8ecb002c2c0a</uuid>
                    <externalcode>Swpsy2OVgnuMD_j3sb4Or0</externalcode>
                </file>
        */
        $file=new AttributeFile();

        //аттрибуты
        $file->setCreated(   (string)$param['created']);
        $file->setFilename(  (string)$param['filename']);
        $file->setName(      (string)$param['name']);

        $this->setCommonAttributes($param,$file); //changeMode readMode updatedBy updated parentUuid code externalcode description AccountUuid AccountId Uuid

        return $file;
    }

    function simplexmlToCustomerOrderPosition($param)
    {
        /*
            <customerOrderPosition
                discount="0.0"
                quantity="1.0"
                consignmentUuid="e2fd0f61-6c23-11e4-90a2-8ecb00342f68"
                goodUuid="e2fd0aff-6c23-11e4-90a2-8ecb00342f66"
                vat="10"
                readMode="SELF"
                changeMode="SELF">

                <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                <uuid>e4ce4b81-7004-11e4-90a2-8ecb002c379c</uuid>
                <basePrice sum="300.0" sumInCurrency="300.0"/>
                <price sum="300.0" sumInCurrency="300.0"/>
                <things/>
                <reserve>0.0</reserve>
            </customerOrderPosition>
        */
        $customerOrderPosition=new CustomerOrderPositione();
        $customerOrderPosition->discount="0.0";//  PRECISION 0.0
        $customerOrderPosition->quantity="1.0";//  PRECISION 0.0
        $customerOrderPosition->consignmentUuid="e2fd0f61-6c23-11e4-90a2-8ecb00342f68";
        $customerOrderPosition->goodUuid="e2fd0aff-6c23-11e4-90a2-8ecb00342f66";
        $customerOrderPosition->setVat($param['vat']);
        $customerOrderPosition->setBasePriceSum($param->basePrice['basePriceSum']);               //  PRECISION 0.0
        $customerOrderPosition->setBaseSumInCurrency($param->basePrice['baseSumInCurrency']);     //  PRECISION 0.0
        $customerOrderPosition->setPriceSum($param->price['priceSum']);                       //  PRECISION 0.0
        $customerOrderPosition->setPriceSumInCurrency($param->price['priceSumInCurrency']);   //  PRECISION 0.0


        // TODO $customerOrderPosition->        <things/>
        $customerOrderPosition->setReserve($param->reserve);//  PRECISION 0.0

        //аттрибуты
        $customerOrderPosition->setCreated(   (string)$param['created']);
        $customerOrderPosition->setFilename(  (string)$param['filename']);
        $customerOrderPosition->setName(      (string)$param['name']);

        $customerOrderPosition->setDiscount();



        $this->setCommonAttributes($param,$customerOrderPosition); //changeMode readMode updatedBy updated parentUuid code externalcode description AccountUuid AccountId Uuid

        return $customerOrderPosition;
    }


    function simplexmlToAttribute($param)
    {
/*
        <attribute  operationUuid="e4ce0139-7004-11e4-90a2-8ecb002c3792"
                       metadataUuid="135daa59-7004-11e4-90a2-8ecb002c16df" timeValue="2014-11-05T18:53:00+03:00"
                       updated="2014-11-19T18:58:22.762+03:00" updatedBy="admin@test_api" readMode="SELF"
                       changeMode="SELF">
                <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                <uuid>e4ce486e-7004-11e4-90a2-8ecb002c3797</uuid>
            </attribute>
timeValue="2014-11-05T18:53:00+03:00"
alueString="ТЕСТОВАЯ СТРОКА"
valueText="тестовый текст. отличается от тестовой строки, видимо, размером."
booleanValue="true"
goodValueUuid="14e7ee75-7002-11e4-90a2-8ecb002bd51e"
timeValue="2014-11-05T18:53:00+03:00"
doubleValue="777.777"
longValue="777777"
valueText="http://vk.com"


*/
        $attribute=new Attribute();


        //аттрибуты
        $attribute->setOperationUuid((string)$param['operationUuid']);
        $attribute->setMetadataUuid( (string)$param['metadataUuid']);


        if(isset($param['booleanValue'])) {$attribute->setBooleanValue( $param['booleanValue']);}
        if(isset($param['goodValueUuid'])){$attribute->setGoodValueUuid($param['goodValueUuid']);}
        if(isset($param['valueText']))    {$attribute->setValueText(    $param['valueText']);}
        if(isset($param['valueString']))  {$attribute->setValueString(  $param['valueString']);}
        if(isset($param['timeValue']))    {$attribute->setTimeValue(    $param['timeValue']);}
        if(isset($param['doubleValue']))  {$attribute->setDoubleValue(  $param['doubleValue']);}
        if(isset($param['longValue']))    {$attribute->setLongValue(    $param['longValue']);}
        if(isset($param->file))           {$attribute->setFile(         $this->simplexmlToAttributeFile($param->file));}

        $this->setCommonAttributes($param,$attribute); //changeMode readMode updatedBy updated parentUuid code externalcode description AccountUuid AccountId Uuid

        return $attribute;
    }


    function xmlToCustomerOrderDecoder($param)

    {
            $xmlRoot=simplexml_load_string($param);

            //var_export($xmlRoot);

            $order=new CustomerOrder();

            $order->setDeliveryPlannedMoment((string)$xmlRoot['deliveryPlannedMoment']);//DATETIME
            $order->setReservedSum(          (string)$xmlRoot['reservedSum']);//  PRECISION 0.0
            $order->setStateUuid(            (string)$xmlRoot['stateUuid']);
            $order->setTargetAgentUuid(      (string)$xmlRoot['targetAgentUuid']);
            $order->setSourceAgentUuid(      (string)$xmlRoot['sourceAgentUuid']);
            $order->setSourceStoreUuid(      (string)$xmlRoot['sourceStoreUuid']);
            $order->setApplicable(           (bool)  $xmlRoot['applicable']);//="true"
            $order->setMoment(               (string)$xmlRoot['moment']);//="2014-11-19T18:54:00+03:00" DATETIME
            $order->setTargetAccountUuid(    (string)$xmlRoot['targetAccountUuid']);
            $order->setSourceAccountUuid(    (string)$xmlRoot['sourceAccountUuid']);
            $order->setPayerVat(             (bool)  $xmlRoot['payerVat']);//="true"
            $order->setCurrencyUuid(         (string)$xmlRoot['currencyUuid']);
            $order->setRate(                 (string)$xmlRoot['rate']);//  PRECISION 0.0
            $order->setVatIncluded(          (bool)  $xmlRoot['vatIncluded']);//="true"
            $order->setCreated(              (string)$xmlRoot['created']);//DATETIME
            $order->setCreatedBy(            (string)$xmlRoot['createdBy']);//"admin@test_api"
            $order->setEmployeeUuid(         (string)$xmlRoot['employeeUuid']);
            $order->setName(                 (string)$xmlRoot['name']);//="999"

            //сумма <sum sum="300.0" sumInCurrency="300.0"/>
            $order->setSum($xmlRoot->sum['sum']);
            $order->setSumInCurrency($xmlRoot->sum['sumInCurrency']);

            $this->setCommonAttributes($xmlRoot,$order); //changeMode readMode updatedBy updated parentUuid code externalcode description AccountUuid AccountId Uuid

            $this->simplexmlToAttributes($xmlRoot,$order);
            $this->simplexmlToCustomerOrderPositions($xmlRoot,$order);

            //<demandsUuid/>
            //<invoicesOutUuid/>
            //<paymentsUuid/>

            return $order;
    }


    function simplexmlToAttributes($xml,$object)
    {
        if(count($xml->attribute)>0){
            $tmpAttributes=array();
            foreach($xml->attribute AS $rec){
                $tmpAttributes[]=$this->simplexmlToAttribute($rec);
            }
        }
        $object->setAttributes($tmpAttributes);
    }


    function simplexmlToCustomerOrderPositions($xml,$object)
    {
        if(count($xml->customerOrderPosition)>0){
            $tmpCustomerOrderPosition=array();
            foreach($xml->customerOrderPosition AS $rec){
                $tmpCustomerOrderPosition[]=$this->simplexmlToCustomerOrderPosition($rec);
            }
        }
        $object->setCustomerOrderPosition($tmpCustomerOrderPosition);
    }


}
