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
        protected $employeeValueUuid;

        /**
         * @return mixed
         */
        public function getFile()
        {
                return $this->file;
        }

        /**
         * @param mixed $file
         */
        public function setFile($file)
        {
                $this->file = $file;
        }

        /**
         * @return mixed
         */
        public function getMetadataUuid()
        {
                return $this->metadataUuid;
        }

        /**
         * @param mixed $metadataUuid
         */
        public function setMetadataUuid($metadataUuid)
        {
                $this->metadataUuid = $metadataUuid;
        }

        /**
         * @return mixed
         */
        public function getValueText()
        {
                return $this->valueText;
        }

        /**
         * @param mixed $valueText
         */
        public function setValueText($valueText)
        {
                $this->valueText = $valueText;
        }

        /**
         * @return mixed
         */
        public function getValueString()
        {
                return $this->valueString;
        }

        /**
         * @param mixed $valueString
         */
        public function setValueString($valueString)
        {
                $this->valueString = $valueString;
        }

        /**
         * @return mixed
         */
        public function getDoubleValue()
        {
                return $this->doubleValue;
        }

        /**
         * @param mixed $doubleValue
         */
        public function setDoubleValue($doubleValue)
        {
                $this->doubleValue = $doubleValue;
        }

        /**
         * @return mixed
         */
        public function getLongValue()
        {
                return $this->longValue;
        }

        /**
         * @param mixed $longValue
         */
        public function setLongValue($longValue)
        {
                $this->longValue = $longValue;
        }

        /**
         * @return mixed
         */
        public function getBooleanValue()
        {
                return $this->booleanValue;
        }

        /**
         * @param mixed $booleanValue
         */
        public function setBooleanValue($booleanValue)
        {
                $this->booleanValue = $booleanValue;
        }

        /**
         * @return mixed
         */
        public function getTimeValue()
        {
                return $this->timeValue;
        }

        /**
         * @param mixed $timeValue
         */
        public function setTimeValue($timeValue)
        {
                $this->timeValue = $timeValue;
        }

        /**
         * @return mixed
         */
        public function getEntityValueUuid()
        {
                return $this->entityValueUuid;
        }

        /**
         * @param mixed $entityValueUuid
         */
        public function setEntityValueUuid($entityValueUuid)
        {
                $this->entityValueUuid = $entityValueUuid;
        }

        /**
         * @return mixed
         */
        public function getAgentValueUuid()
        {
                return $this->agentValueUuid;
        }

        /**
         * @param mixed $agentValueUuid
         */
        public function setAgentValueUuid($agentValueUuid)
        {
                $this->agentValueUuid = $agentValueUuid;
        }

        /**
         * @return mixed
         */
        public function getGoodValueUuid()
        {
                return $this->goodValueUuid;
        }

        /**
         * @param mixed $goodValueUuid
         */
        public function setGoodValueUuid($goodValueUuid)
        {
                $this->goodValueUuid = $goodValueUuid;
        }

        /**
         * @return mixed
         */
        public function getPlaceValueUuid()
        {
                return $this->placeValueUuid;
        }

        /**
         * @param mixed $placeValueUuid
         */
        public function setPlaceValueUuid($placeValueUuid)
        {
                $this->placeValueUuid = $placeValueUuid;
        }

        /**
         * @return mixed
         */
        public function getConsignmentValueUuid()
        {
                return $this->consignmentValueUuid;
        }

        /**
         * @param mixed $consignmentValueUuid
         */
        public function setConsignmentValueUuid($consignmentValueUuid)
        {
                $this->consignmentValueUuid = $consignmentValueUuid;
        }

        /**
         * @return mixed
         */
        public function getContractValueUuid()
        {
                return $this->contractValueUuid;
        }

        /**
         * @param mixed $contractValueUuid
         */
        public function setContractValueUuid($contractValueUuid)
        {
                $this->contractValueUuid = $contractValueUuid;
        }

        /**
         * @return mixed
         */
        public function getProjectValueUuid()
        {
                return $this->projectValueUuid;
        }

        /**
         * @param mixed $projectValueUuid
         */
        public function setProjectValueUuid($projectValueUuid)
        {
                $this->projectValueUuid = $projectValueUuid;
        }

        /**
         * @return mixed
         */
        public function getEmployeeValueUuid()
        {
                return $this->employeeValueUuid;
        }

        /**
         * @param mixed $employeeValueUuid
         */
        public function setEmployeeValueUuid($employeeValueUuid)
        {
                $this->employeeValueUuid = $employeeValueUuid;
        }//" type="xs:IDREF"/>

}