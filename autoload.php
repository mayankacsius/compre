<?php


 function autoload_2601db981a9d4e15cd8984489f2bd873($class)
{
    $classes = array(
        'App\Asic\ExternalBnCancelTransferService' => __DIR__ .'/ExternalBnCancelTransferService.php',
        'App\Asic\ExternalBnChangeAddressService' => __DIR__ .'/ExternalBnChangeAddressService.php',
        'App\Asic\ExternalBnRenewalService' => __DIR__ .'/ExternalBnRenewalService.php',
        'App\Asic\ExternalBz1Service' => __DIR__ .'/ExternalBz1Service.php',
        'App\Asic\telephoneNumberType' => __DIR__ .'/telephoneNumberType.php',
        'App\Asic\telephoneNumber' => __DIR__ .'/telephoneNumber.php',
        'App\Asic\addressType' => __DIR__ .'/addressType.php',
        'App\Asic\addressExtType' => __DIR__ .'/addressExtType.php',
        'App\Asic\addressLodgeType' => __DIR__ .'/addressLodgeType.php',
        'App\Asic\physicalAddress' => __DIR__ .'/physicalAddress.php',
        'App\Asic\streetType' => __DIR__ .'/streetType.php',
        'App\Asic\unstructuredAddress' => __DIR__ .'/unstructuredAddress.php',
        'App\Asic\semiStructuredPhysicalAddress' => __DIR__ .'/semiStructuredPhysicalAddress.php',
        'App\Asic\addressTypeType' => __DIR__ .'/addressTypeType.php',
        'App\Asic\distinguishedNameExtType' => __DIR__ .'/distinguishedNameExtType.php',
        'App\Asic\distinguishedNameType' => __DIR__ .'/distinguishedNameType.php',
        'App\Asic\personNameType' => __DIR__ .'/personNameType.php',
        'App\Asic\personNameOptionalType' => __DIR__ .'/personNameOptionalType.php',
        'App\Asic\personNameLodgeType' => __DIR__ .'/personNameLodgeType.php',
        'App\Asic\personNameWithRoleType' => __DIR__ .'/personNameWithRoleType.php',
        'App\Asic\birthDetailsType' => __DIR__ .'/birthDetailsType.php',
        'App\Asic\birthDetailsExtType' => __DIR__ .'/birthDetailsExtType.php',
        'App\Asic\birthDetailsLodgeType' => __DIR__ .'/birthDetailsLodgeType.php',
        'App\Asic\personNameBirthType' => __DIR__ .'/personNameBirthType.php',
        'App\Asic\personNameFormerNameType' => __DIR__ .'/personNameFormerNameType.php',
        'App\Asic\statusType' => __DIR__ .'/statusType.php',
        'App\Asic\intervalStatusType' => __DIR__ .'/intervalStatusType.php',
        'App\Asic\organisationIdentifierType' => __DIR__ .'/organisationIdentifierType.php',
        'App\Asic\organisationNamePlusIdType' => __DIR__ .'/organisationNamePlusIdType.php',
        'App\Asic\textType' => __DIR__ .'/textType.php',
        'App\Asic\signatoryType' => __DIR__ .'/signatoryType.php',
        'App\Asic\asicSignatoryType' => __DIR__ .'/asicSignatoryType.php',
        'App\Asic\companySignatoryType' => __DIR__ .'/companySignatoryType.php',
        'App\Asic\messageIdentifierType' => __DIR__ .'/messageIdentifierType.php',
        'App\Asic\customerIdentifier' => __DIR__ .'/customerIdentifier.php',
        'App\Asic\identifier' => __DIR__ .'/identifier.php',
        'App\Asic\documentIdentifierType' => __DIR__ .'/documentIdentifierType.php',
        'App\Asic\ebusiness' => __DIR__ .'/ebusiness.php',
        'App\Asic\ascot' => __DIR__ .'/ascot.php',
        'App\Asic\browserIdentifierType' => __DIR__ .'/browserIdentifierType.php',
        'App\Asic\soapSoftwareIdentifierType' => __DIR__ .'/soapSoftwareIdentifierType.php',
        'App\Asic\realmIdentifierType' => __DIR__ .'/realmIdentifierType.php',
        'App\Asic\realmQualifierType' => __DIR__ .'/realmQualifierType.php',
        'App\Asic\accountIdentifierType' => __DIR__ .'/accountIdentifierType.php',
        'App\Asic\rejectedType' => __DIR__ .'/rejectedType.php',
        'App\Asic\standardHeaderType' => __DIR__ .'/standardHeaderType.php',
        'App\Asic\standardMessageHeaderType' => __DIR__ .'/standardMessageHeaderType.php',
        'App\Asic\requestType' => __DIR__ .'/requestType.php',
        'App\Asic\replyType' => __DIR__ .'/replyType.php',
        'App\Asic\result' => __DIR__ .'/result.php',
        'App\Asic\resultType' => __DIR__ .'/resultType.php',
        'App\Asic\timestampType' => __DIR__ .'/timestampType.php',
        'App\Asic\timestampListType' => __DIR__ .'/timestampListType.php',
        'App\Asic\exceptionType' => __DIR__ .'/exceptionType.php',
        'App\Asic\context' => __DIR__ .'/context.php',
        'App\Asic\exceptionListType' => __DIR__ .'/exceptionListType.php',
        'App\Asic\traceType' => __DIR__ .'/traceType.php',
        'App\Asic\traceListType' => __DIR__ .'/traceListType.php',
        'App\Asic\paymentType' => __DIR__ .'/paymentType.php',
        'App\Asic\creditCardType' => __DIR__ .'/creditCardType.php',
        'App\Asic\nameType' => __DIR__ .'/nameType.php',
        'App\Asic\fileNotesType' => __DIR__ .'/fileNotesType.php',
        'App\Asic\applicationStatusType' => __DIR__ .'/applicationStatusType.php',
        'App\Asic\inboxIdentifierType' => __DIR__ .'/inboxIdentifierType.php',
        'App\Asic\lodgementIdentifierType' => __DIR__ .'/lodgementIdentifierType.php',
        'App\Asic\outboundItemIdentifierType' => __DIR__ .'/outboundItemIdentifierType.php',
        'App\Asic\itemSearchScopeType' => __DIR__ .'/itemSearchScopeType.php',
        'App\Asic\itemTypeType' => __DIR__ .'/itemTypeType.php',
        'App\Asic\itemSummaryType' => __DIR__ .'/itemSummaryType.php',
        'App\Asic\entityType' => __DIR__ .'/entityType.php',
        'App\Asic\agentType' => __DIR__ .'/agentType.php',
        'App\Asic\stateTerritoryCodeType' => __DIR__ .'/stateTerritoryCodeType.php',
        'App\Asic\objectionType' => __DIR__ .'/objectionType.php',
        'App\Asic\flagType' => __DIR__ .'/flagType.php',
        'App\Asic\nameResultType' => __DIR__ .'/nameResultType.php',
        'App\Asic\nameResultWithObjectionsType' => __DIR__ .'/nameResultWithObjectionsType.php',
        'App\Asic\originatingChannelType' => __DIR__ .'/originatingChannelType.php',
        'App\Asic\originatingServiceType' => __DIR__ .'/originatingServiceType.php',
        'App\Asic\nameAvailabilityType' => __DIR__ .'/nameAvailabilityType.php',
        'App\Asic\nameAvailabilityResponseType' => __DIR__ .'/nameAvailabilityResponseType.php',
        'App\Asic\businessNameIdentifierType' => __DIR__ .'/businessNameIdentifierType.php',
        'App\Asic\requestRejectedType' => __DIR__ .'/requestRejectedType.php',
        'App\Asic\requestFailedType' => __DIR__ .'/requestFailedType.php',
        'App\Asic\actionType' => __DIR__ .'/actionType.php',
        'App\Asic\paymentMethodType' => __DIR__ .'/paymentMethodType.php',
        'App\Asic\abnRecordType' => __DIR__ .'/abnRecordType.php',
        'App\Asic\ANZSIC' => __DIR__ .'/ANZSIC.php',
        'App\Asic\goodsAndServicesTax' => __DIR__ .'/goodsAndServicesTax.php',
        'App\Asic\deductibleGiftRecipient' => __DIR__ .'/deductibleGiftRecipient.php',
        'App\Asic\legalName' => __DIR__ .'/legalName.php',
        'App\Asic\organisation' => __DIR__ .'/organisation.php',
        'App\Asic\individual' => __DIR__ .'/individual.php',
        'App\Asic\mainTradingName' => __DIR__ .'/mainTradingName.php',
        'App\Asic\otherTradingName' => __DIR__ .'/otherTradingName.php',
        'App\Asic\associate' => __DIR__ .'/associate.php',
        'App\Asic\relationship' => __DIR__ .'/relationship.php',
        'App\Asic\organisationNameType' => __DIR__ .'/organisationNameType.php',
        'App\Asic\identifierType' => __DIR__ .'/identifierType.php',
        'App\Asic\individualNameType' => __DIR__ .'/individualNameType.php',
        'App\Asic\geographicType' => __DIR__ .'/geographicType.php',
        'App\Asic\searchIdentifierType' => __DIR__ .'/searchIdentifierType.php',
        'App\Asic\indicatorType' => __DIR__ .'/indicatorType.php',
        'App\Asic\baseAbrEntityType' => __DIR__ .'/baseAbrEntityType.php',
        'App\Asic\abrEntityType' => __DIR__ .'/abrEntityType.php',
        'App\Asic\abnEmailType' => __DIR__ .'/abnEmailType.php',
        'App\Asic\abnUpdateType' => __DIR__ .'/abnUpdateType.php',
        'App\Asic\fssCustomerType' => __DIR__ .'/fssCustomerType.php',
        'App\Asic\agent' => __DIR__ .'/agent.php',
        'App\Asic\billingAddress' => __DIR__ .'/billingAddress.php',
        'App\Asic\fssSimpleAccountType' => __DIR__ .'/fssSimpleAccountType.php',
        'App\Asic\fssAccountType' => __DIR__ .'/fssAccountType.php',
        'App\Asic\fssItemType' => __DIR__ .'/fssItemType.php',
        'App\Asic\feeType' => __DIR__ .'/feeType.php',
        'App\Asic\feesType' => __DIR__ .'/feesType.php',
        'App\Asic\invoice' => __DIR__ .'/invoice.php',
        'App\Asic\debtorDetail' => __DIR__ .'/debtorDetail.php',
        'App\Asic\invoiceItems' => __DIR__ .'/invoiceItems.php',
        'App\Asic\item' => __DIR__ .'/item.php',
        'App\Asic\fssTransactionType' => __DIR__ .'/fssTransactionType.php',
        'App\Asic\transactionType' => __DIR__ .'/transactionType.php',
        'App\Asic\invoiceType' => __DIR__ .'/invoiceType.php',
        'App\Asic\invoicePeriod' => __DIR__ .'/invoicePeriod.php',
        'App\Asic\asicPaymentDetails' => __DIR__ .'/asicPaymentDetails.php',
        'App\Asic\bpay' => __DIR__ .'/bpay.php',
        'App\Asic\postBillpay' => __DIR__ .'/postBillpay.php',
        'App\Asic\receiptType' => __DIR__ .'/receiptType.php',
        'App\Asic\paymentDetailsType' => __DIR__ .'/paymentDetailsType.php',
        'App\Asic\transactionsType' => __DIR__ .'/transactionsType.php',
        'App\Asic\debtorType' => __DIR__ .'/debtorType.php',
        'App\Asic\feeWithAmountType' => __DIR__ .'/feeWithAmountType.php',
        'App\Asic\priceType' => __DIR__ .'/priceType.php',
        'App\Asic\asicPaymentDetailsType' => __DIR__ .'/asicPaymentDetailsType.php',
        'App\Asic\organisationLodgeType' => __DIR__ .'/organisationLodgeType.php',
        'App\Asic\organisationType' => __DIR__ .'/organisationType.php',
        'App\Asic\termType' => __DIR__ .'/termType.php',
        'App\Asic\simpleBnExtractType' => __DIR__ .'/simpleBnExtractType.php',
        'App\Asic\businessNameExtractType' => __DIR__ .'/businessNameExtractType.php',
        'App\Asic\business' => __DIR__ .'/business.php',
        'App\Asic\documentType' => __DIR__ .'/documentType.php',
        'App\Asic\additionalDescription' => __DIR__ .'/additionalDescription.php',
        'App\Asic\billingType' => __DIR__ .'/billingType.php',
        'App\Asic\charge' => __DIR__ .'/charge.php',
        'App\Asic\chargeType' => __DIR__ .'/chargeType.php',
        'App\Asic\previousStateTerritoryType' => __DIR__ .'/previousStateTerritoryType.php',
        'App\Asic\contactPersonType' => __DIR__ .'/contactPersonType.php',
        'App\Asic\contactPersonWithAddressType' => __DIR__ .'/contactPersonWithAddressType.php',
        'App\Asic\outboundContactPersonType' => __DIR__ .'/outboundContactPersonType.php',
        'App\Asic\outboundContactPersonWithAddressType' => __DIR__ .'/outboundContactPersonWithAddressType.php',
        'App\Asic\personWithRolesType' => __DIR__ .'/personWithRolesType.php',
        'App\Asic\role' => __DIR__ .'/role.php',
        'App\Asic\personsWithRolesType' => __DIR__ .'/personsWithRolesType.php',
        'App\Asic\bnCredentialsType' => __DIR__ .'/bnCredentialsType.php',
        'App\Asic\outboundBusinessNameType' => __DIR__ .'/outboundBusinessNameType.php',
        'App\Asic\bnLodgeFormType' => __DIR__ .'/bnLodgeFormType.php',
        'App\Asic\bnRenewalFormType' => __DIR__ .'/bnRenewalFormType.php',
        'App\Asic\bnUpdateFormType' => __DIR__ .'/bnUpdateFormType.php',
        'App\Asic\bnCancelFormType' => __DIR__ .'/bnCancelFormType.php',
        'App\Asic\bnLinkFormType' => __DIR__ .'/bnLinkFormType.php',
        'App\Asic\individualType' => __DIR__ .'/individualType.php',
        'App\Asic\bnStatusCodeType' => __DIR__ .'/bnStatusCodeType.php',
        'App\Asic\bnApplicationStatusCodeType' => __DIR__ .'/bnApplicationStatusCodeType.php',
        'App\Asic\bnSearchStatusCodeType' => __DIR__ .'/bnSearchStatusCodeType.php',
        'App\Asic\businessEntityType' => __DIR__ .'/businessEntityType.php',
        'App\Asic\associateType' => __DIR__ .'/associateType.php',
        'App\Asic\partnerAssociateType' => __DIR__ .'/partnerAssociateType.php',
        'App\Asic\representativeType' => __DIR__ .'/representativeType.php',
        'App\Asic\personExtractRequestType' => __DIR__ .'/personExtractRequestType.php',
        'App\Asic\personIds' => __DIR__ .'/personIds.php',
        'App\Asic\bnGetRegistrationRecordRequestType' => __DIR__ .'/bnGetRegistrationRecordRequestType.php',
        'App\Asic\registrationRecord' => __DIR__ .'/registrationRecord.php',
        'App\Asic\bnSearchRequestType' => __DIR__ .'/bnSearchRequestType.php',
        'App\Asic\search' => __DIR__ .'/search.php',
        'App\Asic\filter' => __DIR__ .'/filter.php',
        'App\Asic\locationType' => __DIR__ .'/locationType.php',
        'App\Asic\localityState' => __DIR__ .'/localityState.php',
        'App\Asic\bnExtractRequestType' => __DIR__ .'/bnExtractRequestType.php',
        'App\Asic\stateTerritory' => __DIR__ .'/stateTerritory.php',
        'App\Asic\representativeTypeType' => __DIR__ .'/representativeTypeType.php',
        'App\Asic\roleCodeType' => __DIR__ .'/roleCodeType.php',
        'App\Asic\bnRoleCodeType' => __DIR__ .'/bnRoleCodeType.php',
        'App\Asic\roleTypeType' => __DIR__ .'/roleTypeType.php',
        'App\Asic\addRemoveActionType' => __DIR__ .'/addRemoveActionType.php',
        'App\Asic\updateActionType' => __DIR__ .'/updateActionType.php',
        'App\Asic\reportDataType' => __DIR__ .'/reportDataType.php',
        'App\Asic\reportRequestType' => __DIR__ .'/reportRequestType.php',
        'App\Asic\bnReportType' => __DIR__ .'/bnReportType.php',
        'App\Asic\periodType' => __DIR__ .'/periodType.php',
        'App\Asic\bnIdentifier' => __DIR__ .'/bnIdentifier.php',
        'App\Asic\businessEntityLodgeType' => __DIR__ .'/businessEntityLodgeType.php',
        'App\Asic\associateLodgeType' => __DIR__ .'/associateLodgeType.php',
        'App\Asic\partnerAssociateLodgeType' => __DIR__ .'/partnerAssociateLodgeType.php',
        'App\Asic\individualLodgeType' => __DIR__ .'/individualLodgeType.php',
        'App\Asic\renewalReplyDataType' => __DIR__ .'/renewalReplyDataType.php',
        'App\Asic\renewalResultType' => __DIR__ .'/renewalResultType.php',
        'App\Asic\bnChangeAddressType' => __DIR__ .'/bnChangeAddressType.php',
        'App\Asic\bnAddressType' => __DIR__ .'/bnAddressType.php',
        'App\Asic\smsType' => __DIR__ .'/smsType.php',
        'App\Asic\bnCancelTransferType' => __DIR__ .'/bnCancelTransferType.php',
        'App\Asic\bnCancelTransferReplyType' => __DIR__ .'/bnCancelTransferReplyType.php',
        'App\Asic\base64Binary' => __DIR__ .'/base64Binary.php',
        'App\Asic\hexBinary' => __DIR__ .'/hexBinary.php',
        'App\Asic\businessDocumentRequestHeaderType' => __DIR__ .'/businessDocumentRequestHeaderType.php',
        'App\Asic\businessDocumentHeaderType' => __DIR__ .'/businessDocumentHeaderType.php',
        'App\Asic\attachmentsType' => __DIR__ .'/attachmentsType.php',
        'App\Asic\attachmentType' => __DIR__ .'/attachmentType.php',
        'App\Asic\softwareInformationType' => __DIR__ .'/softwareInformationType.php',
        'App\Asic\messageEventType' => __DIR__ .'/messageEventType.php',
        'App\Asic\messageTimestampsType' => __DIR__ .'/messageTimestampsType.php',
        'App\Asic\messageTimestampType' => __DIR__ .'/messageTimestampType.php',
        'App\Asic\messageEventsType' => __DIR__ .'/messageEventsType.php',
        'App\Asic\genericResultType' => __DIR__ .'/genericResultType.php',
        'App\Asic\tTimestampFault' => __DIR__ .'/tTimestampFault.php',
        'App\Asic\AttributedDateTime' => __DIR__ .'/AttributedDateTime.php',
        'App\Asic\AttributedURI' => __DIR__ .'/AttributedURI.php',
        'App\Asic\TimestampType' => __DIR__ .'/TimestampType.php',
        'App\Asic\cancelRequestType' => __DIR__ .'/cancelRequestType.php',
        'App\Asic\cancelReplyType' => __DIR__ .'/cancelReplyType.php',
        'App\Asic\changeAddressRequestType' => __DIR__ .'/changeAddressRequestType.php',
        'App\Asic\changeAddressReplyType' => __DIR__ .'/changeAddressReplyType.php',
        'App\Asic\renewalRequestType' => __DIR__ .'/renewalRequestType.php',
        'App\Asic\renewalReplyType' => __DIR__ .'/renewalReplyType.php',
        'App\Asic\bz1RequestType' => __DIR__ .'/bz1RequestType.php',
        'App\Asic\bz1ReplyType' => __DIR__ .'/bz1ReplyType.php',
        'App\Asic\bz1ReplyDataType' => __DIR__ .'/bz1ReplyDataType.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_2601db981a9d4e15cd8984489f2bd873');

// Do nothing. The rest is just leftovers from the code generation.
{
}
