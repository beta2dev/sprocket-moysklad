<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 23.12.2014
 * Time: 12:12
 */


namespace b2\sprocket\moysklad\model;

//use \b2\util;

//var_export(get_declared_classes());

class MoyskladXmlMapper extends \b2\util\XmlMapper{

        /**
         * Тип для UUID.
         */
        function uuid($mapExpr)
        {
            $this->custom($mapExpr, function($xml) {
                return (string)$xml;}
            );
            return $this;
        }


        /**
         * Тип для quantity.
         */
        function quantity($mapExpr)
        {
            $this->custom($mapExpr, function($xml) {return (string)$xml;});
            return $this;
        }

        /**
         * Тип для weight.
         */
        function weight($mapExpr)
        {
            $this->custom($mapExpr, function($xml) {return (string)$xml;});
            return $this;
        }

        /**volume
         * Тип для weight.
         */
            function volume($mapExpr)
        {
            $this->custom($mapExpr, function($xml) {return (string)$xml;});
            return $this;
        }

        /**volume
         * Тип для weight.
         */
        function base64binary($mapExpr)
        {
            $this->custom($mapExpr, function($xml) {return (string)$xml;});
            return $this;
        }



    /**
         * Тип для money.
         */
        function money($mapExpr)
        {
            $this->custom($mapExpr, function($xml) {return (string)$xml;});
            return $this;
        }

        /**
         * Тип для vat.
         */
        function vat($mapExpr)
        {
            $this->custom($mapExpr, function($xml) {return (string)$xml;});
            return $this;
        }

        /**
         * Тип для datetime.
         */
        function datetime($mapExpr)
        {
            $this->custom($mapExpr, function($xml) {return (string)$xml;});
            return $this;
        }








        function msAccountEntity()
        {
            return $this
                ->uuid('accountUuid')
                ->uuid('accountId')
                ->uuid('uuid');
        }


        function msEntity()
        {
            //var_export(get_declared_classes());
            //echo  PHP_EOL;
            //echo '====>>>>'.get_class($this->origin('b2\sprocket\moysklad\model\Entity')->accountEntity());


            return $this//->origin('b2\sprocket\moysklad\model\Entity')

                ->string('accessMode')
                ->string('readMode')
                ->string('groupUuid[]')
                ->msAccountEntity();
        }


        function msMoneyAmount(){
            return $this
                ->origin('b2\sprocket\moysklad\model\MoneyAmount')
                ->money('@sum')
                ->money('@sumInCurrency');
                //->up();
        }


        function msMotion()
        {
            /*
             * <xs:sequence>
              <xs:element minOccurs="0" name="basePrice" type="moneyAmount"/>
              <xs:element minOccurs="0" name="price" type="moneyAmount"/>
              <xs:element minOccurs="0" name="things">
                <xs:complexType>
                  <xs:sequence>
                    <xs:element maxOccurs="unbounded" minOccurs="0" name="thingRef" type="thing"/>
                  </xs:sequence>
                </xs:complexType>
              </xs:element>
            </xs:sequence>

            <xs:attribute name="discount" type="xs:double" use="required"/>
            <xs:attribute name="quantity" type="xs:double" use="required"/>
            <xs:attribute name="goodPackUuid" type="xs:IDREF"/>
            <xs:attribute name="consignmentUuid" type="xs:IDREF"/>
            <xs:attribute name="goodUuid" type="xs:IDREF"/>
            <xs:attribute name="slotUuid" type="xs:IDREF"/>
            <xs:attribute name="vat" type="xs:long"/>
             */
            return $this
                ->msEntity()
                ->object('basePrice')
                    ->msMoneyAmount()
                    ->up()
                ->object('price')
                    ->msMoneyAmount()
                    ->up()
                ->uuid('@goodPackUuid')
                ->uuid('@consignmentUuid')
                ->uuid('@goodUuid')
                ->uuid('@slotUuid')
                //->int('@long')
                ->money('@discount')
                ->quantity('@quantity')
                ->vat('@vat')

                /*->object('things')
                    ->things()
                    ->up()
                */;
        }


        function msOrderPosition()
        {
            return $this
                ->msMotion()
                ->float("@reserve");
        }


        function msStockMotion()
        {
            return $this
                ->msMotion()
                ->uuid('@countryUuid')
                ->uuid('@gtdUuid');
        }

        function msComingIn()
        {
            return $this
                ->msStockMotion();
        }

        function msComingOut()
        {
            return $this
                ->msStockMotion();
        }

        function msInfoEntity()
        {
            return $this
                ->msEntity()
                ->string('@updatedBy')
                ->datetime('@updated');
        }


        function msLegendEntity()
        {
            return $this
                ->msInfoEntity()
                ->string('code')
                ->string('externalcode')
                ->string('description')
                ->string('@name');
        }


        function msOperation()
    {
        /*<xs:complexContent>
      <xs:extension base="legendEntity">
        <xs:sequence>
          <xs:element maxOccurs="unbounded" minOccurs="0" name="attribute" type="operationAttributeValue"/>
          <xs:element maxOccurs="unbounded" minOccurs="0" name="document" type="operationDocument"/>
          <xs:element minOccurs="0" name="sum" type="moneyAmount"/>
        </xs:sequence>
        <xs:attribute name="stateUuid" type="xs:IDREF"/>
        <xs:attribute name="targetAgentUuid" type="xs:IDREF"/>
        <xs:attribute name="sourceAgentUuid" type="xs:IDREF"/>
        <xs:attribute name="targetStoreUuid" type="xs:IDREF"/>
        <xs:attribute name="sourceStoreUuid" type="xs:IDREF"/>
        <xs:attribute name="applicable" type="xs:boolean" use="required"/>
        <xs:attribute name="projectUuid" type="xs:IDREF"/>
        <xs:attribute name="contractUuid" type="xs:IDREF"/>
        <xs:attribute name="moment" type="xs:dateTime"/>
        <xs:attribute name="targetAccountUuid" type="xs:IDREF"/>
        <xs:attribute name="sourceAccountUuid" type="xs:IDREF"/>
        <xs:attribute name="payerVat" type="xs:boolean"/>
        <xs:attribute name="retailStoreUuid" type="xs:IDREF"/>
        <xs:attribute name="currencyUuid" type="xs:IDREF"/>
        <xs:attribute name="rate" type="xs:double" use="required"/>
        <xs:attribute name="vatIncluded" type="xs:boolean" use="required"/>
        <xs:attribute name="created" type="xs:dateTime"/>
        <xs:attribute name="createdBy" type="xs:string"/>
        <xs:attribute name="employeeUuid" type="xs:IDREF"/>
      </xs:extension>
    </xs:complexContent>*/
       return  $this
            ->msLegendEntity()
            /*->object('attribute')
                ->attribute()
                ->up()*/
            /*->object('document')
                ->document()
                ->up()*/
            ->uuid("@stateUuid")
            ->uuid("@targetAgentUuid")
            ->uuid("@sourceAgentUuid")
            ->uuid("@targetStoreUuid")
            ->uuid("@sourceStoreUuid")
            ->bool("@applicable")
            ->uuid("@projectUuid")
            ->uuid("@contractUuid")
            ->Datetime("@moment")
            ->uuid("@targetAccountUuid")
            ->uuid("@sourceAccountUuid")
            ->bool("@payerVat")
            ->uuid("@retailStoreUuid")
            ->uuid("@currencyUuid")
            ->float("@rate")
            ->bool("@vatIncluded")
            ->datetime("@created")
            ->string("@createdBy")
            ->uuid("@employeeUuid");
    }


        function msOperationWithPositions()
        {
            return $this->msOperation();
        }



        function msOrder()
        {
            return $this
                ->msOperationWithPositions()
                ->datetime("deliveryPlannedMoment")
                ->float("reservedSum");
        }

        function msCustomerOrdersUuid()
        {
        }


        function msInternalOrders()
        {
        }

        function msInvoicesUuid()
        {
        }

        function msPaymentsUuid()
        {
        }


        function tag_purchaseOrder()
        {
            return $this
                ->origin('b2\sprocket\moysklad\model\PurchaseOrder')
                ->msOrder()

                ->uuid('customerOrdersUuid/customerOrderRef => customerOrdersUuid[]')
                ->uuid('internalOrders/internalOrderRef => internalOrders[]')
                ->uuid('invoicesUuid/invoiceInRef => invoicesUuid[]')
                ->uuid('paymentsUuid/financeOutRef => paymentsUuid[]')
                ->uuid('suppliesUuid/supplyRef => suppliesUuid[]')
                ->object('purchaseOrderPosition[]')
                    ->msPurchaseOrderPosition()
                    ->up();

        }


        function msPurchaseOrderPosition()
        {
            return $this
                ->origin('b2\sprocket\moysklad\model\PurchaseOrderPosition')
                ->msOrderPosition();
        }

        function msCustomerOrderPosition()
        {
            return $this
                ->origin('b2\sprocket\moysklad\model\CustomerOrderPosition')
                ->msOrderPosition();
        }

        function msSalesReturnPosition()
        {

            return $this
                ->origin('b2\sprocket\moysklad\model\SalesReturnPosition')
                ->msComingIn();
        }

        function msShipmentIn()
        {
            return $this
                ->origin('b2\sprocket\moysklad\model\ShipmentIn')
                ->msComingIn()
                ->float("@overhead");
        }


        function msStockOperation()
        {
            return $this
                ->msOperationWithPositions();
        }


        function msComingOutOperation()
        {
            return $this
                ->msStockOperation();
        }


        function msShipmentOut(){
            return $this
                ->origin('b2\sprocket\moysklad\model\ShipmentOut')
                ->msAbstractShipmentOut();
        }

        function msAbstractShipmentOut(){
            return $this
                ->msComingOut();
        }

        function tag_purchaseReturn()
        {
            /*
             *         <xs:sequence>
          <xs:element minOccurs="0" name="paymentsUuid">
            <xs:complexType>
              <xs:sequence>
                <xs:element maxOccurs="unbounded" minOccurs="0" name="financeInRef" type="xs:IDREF"/>
              </xs:sequence>
            </xs:complexType>
          </xs:element>
          <xs:element maxOccurs="unbounded" minOccurs="0" name="purchaseReturnPosition" type="purchaseReturnPosition"/>
        </xs:sequence>
        <xs:attribute name="factureUuid" type="xs:IDREF"/>
        <xs:attribute name="supplyUuid" type="xs:IDREF"/>
             */
            return $this
                ->origin('b2\sprocket\moysklad\model\PurchaseReturn')
                ->msComingOutOperation()
                ->uuid('factureUuid')
                ->uuid('supplyUuid')
                ->uuid('paymentsUuid/financeInRef => paymentsUuid[]')
                ->object('purchaseReturnPosition[]')
                    ->msPurchaseReturnPosition('purchaseReturnPosition[]')
                    ->up;

        }



        function msPurchaseReturnPosition()
        {
            return $this
                ->origin('b2\sprocket\moysklad\model\PurchaseReturnPosition')
                ->msAbstractShipmentOut();

        }

        function msAbstractDemand()
        {
            return $this
            /*
            <xs:complexContent>
      <xs:extension base="comingOutOperation">
        <xs:sequence>
          <xs:element minOccurs="0" name="invoicesOutUuid">
            <xs:complexType>
              <xs:sequence>
                <xs:element maxOccurs="unbounded" minOccurs="0" name="invoiceOutRef" type="xs:IDREF"/>
              </xs:sequence>
            </xs:complexType>
          </xs:element>
          <xs:element minOccurs="0" name="paymentsUuid">
            <xs:complexType>
              <xs:sequence>
                <xs:element maxOccurs="unbounded" minOccurs="0" name="financeInRef" type="xs:IDREF"/>
              </xs:sequence>
            </xs:complexType>
          </xs:element>
          <xs:element maxOccurs="unbounded" minOccurs="0" name="shipmentOut" type="shipmentOut"/>
          <xs:element minOccurs="0" name="salesReturnsUuid">
            <xs:complexType>
              <xs:sequence>
                <xs:element maxOccurs="unbounded" minOccurs="0" name="salesReturnRef" type="xs:IDREF"/>
              </xs:sequence>
            </xs:complexType>
          </xs:element>
        </xs:sequence>

      </xs:extension>
    </xs:complexContent>*/
            ->msComingOutOperation()
            ->uuid('@customerOrderUuid')
            ->uuid('@factureUuid')
            //->msShipmentOut('shipmentOut[]')
            ->object('shipmentOut[]')
                ->msShipmentOut()
                ->up()


            ->uuid('invoicesOutUuid/invoiceOutRef => invoicesOutUuid[]')
            ->uuid('paymentsUuid/financeInRef => paymentsUuid[]')
            ->uuid('salesReturnsUuid/salesReturnRef => salesReturnsUuid[]');
        }


    function tag_demand()
    {
        return $this
            ->origin('b2\sprocket\moysklad\model\Demand')
            ->msAbstractDemand()
            /*->object('extension','b2\sprocket\moysklad\model\DemandExtension')
                ->bool("opened")
                ->uuid("carrierUuid")
                ->string("loadName")
                ->string("consignorIndication")
                ->string("transportFacility")
                ->string("goodPackQuantity")
                ->string("carNumber");
            */
            ->object('extension')
                ->msDemandExtension()
                ->up();
    }

    function msDemandExtension()
    {
        return $this
            ->origin('b2\sprocket\moysklad\model\DemandExtension')
            ->bool("opened")
            ->uuid("carrierUuid")
            ->string("loadName")
            ->string("consignorIndication")
            ->string("transportFacility")
            ->string("goodPackQuantity")
            ->string("carNumber");

    }

    function msComingInOperation()
    {
        return $this
            ->msStockOperation();
    }

    function tag_supply()
    {
        return $this
            ->origin('b2\sprocket\moysklad\model\Supply')
            ->msComingInOperation()
            ->object('shipmentIn[]')
                ->msShipmentIn()
                ->up()
            ->uuid('invoicesInUuid/invoiceInRef => invoicesInUuid[]')
            ->uuid('paymentsUuid/financeOutRef => paymentsUuid[]')
            ->uuid('purchaseReturnsUuid/purchaseReturnRef => purchaseReturnsUuid[]')

            ->object('overhead')
                ->msMoneyAmount()
                ->up()

            ->uuid("@factureInUuid")
            ->datetime("@incomingDate")
            ->string("@incomingNumber")
            ->string("@overheadDistribution")
            ->uuid("@purchaseOrderUuid");
    }

    function msAbstractSalesReturn()
    {
        return $this
            ->msComingInOperation()
            ->uuid("@demandUuid")
            ->uuid('lossesUuid/lossRef => lossesUuid[]')
            ->uuid('paymentsUuid/financeOutRef => paymentsUuid[]')

            ->object('salesReturnPosition[]')
                //->msCustomerOrderPosition('customerOrderPosition')
                ->msSalesReturnPosition()
                ->up();
    }


    function tag_SalesReturn()
    {
        return $this
            ->origin('b2\sprocket\moysklad\model\SalesReturn')
            ->msAbstractSalesReturn();
    }

    function tag_customerOrder()
    {
        return $this
            ->origin('b2\sprocket\moysklad\model\CustomerOrder')
            ->msOrder()
            ->object('customerOrderPosition[]')
            //->msCustomerOrderPosition('customerOrderPosition')
                ->msCustomerOrderPosition()
                ->up()

            //->string('customerOrderPosition')
            ->uuid('demandsUuid/demandRef => demandsUuid[]')
            ->uuid('invoicesOutUuid/invoiceOutRef => invoicesOutUuid[]')
            ->uuid('paymentsUuid/financeOutRef => paymentsUuid[]')
            ->uuid('purchaseOrdersUuid/purchaseOrderRef => purchaseOrdersUuid[]');
    }

    function msPreference()
    {

    }


    function msDocument()
    {
        return $this
            ->msLegendEntity()
            ->base64binary("contents")
            ->datetime("@created")
            ->string("@filename")
            ->uuid("@miniatureUuid");
    }

    function msAttachableDocument()
    {
        return $this->msDocument();
    }

    function msGoodImage()
    {
        return $this
            ->origin('b2\sprocket\moysklad\model\GoodImage')
            ->msAttachableDocument()
            ->uuid("tinyUuid");
    }

    function msGoodPack()
    {
        return $this
            ->origin('b2\sprocket\moysklad\model\GoodPack')
            ->msEntity()
            ->float("@quantity")
            ->uuid("@uomUuid");
    }

    function msAbstractBarcode(){
        return $this
            ->msEntity()
            ->string("barcode")
            ->string("barcodeType");
    }

    function msBarcode()
    {
        return $this
            ->origin('b2\sprocket\moysklad\model\Barcode')
            ->msAbstractBarcode();
    }


    function msClassifier(){
        return $this
            ->msLegendEntity();
    }


    function msGoodPrices()
    {
        return $this
            ->origin('b2\sprocket\moysklad\model\GoodPrices')
            ->object('price[]')
                ->msPrice()
                ->up();

    }





    function msPrice()
    {
        return $this
            ->origin('b2\sprocket\moysklad\model\Price')
            ->msEntity()
            ->uuid("@currencyUuid")
            ->uuid("@priceTypeUuid")
            ->float("@value");
    }

    function msGoodFolder(){
        return $this
            ->msClassifier()
            ->object("attribute[]")
                ->msGoodAttributeValue()
                ->up()
            ->bool("archived")
            ->uuid("parentUuid")
            ->string("productCode")
            ->vat("vat");
    }

    function msAbstractGood()
    {
        return $this
            ->msGoodFolder()
            ->object("barcode[]")
                ->msBarcode()
                ->up()
            ->object("salePrices[]")
                ->msGoodPrices()
                ->up()
            ->money("minPrice")
            ->uuid("@uomUuid")
            ->uuid("@countryUuid")
            ->uuid("@supplierUuid")
            ->money("@salePrice")
            ->uuid("@saleCurrencyUuid")
            ->uuid("@buyCurrencyUuid");
    }



    function tag_good()
    {
        return $this
            ->origin('b2\sprocket\moysklad\model\Good')
            ->msAbstractGood()
            ->bool("@isSerialTrackable")
            ->money("@buyPrice")
            ->money("@minimumBalance")
            ->weight("@weight")
            ->volume("@volume")
            ->object('images[]')
            //->msCustomerOrderPosition('customerOrderPosition')
                ->msGoodImage()
                ->up()
            ->object('preferences[]')
                ->msGoodSlotPreference()
                ->up()
            ->object('pack[]')
                ->msGoodPack()
                ->up();
    }



    function msGoodSlotPreference(){
        return $this
            ->origin('b2\sprocket\moysklad\model\GoodSlotPreference')
            ->msEntity()
            ->uuid("@slotUuid");


    }


    function msGoodAttributeValue(){
            return $this
                ->origin('b2\sprocket\moysklad\model\GoodAttributeValue')
                ->uuid("@goodUuid")
                ->msAttributeValue();
    }


    function msAttributeValue()
    {
            return $this
                ->msInfoEntity()
                ->object('file')
                    ->msAttachmentDocument()
                    ->up()
                ->uuid("metadataUuid")
                ->string("valueText")
                ->string("valueString")
                ->float("doubleValue")
                ->int("longValue")
                ->bool("booleanValue")
                ->datetime("timeValue")
                ->uuid("entityValueUuid")
                ->uuid("agentValueUuid")
                ->uuid("goodValueUuid")
                ->uuid("placeValueUuid")
                ->uuid("consignmentValueUuid")
                ->uuid("contractValueUuid")
                ->uuid("projectValueUuid")
                ->uuid("employeeValueUuid");
    }


    function msAttachmentDocument()
    {
            return $this
                ->origin('b2\sprocket\moysklad\model\GoodFolder')
                ->msAttachableDocument();

    }

    function tag_goodFolder(){
            return $this
                ->origin('b2\sprocket\moysklad\model\GoodFolder')
                ->msClassifier()
                ->object("attribute[]")
                    ->msGoodAttributeValue()
                    ->up()
                ->bool("@archived")
                ->uuid("@parentUuid")
                ->string("@productCode")
                ->vat("@vat");
    }





}