<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 26.12.2014
 * Time: 12:47
 */

namespace b2\sprocket\moysklad\model;


class GoodImage extends AttachableDocument{
    protected $tinyUuid;

    /**
     * @return mixed
     */
    public function getTinyUuid()
    {
        return $this->tinyUuid;
    }

    /**
     * @param mixed $tinyUuid
     */
    public function setTinyUuid($tinyUuid)
    {
        $this->tinyUuid = $tinyUuid;
    }
}