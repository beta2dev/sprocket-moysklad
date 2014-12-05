<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 24.11.14
 * Time: 17:20
 */

//namespace b2\;


namespace b2\sprocket\moysklad\api;

/**
 * Class Attribute
 *
 * Атрибут фичи(характеристики) товара
 *
 *
 * <attribute operationUuid="e4ce0139-7004-11e4-90a2-8ecb002c3792"
    metadataUuid="135dad92-7004-11e4-90a2-8ecb002c16e1" updated="2014-11-19T18:58:22.761+03:00"
    updatedBy="admin@test_api" readMode="SELF" changeMode="SELF">
    <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
    <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
    <uuid>e4ce45c4-7004-11e4-90a2-8ecb002c3793</uuid>
    <file created="2014-11-19T18:55:52.184+03:00" filename="TEST_FILE.txt" name="TEST_FILE.txt"
        updated="2014-11-19T18:55:52.184+03:00" updatedBy="admin@test_api" readMode="ALL"
        changeMode="NONE">
        <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
        <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
        <uuid>8b0e063f-7004-11e4-90a2-8ecb002c2c0a</uuid>
        <externalcode>Swpsy2OVgnuMD_j3sb4Or0</externalcode>
    </file>
</attribute>
 */
class Attribute extends MoyskladObject
{

    /**
     * @internal example $metadataUuid="da3da89d-73dc-11e4-90a2-8ecb002476d8";
     * @var string
     */
    private $metadataUuid;

    /**
     * @internal example $valueString="жёлтый";
     * @var string
     */
    private $valueString=NULL;

    /**
     * @internal если его в атрибуте нет, то даже пустой тег не ставится, вообще ничего
     * @var AttributeFile
     */

    private $booleanValue;

    private $timeValue;

    private $doubleValue;

    private $longValue;

    private $longText;

    private $operationUuid;

    private $goodValueUuid;

    private $valueText;

    private $file;

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }




    /**
     * @return mixed
     */
    public function getGoodValueUuid()
    {
        return $this->goodValueUuid;
    }

    /**
     * @param mixed $goodValueUuid
     */
    public function setGoodValueUuid($goodValueUuid)
    {
        $this->goodValueUuid = $goodValueUuid;
    }

    /**
     * @return mixed
     */
    public function getValueText()
    {
        return $this->valueText;
    }

    /**
     * @param mixed $valueText
     */
    public function setValueText($valueText)
    {
        $this->valueText = $valueText;
    }






/**
     * @return null
     */
    public function getOperationUuid()
    {
        return $this->operationUuid;
    }

    /**
     * @param null $operationUuid
     */
    public function setOperationUuid($operationUuid)
    {
        $this->operationUuid = $operationUuid;
    }


    /**
     * @return null
     */
    public function getLongText()
    {
        return $this->longText;
    }

    /**
     * @param null $longText
     */
    public function setLongText($longText)
    {
        $this->longText = $longText;
    }

    /**
     * @return null
     */
    public function getDoubleValue()
    {
        return $this->doubleValue;
    }

    /**
     * @param null $doubleValue
     */
    public function setDoubleValue($doubleValue)
    {
        $this->doubleValue = $doubleValue;
    }

    /**
     * @return null
     */
    public function getLongValue()
    {
        return $this->longValue;
    }

    /**
     * @param null $longValue
     */
    public function setLongValue($longValue)
    {
        $this->longValue = $longValue;
    }


    /**
     * @return null
     */
    public function getTimeValue()
    {
        return $this->timeValue;
    }

    /**
     * @param null $timeValue
     */
    public function setTimeValue($timeValue)
    {
        $this->timeValue = $timeValue;
    }

    /**
     * @return null
     */
    public function getBooleanValue()
    {
        return $this->booleanValue;
    }

    /**
     * @param null $booleanValue
     */
    public function setBooleanValue($booleanValue)
    {
        $this->booleanValue = $booleanValue;
    }



    /**
     * @param string $metadataUuid
     */
    public function setMetadataUuid($metadataUuid)
    {
        $this->metadataUuid = $metadataUuid;
    }

    /**
     * @return string
     */
    public function getMetadataUuid()
    {
        return $this->metadataUuid;
    }

    /**
     * @param string $valueString
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
    }

    /**
     * @return string
     */
    public function getValueString()
    {
        return $this->valueString;
    }


/*
<file created="2014-11-19T18:55:52.184+03:00" filename="TEST_FILE.txt" name="TEST_FILE.txt"
updated="2014-11-19T18:55:52.184+03:00" updatedBy="admin@test_api" readMode="ALL"
changeMode="NONE">
*/
}