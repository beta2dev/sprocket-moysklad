<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 19.12.2014
 * Time: 19:22
 */
namespace b2\sprocket\moysklad\model;

class AccountEntity  {
    /**
     * @var string
     * XS
     */
    protected $accountUuid;

    /**
     * @var string
     * XS
     */
    protected $accountId;

    /**
     * @var string
     * XS
     */
    protected $uuid;

    /**
     * @return string
     */
    public function getAccountUuid()
    {
        return $this->accountUuid;
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
    public function getAccountId()
    {
        return $this->accountId;
    }

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
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }




}