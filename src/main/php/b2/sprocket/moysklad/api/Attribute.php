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
 */
class Attribute extends MoyskladObject{

    /**
     * @internal example $metadataUuid="da3da89d-73dc-11e4-90a2-8ecb002476d8";
     * @var string
     */
    private $metadataUuid;

    /**
     * @internal example $valueString="жёлтый";
     * @var string
     */
    private $valueString;

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

}