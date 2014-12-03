<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 24.11.14
 * Time: 18:16
 */


namespace b2\sprocket\moysklad\api;

/**
 * Class Feature
 *
 * Характеристика, используется для организации учёта модификаций товара с разными свойствами
 */
class Feature extends MoyskladObject
{


/**
 * @var string
 */
private $archived="false";

/**
 * @var string
 */
private $goodUuid;

/**
 * @var string
 */
private $name;

/**
 * @var string
 */
private $externalcode;

/**
 * @var Attribute
 */
private $attribute;

/**
 * @var Barcode
 */
private $barcode;

    /**
     * @param string $archived
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;
    }

    /**
     * @return string
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * @param \Attribute $attribute
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;
    }

    /**
     * @return \Attribute
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @param \Barcode $barcode
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    /**
     * @return \Barcode
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param string $externalcode
     */
    public function setExternalcode($externalcode)
    {
        $this->externalcode = $externalcode;
    }

    /**
     * @return string
     */
    public function getExternalcode()
    {
        return $this->externalcode;
    }

    /**
     * @param string $goodUuid
     */
    public function setGoodUuid($goodUuid)
    {
        $this->goodUuid = $goodUuid;
    }

    /**
     * @return string
     */
    public function getGoodUuid()
    {
        return $this->goodUuid;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }




}