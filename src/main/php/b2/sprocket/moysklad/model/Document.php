<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 26.12.2014
 * Time: 12:55
 */

namespace b2\sprocket\moysklad\model;


class Document extends LegendEntity{
    /**
     * @var base64Binary
     */
    protected $contents;
    protected $created;
    protected $filename;
    protected $miniatureUuid;

    /**
     * @return base64Binary
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * @param base64Binary $contents
     */
    public function setContents($contents)
    {
        $this->contents = $contents;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param mixed $filename
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    /**
     * @return mixed
     */
    public function getMiniatureUuid()
    {
        return $this->miniatureUuid;
    }

    /**
     * @param mixed $miniatureUuid
     */
    public function setMiniatureUuid($miniatureUuid)
    {
        $this->miniatureUuid = $miniatureUuid;
    }
}