<?php

namespace b2\sprocket\moysklad\api;

/**
 * Class Company
 *
 * Кампания (контрагент)

 * <company
companyType="URLI"
discount="2.0"
autoDiscount="0.0"
discountCardNumber="0980980980"
discountCorrection="0.0"
priceTypeUuid="e57b24cb-7947-11e4-90a2-8eca0009829f"
archived="false"
created="2014-12-01T13:50:42.764+03:00"
name="ООО &quot;Покупатель&quot;"
updated="2014-12-05T17:39:54.264+03:00"
updatedBy="admin@hrenovuha"
readMode="SELF"
changeMode="SELF">

<accountUuid>e532ef02-7947-11e4-7a07-673c0000611b</accountUuid>
<accountId>e532ef02-7947-11e4-7a07-673c0000611b</accountId>
<uuid>e57adece-7947-11e4-90a2-8eca0009829c</uuid>
<code>код</code>
<externalcode>x_c4bcjCiH6l-yUZ0r8UL0</externalcode>
<description>коммент</description>
<requisite legalTitle="Общество с ограниченной ответственностью &quot;Покупатель&quot;"
legalAddress="г.Москва, ул.Строителей, д.11" actualAddress="фактический адрес" inn="7736570902"
kpp="773601002" okpo="22222" ogrn="11111" ogrnip="" nomerSvidetelstva=""/>
<bankAccount accountNumber="" bankLocation="" bankName="" bic="" correspondentAccount="" isDefault="true"
updated="2014-12-01T13:50:42.764+03:00" updatedBy="admin@hrenovuha" readMode="SELF" changeMode="SELF">
<accountUuid>e532ef02-7947-11e4-7a07-673c0000611b</accountUuid>
<accountId>e532ef02-7947-11e4-7a07-673c0000611b</accountId>
<uuid>e57ae038-7947-11e4-90a2-8eca0009829d</uuid>
</bankAccount>
<contact address="" phones="телефон" faxes="факс" mobiles="" email="email"/>
<tags/>
</company>
  *
 *
 */
class Company extends MoyskladObject
{
    protected $companyType;       //="URLI"
    protected $discount;          //="2.0"
    protected $autoDiscount;      //="0.0"
    protected $discountCardNumber;//="0980980980"
    protected $discountCorrection;//="0.0"
    protected $priceTypeUuid;     //="e57b24cb-7947-11e4-90a2-8eca0009829f"

    /**
     * @var bool
     */
    protected $archived;    //="false"
    protected $created;     //="2014-12-01T13:50:42.764+03:00"
    protected $name;        //="ООО &quot;Покупатель&quot;"
    protected $updated;     //="2014-12-05T17:39:54.264+03:00"
    protected $updatedBy;   //="admin@hrenovuha"
    protected $readMode;    //="SELF"
    protected $changeMode;  //="SELF">
    protected $tags;        // <tags/>
    protected $code;        //>код</code>
    protected $externalcode;//>x_c4bcjCiH6l-yUZ0r8UL0</externalcode>
    protected $description; //>коммент</description>


    protected $requisite;

    /**
     * @var Contact[]
     */
    protected $contacts;

    /**
     * @var BankAccount[]
     */
    protected $bankAccounts;

    /**
     * @var Tag[]
     */
    protected $tags;

    /**
     * @var Attribute[]
     */
    protected $attributes;

    /**
     * @return boolean
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * @param boolean $archived
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;
    }

    /**
     * @return Attribute[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param Attribute[] $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * @return mixed
     */
    public function getAutoDiscount()
    {
        return $this->autoDiscount;
    }

    /**
     * @param mixed $autoDiscount
     */
    public function setAutoDiscount($autoDiscount)
    {
        $this->autoDiscount = $autoDiscount;
    }

    /**
     * @return BankAccount[]
     */
    public function getBankAccounts()
    {
        return $this->bankAccounts;
    }

    /**
     * @param BankAccount[] $bankAccounts
     */
    public function setBankAccounts($bankAccounts)
    {
        $this->bankAccounts = $bankAccounts;
    }

    /**
     * @return mixed
     */
    public function getChangeMode()
    {
        return $this->changeMode;
    }

    /**
     * @param mixed $changeMode
     */
    public function setChangeMode($changeMode)
    {
        $this->changeMode = $changeMode;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCompanyType()
    {
        return $this->companyType;
    }

    /**
     * @param mixed $companyType
     */
    public function setCompanyType($companyType)
    {
        $this->companyType = $companyType;
    }

    /**
     * @return Contact[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param Contact[] $contacts
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param mixed $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return mixed
     */
    public function getDiscountCardNumber()
    {
        return $this->discountCardNumber;
    }

    /**
     * @param mixed $discountCardNumber
     */
    public function setDiscountCardNumber($discountCardNumber)
    {
        $this->discountCardNumber = $discountCardNumber;
    }

    /**
     * @return mixed
     */
    public function getDiscountCorrection()
    {
        return $this->discountCorrection;
    }

    /**
     * @param mixed $discountCorrection
     */
    public function setDiscountCorrection($discountCorrection)
    {
        $this->discountCorrection = $discountCorrection;
    }

    /**
     * @return mixed
     */
    public function getExternalcode()
    {
        return $this->externalcode;
    }

    /**
     * @param mixed $externalcode
     */
    public function setExternalcode($externalcode)
    {
        $this->externalcode = $externalcode;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPriceTypeUuid()
    {
        return $this->priceTypeUuid;
    }

    /**
     * @param mixed $priceTypeUuid
     */
    public function setPriceTypeUuid($priceTypeUuid)
    {
        $this->priceTypeUuid = $priceTypeUuid;
    }

    /**
     * @return mixed
     */
    public function getReadMode()
    {
        return $this->readMode;
    }

    /**
     * @param mixed $readMode
     */
    public function setReadMode($readMode)
    {
        $this->readMode = $readMode;
    }

    /**
     * @return mixed
     */
    public function getRequisite()
    {
        return $this->requisite;
    }

    /**
     * @param mixed $requisite
     */
    public function setRequisite($requisite)
    {
        $this->requisite = $requisite;
    }

    /**
     * @return Tag[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param Tag[] $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return mixed
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * @param mixed $updatedBy
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
    }






}