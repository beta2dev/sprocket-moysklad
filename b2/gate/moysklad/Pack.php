<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 24.11.14
 * Time: 14:25
 */

/**
 * Class Pack
 *
 * Данные по упаковке
 */
class Pack extends MoyskladRec
{
    /**
     *
     * @var float precision 0.1
     */
    private $quantity="1.0";

    /**
     * Единица измерения
     * @var string
     */
    private $uomUuid;

    /**
     * @param float $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param string $uomUuid
     */
    public function setUomUuid($uomUuid)
    {
        $this->uomUuid = $uomUuid;
    }

    /**
     * @return string
     */
    public function getUomUuid()
    {
        return $this->uomUuid;
    }



}