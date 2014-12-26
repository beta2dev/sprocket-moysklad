<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 26.12.2014
 * Time: 12:58
 */

namespace b2\sprocket\moysklad\model;


class GoodSlotPreference extends Entity{
    protected $slotUuid;

    /**
     * @return mixed
     */
    public function getSlotUuid()
    {
        return $this->slotUuid;
    }

    /**
     * @param mixed $slotUuid
     */
    public function setSlotUuid($slotUuid)
    {
        $this->slotUuid = $slotUuid;
    }

}