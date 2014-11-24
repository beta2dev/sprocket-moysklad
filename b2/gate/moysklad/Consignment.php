<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 24.11.14
 * Time: 19:07
 */

/**
 * Class Consignment
 *
 * В терминах Моего склада это модификация товара, для которой ведётся учёт. Например, по цвету, размеру или ещё какому-нибудь признаку
 */
class Consignment extends MoyskladObject
{
/**
 * @var string
 */
private $goodUuid;


/**
 * @var string
 */
private $isDefault;

/**
* @var string
*/
private $name;



/**
 * @var string
 */
private $externalcode;

/**
* @var Feature
*/
private $feature;

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
 * @param \Feature $feature
 */
public function setFeature($feature)
{
    $this->feature = $feature;
}

/**
 * @return \Feature
 */
public function getFeature()
{
    return $this->feature;
}

/**
 * @param string $goodUuid
 */
public function setGoodUuid($goodUuid)
{
    $this->goodUuid = $goodUuid;
}

/**
 * @return string
 */
public function getGoodUuid()
{
    return $this->goodUuid;
}

/**
 * @param string $isDefault
 */
public function setIsDefault($isDefault)
{
    $this->isDefault = $isDefault;
}

/**
 * @return string
 */
public function getIsDefault()
{
    return $this->isDefault;
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






}