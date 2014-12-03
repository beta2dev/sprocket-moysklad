<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 02.12.14
 * Time: 13:00
 */

namespace b2\sprocket\moysklad\api;



class DataConverter
{

    function xmlToGood($param){
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
        $xml_root=simplexml_load_string($param);

        $good=new Good();
        $good->setBuyPrice(   (string)$xml_root['buyPrice']);
        $good->setWeight(     (string)$xml_root['weight']);
        $good->setVolume(     (string)$xml_root['volume']);
        $good->setMinPrice(   (string)$xml_root['minPrice']);
        $good->setUomUuid(    (string)$xml_root['uomUuid']);
        $good->setSalePrice(  (string)$xml_root['salePrice']);

        $good->setArchived(filter_var($xml_root['archived'], FILTER_VALIDATE_BOOLEAN));

        $good->setParentUuid( (string)$xml_root['parentUuid']);
        $good->setProductCode((string)$xml_root['productCode']);
        $good->setName(       (string)$xml_root['name']);
        $good->setUpdated(    (string)$xml_root['updated']);
        $good->setUpdatedBy(  (string)$xml_root['updatedBy']);
        $good->setReadMode(   (string)$xml_root['readMode']);
        $good->setChangeMode( (string)$xml_root['changeMode']);


        //var_export($xml_root);
        $good->setAccountUuid( (string) $xml_root->accountUuid);
        $good->setAccountId(   (string)$xml_root->accountId);
        $good->setUuid(        (string)$xml_root->uuid);
        $good->setCode(        (string) $xml_root->code);
        $good->setExternalcode((string)$xml_root->externalcode);
        $good->setDescription( (string)$xml_root->description);

        $good->setBarcode($this->simplexmlToBarcode($xml_root->barcode));

        $good->setSalePrices($this->simplexmlToSalePrices($xml_root->salePrices->price));
        //$good->setPreferences($this->simplexmlToPreferences($xml_root->preferences));
        $good->setImages($this->simplexmlToImages($xml_root->images->image));

        return $good;

    }


    function simplexmlToBarcode($param){
        /*<barcode barcode="2000000000022" barcodeType="EAN13" readMode="ALL" changeMode="SELF">
            <accountUuid>e532ef02-7947-11e4-7a07-673c0000611b</accountUuid>
            <accountId>e532ef02-7947-11e4-7a07-673c0000611b</accountId>
            <uuid>764e78b0-7957-11e4-90a2-8eca000d40f7</uuid>
        </barcode>*/
        $barcode= new Barcode();
        $attrs=$param->attributes();

        $barcode->setBarcode(     (string)$param['barcode']);
        $barcode->setBarcodeType( (string)$param['barcodeType']);
        $barcode->setReadMode(    (string)$param['readMode']);
        $barcode->setChangeMode(  (string)$param['changeMode']);

        $barcode->setAccountUuid( (string)$param->accountUuid);
        $barcode->setAccountId(   (string)$param->accountId);
        $barcode->setUuid(        (string)$param->uuid);

        return $barcode;
    }


    function simplexmlToSalePrices($param){
        $result=array();
        //var_export($param);
        //echo '=============='.count($param).'===============';
        if(count($param)==0){
            return NULL;
        } else {
            foreach($param AS $rec){
                $result[]=$this->simplexmlToPrice($rec);
            }
            return $result;
        }
    }


    function simplexmlToPrice($param){
        $price=new Price();

        if(empty($param['priceTypeUuid'])){return NULL;}

        //аттрибуты
        $price->setCurrencyUuid( (string)$param['currencyUuid']);
        $price->setPriceTypeUuid((string)$param['priceTypeUuid']);
        $price->setValue(        (string)$param['value']);
        $price->setReadMode(     (string)$param['readMode']);
        $price->setChangeMode(      (string)$param['changeMode']);
        //поля
        $price->setAccountUuid((string)$param->accountUuid);
        $price->setAccountId(  (string)$param->accountId);
        $price->setUuid(       (string)$param->uuid);

        return $price;
    }


    function simplexmlToImages($param){
        if(count($param)==0){
            return NULL;
        } else {
            foreach($param AS $rec){
                $result[]=$this->simplexmlToImage($rec);
            }
            return $result;
        }
    }


    function simplexmlToImage($param){
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

        $image->setupdated(      (string)$param['updated']);
        $image->setupdatedBy(    (string)$param['updatedBy']);
        $image->setreadMode(     (string)$param['readMode']);
        $image->setchangeMode(   (string)$param['changeMode']);


        //поля
        $image->setAccountUuid( (string)$param->accountUuid);
        $image->setAccountId(   (string)$param->accountId);
        $image->setUuid(        (string)$param->uuid);
        $image->setExternalcode((string)$param->externalcode);


        return $image;
    }


    function xmlToGoodFolder($param){
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
        $xml_root=simplexml_load_string($param);

        $goodFolder=new GoodFolder();

        $goodFolder->setArchived(filter_var($xml_root['archived'], FILTER_VALIDATE_BOOLEAN));

        $goodFolder->setProductCode((string)$xml_root['productCode']);
        $goodFolder->setVat(         (int)  $xml_root['vat']);
        $goodFolder->setName(        (string)$xml_root['name']);
        $goodFolder->setUpdated(     (string)$xml_root['updated']);
        $goodFolder->setUpdatedBy(   (string)$xml_root['updatedBy']);
        $goodFolder->setReadMode(    (string)$xml_root['readMode']);
        $goodFolder->setChangeMode(  (string)$xml_root['changeMode']);

        $goodFolder->setAccountUuid( (string) $xml_root->accountUuid);
        $goodFolder->setAccountId(   (string)$xml_root->accountId);
        $goodFolder->setUuid(        (string)$xml_root->uuid);
        $goodFolder->setCode(        (string) $xml_root->code);
        $goodFolder->setExternalcode((string)$xml_root->externalcode);
        $goodFolder->setDescription( (string)$xml_root->description);

        return $goodFolder;
    }



}
