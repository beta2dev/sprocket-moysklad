<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 03.12.2014
 * Time: 15:34
 */

namespace b2\sprocket\moysklad\api;

/**
 * Class AttributeFile
 *
 * Атрибут фичи - файл
 *
<file created="2014-11-19T18:55:52.184+03:00" filename="TEST_FILE.txt" name="TEST_FILE.txt"
    updated="2014-11-19T18:55:52.184+03:00" updatedBy="admin@test_api" readMode="ALL"
    changeMode="NONE">
    <accountUuid>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountUuid>
    <accountId>a0ee97e5-6c18-11e4-7a07-673d00001bc4</accountId>
    <uuid>8b0e063f-7004-11e4-90a2-8ecb002c2c0a</uuid>
    <externalcode>Swpsy2OVgnuMD_j3sb4Or0</externalcode>
</file>
 */
class AttributeFile extends MoyskladObject
{

    /**
     * @var string
     */
    protected $created;

    /**
     * @var string
     */
    protected $filename;

    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }



};