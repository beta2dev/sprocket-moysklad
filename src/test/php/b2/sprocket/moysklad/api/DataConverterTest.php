<?php
/**
 * Created by IntelliJ IDEA.
 * User: dlipeev
 * Date: 02.12.14
 * Time: 11:38
 */
namespace b2\sprocket\moysklad\api;

$GLOBALS['b2foundation'] = 'c:\arbeit\fastfw\foundation\src\main\php';
require_once 'c:\arbeit\fastfw\foundation\src\main\php\b2\sys\classloading.php';
b2classpath('c:\arbeit\sprocket-moysklad\src\main\php\\');
//$GLOBALS['b2classloader']




class DataConverterTest extends \PHPUnit_Framework_TestCase
{
    public function testXmlToGood()
    {


        $xml='<good isSerialTrackable="false" buyPrice="0.0" weight="0.0" volume="0.0" minPrice="0.0"
        uomUuid="19f1edc0-fc42-4001-94cb-c9ec9c62ec10" salePrice="0.0" archived="false"
        parentUuid="5a819792-7957-11e4-90a2-8eca000d38c7" productCode="" name="товар_в_root_1"
        updated="2014-12-01T15:42:08.193+03:00" updatedBy="admin@hrenovuha" readMode="ALL" changeMode="SELF">


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
        <salePrices>
            <price currencyUuid="c3550b1c-6c18-11e4-90a2-8ecb0033556f"
                   priceTypeUuid="cd493d72-73dc-11e4-90a2-8ecb0024750b"
                   value="400.0" readMode="ALL"
                   changeMode="ALL">
                <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                <uuid>da3dacf2-73dc-11e4-90a2-8ecb002476d9</uuid>
            </price>
            <price currencyUuid="c3550b1c-6c18-11e4-90a2-8ecb0033556f"
                   priceTypeUuid="c3559cb2-6c18-11e4-90a2-8ecb00335571" value="300.0" readMode="ALL"
                   changeMode="ALL">
                <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                <uuid>e2fd107b-6c23-11e4-90a2-8ecb00342f69</uuid>
            </price>
        </salePrices>
        <preferences/>
        <images>
                <image tinyUuid="81d1b385-73dc-11e4-90a2-8ecb0024626d" created="2014-11-24T16:19:19.272+03:00"
                       filename="9277645.jpg" miniatureUuid="81f0d483-73dc-11e4-90a2-8ecb00246279" name="9277645.jpg"
                       updated="2014-11-24T16:19:19.534+03:00" updatedBy="admin@test_api" readMode="ALL"
                       changeMode="NONE">
                    <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                    <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                    <uuid>81d1bbfd-73dc-11e4-90a2-8ecb0024626e</uuid>
                    <externalcode>zOFbZIArjUmP3Jgj2vRH10</externalcode>
                </image>
        </images>
        </good>';


        $converter=new DataConverter();
        $good_xml=$converter->xmlToGood($xml);

        $good=new Good();

        $good->setBuyPrice("0.0");
        $good->setWeight("0.0");
        $good->setVolume("0.0");
        $good->setMinPrice("0.0");
        $good->setUomUuid('19f1edc0-fc42-4001-94cb-c9ec9c62ec10');
        $good->setSalePrice("0.0");
        $good->setArchived(false);
        $good->setParentUuid("5a819792-7957-11e4-90a2-8eca000d38c7");
        $good->setProductCode("");
        $good->setName("товар_в_root_1");
        $good->setUpdated("2014-12-01T15:42:08.193+03:00");
        $good->setUpdatedBy("admin@hrenovuha");
        $good->setReadMode("ALL");
        $good->setChangeMode("SELF");


        //var_export($xml_root);
        $good->setAccountUuid( 'e532ef02-7947-11e4-7a07-673c0000611b');
        $good->setAccountId(   'e532ef02-7947-11e4-7a07-673c0000611b');
        $good->setUuid(        '764e7594-7957-11e4-90a2-8eca000d40f6');
        $good->setCode(        '');
        $good->setExternalcode('SNR__6kZhiC-0wMZv9Xrz1');
        $good->setDescription( '');


        /*<barcode barcode="2000000000022" barcodeType="EAN13" readMode="ALL" changeMode="SELF">
            <accountUuid>e532ef02-7947-11e4-7a07-673c0000611b</accountUuid>
            <accountId>e532ef02-7947-11e4-7a07-673c0000611b</accountId>
            <uuid>764e78b0-7957-11e4-90a2-8eca000d40f7</uuid>
        </barcode>'*/

        $barcode=new Barcode();
        $barcode->setBarcode(    "2000000000022");
        $barcode->setBarcodeType("EAN13");
        $barcode->setReadMode(   "ALL");
        $barcode->setChangeMode( "SELF");

        $barcode->setAccountUuid('e532ef02-7947-11e4-7a07-673c0000611b');
        $barcode->setAccountId(  'e532ef02-7947-11e4-7a07-673c0000611b');
        $barcode->setUuid(       '764e78b0-7957-11e4-90a2-8eca000d40f7');

        $good->setBarcode($barcode);

        $prices=array();
        $prices[0]=new Price();
        //аттрибуты
        $prices[0]->setPriceTypeUuid("cd493d72-73dc-11e4-90a2-8ecb0024750b");
        $prices[0]->setCurrencyUuid("c3550b1c-6c18-11e4-90a2-8ecb0033556f");
        $prices[0]->setValue(        "400.0");
        $prices[0]->setReadMode(     "ALL");
        $prices[0]->setChangeMode(   "ALL");
        //поля
        $prices[0]->setAccountUuid("a0ee97e5-6c18-11e4-7a07-673d00001bc4");
        $prices[0]->setAccountId(  "a0ee97e5-6c18-11e4-7a07-673d00001bc4");
        $prices[0]->setUuid(       "da3dacf2-73dc-11e4-90a2-8ecb002476d9");

        $prices[1]=new Price();
        $prices[1]->setPriceTypeUuid("c3559cb2-6c18-11e4-90a2-8ecb00335571");
        $prices[1]->setCurrencyUuid("c3550b1c-6c18-11e4-90a2-8ecb0033556f");
        $prices[1]->setValue(        "300.0");
        $prices[1]->setReadMode(     "ALL");
        $prices[1]->setChangeMode(   "ALL");
        //поля
        $prices[1]->setAccountUuid("a0ee97e5-6c18-11e4-7a07-673d00001bc4");
        $prices[1]->setAccountId(  "a0ee97e5-6c18-11e4-7a07-673d00001bc4");
        $prices[1]->setUuid(       "e2fd107b-6c23-11e4-90a2-8ecb00342f69");

        $good->setSalePrices($prices);



        /*
         * <image tinyUuid="81d1b385-73dc-11e4-90a2-8ecb0024626d" created="2014-11-24T16:19:19.272+03:00"
                       filename="9277645.jpg" miniatureUuid="81f0d483-73dc-11e4-90a2-8ecb00246279" name="9277645.jpg"
                       updated="2014-11-24T16:19:19.534+03:00" updatedBy="admin@test_api" readMode="ALL"
                       changeMode="NONE">
                    <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
                    <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
                    <uuid>81d1bbfd-73dc-11e4-90a2-8ecb0024626e</uuid>
                    <externalcode>zOFbZIArjUmP3Jgj2vRH10</externalcode>
                </image>
         */
        $images=array();
        $images[0]=new GoodImage();
        $images[0]->setTinyUuid(     "81d1b385-73dc-11e4-90a2-8ecb0024626d");//"81d1b385-73dc-11e4-90a2-8ecb0024626d"
        $images[0]->setCreated(      "2014-11-24T16:19:19.272+03:00");
        $images[0]->setFilename(     "9277645.jpg");
        $images[0]->setMiniatureUuid("81f0d483-73dc-11e4-90a2-8ecb00246279");
        $images[0]->setName(         "9277645.jpg");

        $images[0]->setUpdated(      "2014-11-24T16:19:19.534+03:00");
        $images[0]->setUpdatedBy(    "admin@test_api");
        $images[0]->setReadMode(     "ALL");
        $images[0]->setChangeMode(   "NONE");


        //поля
        $images[0]->setAccountUuid("a0ee97e5-6c18-11e4-7a07-673d00001bc4");
        $images[0]->setAccountId(  "a0ee97e5-6c18-11e4-7a07-673d00001bc4");
        $images[0]->setUuid(       "81d1bbfd-73dc-11e4-90a2-8ecb0024626e");
        $images[0]->setExternalcode("zOFbZIArjUmP3Jgj2vRH10");

        $good->setImages($images);

        $s_fnc=serialize($good);
        $s_xml=serialize($good_xml);

        if(strcmp($s_xml,$s_fnc)==0){
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false);
        }


    }


    public function testXmlToGoodFolder()
    {
        $xml='<goodFolder
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
        </goodFolder>';

        $converter=new DataConverter();
        $goodFolder_xml=$converter->xmlToGoodFolder($xml);


        $goodFolder=new GoodFolder();
        $goodFolder->setArchived(false);

        $goodFolder->setProductCode( (string)'');
        $goodFolder->setVat(         (int)'10');
        $goodFolder->setName(        (string)"ГруппаКорневая");
        $goodFolder->setUpdated(     (string)"2014-11-24T17:16:55.586+03:00");
        $goodFolder->setUpdatedBy(   (string)"admin@test_api");
        $goodFolder->setReadMode(    (string)"ALL");
        $goodFolder->setChangeMode(  (string)"SELF");

        $goodFolder->setAccountUuid( (string)'a0ee97e5-6c18-11e4-7a07-673d00001bc4');
        $goodFolder->setAccountId(   (string)'a0ee97e5-6c18-11e4-7a07-673d00001bc4');
        $goodFolder->setUuid(        (string)'8de88966-73e4-11e4-90a2-8ecb00264152');
        $goodFolder->setCode(        (string)'1');
        $goodFolder->setExternalcode((string)'NLfKBysYi0_lfpDiMP5kA1');
        $goodFolder->setDescription( (string)'');


        $s_fnc=serialize($goodFolder);
        $s_xml=serialize($goodFolder_xml);



        for($i=0;$i<=strlen($s_fnc);$i++){
            $c1=substr($s_fnc,$i,1);
            $c2=substr($s_xml,$i,1);
            if($c1!==$c2){
                echo 'xml:::'.PHP_EOL;
                echo substr($s_xml,$i-20,25).PHP_EOL;
                echo 'fnc:::'.PHP_EOL;
                echo substr($s_fnc,$i-20,25);
                echo $c1.'!='.$c2;
                $this->assertTrue(false);
                break;//die(0);//var_export(NULL);
            } else {

            }

        }



        if(strcmp($s_xml,$s_fnc)==0){
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false);
        }

    }

}


?>