<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 22.12.2014
 * Time: 12:52
 */

namespace b2\sprocket\moysklad\model;


class AttributeValue extends infoEntity{

        protected $file;//" type="attachmentDocument"/>
        protected $metadataUuid;// type="xs:IDREF" use="required"/>
        protected $valueText;//" type="xs:string"/>
        protected $valueString;//" type="xs:string"/>
        protected $doubleValue;//" type="xs:double"/>
        protected $longValue;//" type="xs:long"/>
        protected $booleanValue;//" type="xs:boolean"/>
        protected $timeValue;//" type="xs:dateTime"/>
        protected $entityValueUuid;//" type="xs:IDREF"/>
        protected $agentValueUuid;//" type="xs:IDREF"/>
        protected $goodValueUuid;//" type="xs:IDREF"/>
        protected $placeValueUuid;//" type="xs:IDREF"/>
        protected $consignmentValueUuid;//" type="xs:IDREF"/>
        protected $contractValueUuid;//" type="xs:IDREF"/>
        protected $projectValueUuid;//" type="xs:IDREF"/>
        protected $employeeValueUuid;//" type="xs:IDREF"/>

}