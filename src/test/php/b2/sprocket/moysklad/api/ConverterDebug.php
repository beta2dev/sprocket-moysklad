<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 02.12.14
 * Time: 11:54
 */
namespace b2\sprocket\moysklad\api;

error_reporting(E_ALL);
ini_set('display_errors',1);
require_once '../../../../../../main/php/b2/sprocket/moysklad/api/classload.php';




$test='<good isSerialTrackable="false"
       buyPrice="0.0"
       weight="0.0"
       volume="0.0"
       minPrice="0.0"
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
    </good>';



var_export('>>>>'.$price->getNS().'<<<<');

var_export(get_declared_classes());

$conv=new DataConverter();
$result=$conv->xmlToGood($test);
var_export($result);
