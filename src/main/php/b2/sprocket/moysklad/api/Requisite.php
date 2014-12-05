<?php



namespace b2\sprocket\moysklad\api;

/**
 * Class Requisite
 *
 * Реквизит контрагента
 */
class Requisite
{

    protected $legalTitle;   //=""Общество с ограниченной ответственностью &quot;Покупатель&quot;"
    protected $legalAddress; //="г.Москва, ул.Строителей, д.11"
    protected $actualAddress;//="фактический адрес"
    protected $inn;          //="7736570902"
    protected $kpp;          //="773601002"
    protected $okpo;         //="22222"
    protected $ogrn;         //="11111"
    protected $ogrnip;       //=""
    protected $nomerSvidetelstva;

    /**
     * @return mixed
     */
    public function getActualAddress()
    {
        return $this->actualAddress;
    }

    /**
     * @param mixed $actualAddress
     */
    public function setActualAddress($actualAddress)
    {
        $this->actualAddress = $actualAddress;
    }

    /**
     * @return mixed
     */
    public function getInn()
    {
        return $this->inn;
    }

    /**
     * @param mixed $inn
     */
    public function setInn($inn)
    {
        $this->inn = $inn;
    }

    /**
     * @return mixed
     */
    public function getKpp()
    {
        return $this->kpp;
    }

    /**
     * @param mixed $kpp
     */
    public function setKpp($kpp)
    {
        $this->kpp = $kpp;
    }

    /**
     * @return mixed
     */
    public function getLegalAddress()
    {
        return $this->legalAddress;
    }

    /**
     * @param mixed $legalAddress
     */
    public function setLegalAddress($legalAddress)
    {
        $this->legalAddress = $legalAddress;
    }

    /**
     * @return mixed
     */
    public function getLegalTitle()
    {
        return $this->legalTitle;
    }

    /**
     * @param mixed $legalTitle
     */
    public function setLegalTitle($legalTitle)
    {
        $this->legalTitle = $legalTitle;
    }

    /**
     * @return mixed
     */
    public function getNomerSvidetelstva()
    {
        return $this->nomerSvidetelstva;
    }

    /**
     * @param mixed $nomerSvidetelstva
     */
    public function setNomerSvidetelstva($nomerSvidetelstva)
    {
        $this->nomerSvidetelstva = $nomerSvidetelstva;
    }

    /**
     * @return mixed
     */
    public function getOgrn()
    {
        return $this->ogrn;
    }

    /**
     * @param mixed $ogrn
     */
    public function setOgrn($ogrn)
    {
        $this->ogrn = $ogrn;
    }

    /**
     * @return mixed
     */
    public function getOgrnip()
    {
        return $this->ogrnip;
    }

    /**
     * @param mixed $ogrnip
     */
    public function setOgrnip($ogrnip)
    {
        $this->ogrnip = $ogrnip;
    }

    /**
     * @return mixed
     */
    public function getOkpo()
    {
        return $this->okpo;
    }

    /**
     * @param mixed $okpo
     */
    public function setOkpo($okpo)
    {
        $this->okpo = $okpo;
    }//=""/>







}