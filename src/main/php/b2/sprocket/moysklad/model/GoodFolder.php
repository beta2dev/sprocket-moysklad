<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 25.12.2014
 * Time: 18:33
 */

namespace b2\sprocket\moysklad\model;


class GoodFolder extends Classifier{
        protected $archived;//" type="xs:boolean" use="required"/>
        protected $parentUuid;//" type="xs:IDREF"/>
        protected $productCode;//" type="xs:string"/>
        protected $vat;//" type="xs:long"/>
        protected $goodAttributeValue;

    protected $attribute;

    /**
     * @return mixed
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @param mixed $attribute
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;
    }

    /**
     * @return mixed
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * @param mixed $archived
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;
    }

    /**
     * @return mixed
     */
    public function getParentUuid()
    {
        return $this->parentUuid;
    }

    /**
     * @param mixed $parentUuid
     */
    public function setParentUuid($parentUuid)
    {
        $this->parentUuid = $parentUuid;
    }

    /**
     * @return mixed
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param mixed $productCode
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
    }

    /**
     * @return mixed
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param mixed $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    /**
     * @return mixed
     */
    public function getGoodAttributeValue()
    {
        return $this->goodAttributeValue;
    }

    /**
     * @param mixed $goodAttributeValue
     */
    public function setGoodAttributeValue($goodAttributeValue)
    {
        $this->goodAttributeValue = $goodAttributeValue;
    }


}