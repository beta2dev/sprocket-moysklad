<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 19:17
 */
namespace b2\sprocket\moysklad\model;

class Entity extends AccountEntity{
/*<LegendEntity reservedSum="0.0"
updated="2014-12-18T19:15:18.271+03:00"
updatedBy="admin@zloperdov" readMode="SELF"
changeMode="SELF">
<accountUuid>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountUuid>
<accountId>90e1c841-86cb-11e4-90a2-8ecb00001cd3</accountId>
<uuid>654fda14-86ce-11e4-90a2-8ecb002e30ac</uuid>

</LegendEntity>
*/

    //attributes----------------
    /**
     * @var string
     * XS
     */
    public $accessMode;

    /**
     * @var string
     * XS
     */
    public $readMode;


    //properties----------------

    /**
     * @var string
     * XS
     */
    public $groupUuid;

    /**
     * @return string
     */
    public function getAccessMode()
    {
        return $this->accessMode;
    }

    /**
     * @param string $accessMode
     */
    public function setAccessMode($accessMode)
    {
        $this->accessMode = $accessMode;
    }

    /**
     * @return string
     */
    public function getReadMode()
    {
        return $this->readMode;
    }

    /**
     * @param string $readMode
     */
    public function setreadMode($readMode)
    {
        $this->readMode = $readMode;
    }

    /**
     * @return string
     */
    public function getGroupUuid()
    {
        return $this->groupUuid;
    }

    /**
     * @param string $groupUuid
     */
    public function setGroupUuid($groupUuid)
    {
        $this->groupUuid = $groupUuid;
    }








}