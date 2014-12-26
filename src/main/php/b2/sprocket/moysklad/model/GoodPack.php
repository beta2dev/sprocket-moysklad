<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 26.12.2014
 * Time: 12:20
 */

namespace b2\sprocket\moysklad\model;


class GoodPack extends Entity{
        protected $quantity;//" type="xs:double" use="required"/>
        protected $uomUuid;

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getUomUuid()
    {
        return $this->uomUuid;
    }

    /**
     * @param mixed $uomUuid
     */
    public function setUomUuid($uomUuid)
    {
        $this->uomUuid = $uomUuid;
    }//" type="xs:IDREF"/>
}