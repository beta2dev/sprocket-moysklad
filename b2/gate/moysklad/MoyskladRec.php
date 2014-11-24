<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 24.11.14
 * Time: 14:32
 */

/**
 * Class MoyskladRec
 *
 * Здесь лежат поля, обязательные для каждой сущности в МоёмСкладе, будь то объект, цена или
 */
class MoyskladRec {

    /**
     * @internal example
     * @var string
     */
    protected $accountUuid;

    /**
     * @internal example
     * @var string
     */
    protected $accountId;

    /**
     *
     * @internal example
     * @var string
     */
    protected $uuid;


    /**
     * @internal example $readMode="ALL"
     * @var string
     */
    protected $readMode;

    /**
     * @param string $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $accountUuid
     */
    public function setAccountUuid($accountUuid)
    {
        $this->accountUuid = $accountUuid;
    }

    /**
     * @return string
     */
    public function getAccountUuid()
    {
        return $this->accountUuid;
    }

    /**
     * @param string $changeMode
     */
    public function setChangeMode($changeMode)
    {
        $this->changeMode = $changeMode;
    }

    /**
     * @return string
     */
    public function getChangeMode()
    {
        return $this->changeMode;
    }

    /**
     * @param string $readMode
     */
    public function setReadMode($readMode)
    {
        $this->readMode = $readMode;
    }

    /**
     * @return string
     */
    public function getReadMode()
    {
        return $this->readMode;
    }

    /**
     * @param string $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @internal example $changeMode="SELF"
     * @var string
     */
    protected $changeMode;







}