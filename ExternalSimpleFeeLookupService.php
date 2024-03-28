<?php

namespace App\Asic;

class ExternalSimpleFeeLookupService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'telephoneNumberType' => 'App\\Asic\\telephoneNumberType',
  'telephoneNumber' => 'App\\Asic\\telephoneNumber',
  'addressType' => 'App\\Asic\\addressType',
  'addressExtType' => 'App\\Asic\\addressExtType',
  'addressLodgeType' => 'App\\Asic\\addressLodgeType',
  'physicalAddress' => 'App\\Asic\\physicalAddress',
  'streetType' => 'App\\Asic\\streetType',
  'unstructuredAddress' => 'App\\Asic\\unstructuredAddress',
  'semiStructuredPhysicalAddress' => 'App\\Asic\\semiStructuredPhysicalAddress',
  'distinguishedNameExtType' => 'App\\Asic\\distinguishedNameExtType',
  'distinguishedNameType' => 'App\\Asic\\distinguishedNameType',
  'personNameType' => 'App\\Asic\\personNameType',
  'personNameOptionalType' => 'App\\Asic\\personNameOptionalType',
  'personNameLodgeType' => 'App\\Asic\\personNameLodgeType',
  'personNameWithRoleType' => 'App\\Asic\\personNameWithRoleType',
  'birthDetailsType' => 'App\\Asic\\birthDetailsType',
  'birthDetailsExtType' => 'App\\Asic\\birthDetailsExtType',
  'birthDetailsLodgeType' => 'App\\Asic\\birthDetailsLodgeType',
  'personNameBirthType' => 'App\\Asic\\personNameBirthType',
  'personNameFormerNameType' => 'App\\Asic\\personNameFormerNameType',
  'statusType' => 'App\\Asic\\statusType',
  'intervalStatusType' => 'App\\Asic\\intervalStatusType',
  'organisationIdentifierType' => 'App\\Asic\\organisationIdentifierType',
  'organisationNamePlusIdType' => 'App\\Asic\\organisationNamePlusIdType',
  'textType' => 'App\\Asic\\textType',
  'signatoryType' => 'App\\Asic\\signatoryType',
  'asicSignatoryType' => 'App\\Asic\\asicSignatoryType',
  'companySignatoryType' => 'App\\Asic\\companySignatoryType',
  'messageIdentifierType' => 'App\\Asic\\messageIdentifierType',
  'customerIdentifier' => 'App\\Asic\\customerIdentifier',
  'identifier' => 'App\\Asic\\identifier',
  'documentIdentifierType' => 'App\\Asic\\documentIdentifierType',
  'ebusiness' => 'App\\Asic\\ebusiness',
  'ascot' => 'App\\Asic\\ascot',
  'browserIdentifierType' => 'App\\Asic\\browserIdentifierType',
  'soapSoftwareIdentifierType' => 'App\\Asic\\soapSoftwareIdentifierType',
  'realmIdentifierType' => 'App\\Asic\\realmIdentifierType',
  'realmQualifierType' => 'App\\Asic\\realmQualifierType',
  'accountIdentifierType' => 'App\\Asic\\accountIdentifierType',
  'rejectedType' => 'App\\Asic\\rejectedType',
  'standardHeaderType' => 'App\\Asic\\standardHeaderType',
  'standardMessageHeaderType' => 'App\\Asic\\standardMessageHeaderType',
  'requestType' => 'App\\Asic\\requestType',
  'replyType' => 'App\\Asic\\replyType',
  'result' => 'App\\Asic\\result',
  'resultType' => 'App\\Asic\\resultType',
  'timestampType' => 'App\\Asic\\timestampType',
  'timestampListType' => 'App\\Asic\\timestampListType',
  'exceptionType' => 'App\\Asic\\exceptionType',
  'context' => 'App\\Asic\\context',
  'exceptionListType' => 'App\\Asic\\exceptionListType',
  'traceType' => 'App\\Asic\\traceType',
  'traceListType' => 'App\\Asic\\traceListType',
  'paymentType' => 'App\\Asic\\paymentType',
  'creditCardType' => 'App\\Asic\\creditCardType',
  'nameType' => 'App\\Asic\\nameType',
  'fileNotesType' => 'App\\Asic\\fileNotesType',
  'inboxIdentifierType' => 'App\\Asic\\inboxIdentifierType',
  'lodgementIdentifierType' => 'App\\Asic\\lodgementIdentifierType',
  'outboundItemIdentifierType' => 'App\\Asic\\outboundItemIdentifierType',
  'itemSearchScopeType' => 'App\\Asic\\itemSearchScopeType',
  'itemSummaryType' => 'App\\Asic\\itemSummaryType',
  'entityType' => 'App\\Asic\\entityType',
  'agentType' => 'App\\Asic\\agentType',
  'objectionType' => 'App\\Asic\\objectionType',
  'flagType' => 'App\\Asic\\flagType',
  'nameResultType' => 'App\\Asic\\nameResultType',
  'nameResultWithObjectionsType' => 'App\\Asic\\nameResultWithObjectionsType',
  'nameAvailabilityType' => 'App\\Asic\\nameAvailabilityType',
  'nameAvailabilityResponseType' => 'App\\Asic\\nameAvailabilityResponseType',
  'businessNameIdentifierType' => 'App\\Asic\\businessNameIdentifierType',
  'requestRejectedType' => 'App\\Asic\\requestRejectedType',
  'requestFailedType' => 'App\\Asic\\requestFailedType',
  'actionType' => 'App\\Asic\\actionType',
  'fssCustomerType' => 'App\\Asic\\fssCustomerType',
  'agent' => 'App\\Asic\\agent',
  'billingAddress' => 'App\\Asic\\billingAddress',
  'fssSimpleAccountType' => 'App\\Asic\\fssSimpleAccountType',
  'fssAccountType' => 'App\\Asic\\fssAccountType',
  'fssItemType' => 'App\\Asic\\fssItemType',
  'feeType' => 'App\\Asic\\feeType',
  'feesType' => 'App\\Asic\\feesType',
  'invoice' => 'App\\Asic\\invoice',
  'debtorDetail' => 'App\\Asic\\debtorDetail',
  'invoiceItems' => 'App\\Asic\\invoiceItems',
  'item' => 'App\\Asic\\item',
  'fssTransactionType' => 'App\\Asic\\fssTransactionType',
  'transactionType' => 'App\\Asic\\transactionType',
  'invoiceType' => 'App\\Asic\\invoiceType',
  'invoicePeriod' => 'App\\Asic\\invoicePeriod',
  'asicPaymentDetails' => 'App\\Asic\\asicPaymentDetails',
  'bpay' => 'App\\Asic\\bpay',
  'postBillpay' => 'App\\Asic\\postBillpay',
  'receiptType' => 'App\\Asic\\receiptType',
  'paymentDetailsType' => 'App\\Asic\\paymentDetailsType',
  'transactionsType' => 'App\\Asic\\transactionsType',
  'debtorType' => 'App\\Asic\\debtorType',
  'feeWithAmountType' => 'App\\Asic\\feeWithAmountType',
  'priceType' => 'App\\Asic\\priceType',
  'asicPaymentDetailsType' => 'App\\Asic\\asicPaymentDetailsType',
  'base64Binary' => 'App\\Asic\\base64Binary',
  'hexBinary' => 'App\\Asic\\hexBinary',
  'businessDocumentRequestHeaderType' => 'App\\Asic\\businessDocumentRequestHeaderType',
  'businessDocumentHeaderType' => 'App\\Asic\\businessDocumentHeaderType',
  'attachmentsType' => 'App\\Asic\\attachmentsType',
  'attachmentType' => 'App\\Asic\\attachmentType',
  'softwareInformationType' => 'App\\Asic\\softwareInformationType',
  'messageEventType' => 'App\\Asic\\messageEventType',
  'messageTimestampsType' => 'App\\Asic\\messageTimestampsType',
  'messageTimestampType' => 'App\\Asic\\messageTimestampType',
  'messageEventsType' => 'App\\Asic\\messageEventsType',
  'genericResultType' => 'App\\Asic\\genericResultType',
  'AttributedDateTime' => 'App\\Asic\\AttributedDateTime',
  'AttributedURI' => 'App\\Asic\\AttributedURI',
  'TimestampType' => 'App\\Asic\\TimestampType',
  'simpleFeeLookupRequestType' => 'App\\Asic\\simpleFeeLookupRequestType',
  'businessDocumentBody' => 'App\\Asic\\businessDocumentBody',
  'subFormCodes' => 'App\\Asic\\subFormCodes',
  'simpleFeeLookupReplyType' => 'App\\Asic\\simpleFeeLookupReplyType',
  'dissections' => 'App\\Asic\\dissections',
  'dissection' => 'App\\Asic\\dissection',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'authentication' => 0,
  'login' => 'ASICM2MRA@BUSINESSLAUNCHPRO.COM.AU',
  'password' => '$ummer20240212',
  'connection_timeout' => 600,
  'features' => 1,
  'trace' => true,
  'soap_version' => 2,
), $options);
      if (!$wsdl) {
        $wsdl = 'https://www.gateway.uat.asic.gov.au/gateway/ExternalSimpleFeeLookupPort?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param simpleFeeLookupRequestType $request
     * @return simpleFeeLookupReplyType
     */
    public function externalSimpleFeeLookup(simpleFeeLookupRequestType $request)
    {
      return $this->__soapCall('externalSimpleFeeLookup', array($request));
    }

}
