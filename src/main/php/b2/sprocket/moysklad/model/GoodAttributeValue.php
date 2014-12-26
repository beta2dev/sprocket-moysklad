<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 26.12.2014
 * Time: 14:50
 */

namespace b2\sprocket\moysklad\model;


class GoodAttributeValue extends AttributeValue{
    protected $goodUuid;

    /**
     * @return mixed
     */
    public function getGoodUuid()
    {
        return $this->goodUuid;
    }

    /**
     * @param mixed $goodUuid
     */
    public function setGoodUuid($goodUuid)
    {
        $this->goodUuid = $goodUuid;
    }

}