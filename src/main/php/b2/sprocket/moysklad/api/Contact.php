<?php



/**
 * Class Contact
 *
 * Контакт контрагента
*/
namespace b2\sprocket\moysklad\api;

class Contact
{

    protected $address="";
    protected $phones="телефон";
    protected $faxes="факс";
    protected $mobiles="";
    protected $email="email";

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFaxes()
    {
        return $this->faxes;
    }

    /**
     * @param string $faxes
     */
    public function setFaxes($faxes)
    {
        $this->faxes = $faxes;
    }

    /**
     * @return string
     */
    public function getMobiles()
    {
        return $this->mobiles;
    }

    /**
     * @param string $mobiles
     */
    public function setMobiles($mobiles)
    {
        $this->mobiles = $mobiles;
    }

    /**
     * @return string
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * @param string $phones
     */
    public function setPhones($phones)
    {
        $this->phones = $phones;
    }



}