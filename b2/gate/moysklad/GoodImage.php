<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 24.11.14
 * Time: 16:51
 */

/**
 * Class Image
 *
 * изображение товара
 */
class Image extends MoyskladObject
{
    /**
     * @var string
     */
    private $tinyUuid;


    /**
     *
     * @var string
     * @internal example $created="2014-11-24T16:19:19.272+03:00"
     */
    private $created;


    /**
    * @var string
    */
    private $filename;


    /**
     * @var string
     */
    private $miniatureUuid;


    /**
     * @var string
     */
    private $name;


    /**
    *  Дата последнего обновления в формате
    * @var string
    * @internal example $externalcode="zOFbZIArjUmP3Jgj2vRH10"
    */
    private $externalcode;

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
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $externalcode
     */
    public function setExternalcode($externalcode)
    {
        $this->externalcode = $externalcode;
    }

    /**
     * @return string
     */
    public function getExternalcode()
    {
        return $this->externalcode;
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
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param string $miniatureUuid
     */
    public function setMiniatureUuid($miniatureUuid)
    {
        $this->miniatureUuid = $miniatureUuid;
    }

    /**
     * @return string
     */
    public function getMiniatureUuid()
    {
        return $this->miniatureUuid;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $tinyUuid
     */
    public function setTinyUuid($tinyUuid)
    {
        $this->tinyUuid = $tinyUuid;
    }

    /**
     * @return string
     */
    public function getTinyUuid()
    {
        return $this->tinyUuid;
    }






}