<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 24.11.14
 * Time: 15:39
 */


namespace b2\sprocket\moysklad\api;
/**
 * Class MoyskladObject
 *
 * книверсальный класс с учётом прав доступа, даты последнего редактирования и т.д.
 */
class MoyskladObject extends MoyskladRec {

    /**
     * @internal example $updated="2014-11-24T17:17:26.705+03:00"
     * @var string
     */
    protected $updated;

    /**
     * @internal example $updatedBy="admin@test_api"
     * @var string
     */
    protected $updatedBy;

    /**
     * Родительский элемент для папки или товара в папке
     * @var string
     */
    protected $parentUuid;

    /**
     * @param string $parentUuid
     */
    public function setParentUuid($parentUuid)
    {
        $this->parentUuid = $parentUuid;
    }

    /**
     * @return string
     */
    public function getParentUuid()
    {
        return $this->parentUuid;
    }

    /**
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updatedBy
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
    }

    /**
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }









}