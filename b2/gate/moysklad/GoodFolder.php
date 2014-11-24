<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 24.11.14
 * Time: 17:28
 */
namespace b2\gate\moysklad;
/**
 * Class GoodFolder
 *
 * Группа товаров внутри справочника "Номенклатура"
 */
class GoodFolder extends MoyskladObject {

    /**
     * @var bool
     */
    private $archived;


    /**
    * @var string
    */
    private $parentUuid;

    /**
     * @var string
     */
    private $productCode;


    /**
     * @var string
     */
    private $name;


    /**
     * @var string
     */
    private $code;


    /**
     * @var string
     */
    private $externalcode;


    /**
     * @var string
     */
    private $description;

    /**
     * @param boolean $archived
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;
    }

    /**
     * @return boolean
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * @param string $productCode
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }




}