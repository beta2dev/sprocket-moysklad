<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 19:13
 */
namespace b2\sprocket\moysklad\model;

class InfoEntity extends Entity{
    /*
    * <LegendEntity reservedSum="0.0"
            updated="2014-12-18T19:15:18.271+03:00"
            updatedBy="admin@zloperdov" readMode="SELF"
            changeMode="SELF">
        <accountUuid>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountUuid>
        <accountId>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountId>
        <uuid>654fda14-86ce-11e4-90a2-8ecb002e30ac</uuid>

    </LegendEntity>
    */
    /**
     * @var datetime
     * XS
     */
    protected $updated;

    /**
     * @var string
     * XS
    */
    protected $updatedBy;

    /**
     * @return datetime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param datetime $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * @param string $updatedBy
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
    }


}