<?php

namespace App\Asic;

class abnRecordType extends organisationNameType
{

    /**
     * @var identifierType[] $ABN
     */
    protected $ABN = null;

    /**
     * @var identifierType[] $ACN
     */
    protected $ACN = null;

    /**
     * @var ANZSIC[] $ANZSIC
     */
    protected $ANZSIC = null;

    /**
     * @var entityTypeType[] $entityType
     */
    protected $entityType = null;

    /**
     * @var goodsAndServicesTax[] $goodsAndServicesTax
     */
    protected $goodsAndServicesTax = null;

    /**
     * @var deductibleGiftRecipient[] $deductibleGiftRecipient
     */
    protected $deductibleGiftRecipient = null;

    /**
     * @var legalName[] $legalName
     */
    protected $legalName = null;

    /**
     * @var mainTradingName[] $mainTradingName
     */
    protected $mainTradingName = null;

    /**
     * @var otherTradingName[] $otherTradingName
     */
    protected $otherTradingName = null;

    /**
     * @var geographicType[] $serviceOfNoticePhysicalAddress
     */
    protected $serviceOfNoticePhysicalAddress = null;

    /**
     * @var abnEmailType[] $serviceOfNoticeEmailAddress
     */
    protected $serviceOfNoticeEmailAddress = null;

    /**
     * @var geographicType[] $mainBusinessPhysicalAddress
     */
    protected $mainBusinessPhysicalAddress = null;

    /**
     * @var associate[] $associate
     */
    protected $associate = null;

    /**
     * @var indicatorType $suppressionIndicator
     */
    protected $suppressionIndicator = null;

    /**
     * @param nniNameType $organisationShortName1
     * @param nniNameType $organisationShortName2
     * @param dateType $effectiveFrom
     * @param indicatorType $deleteIndicator
     * @param nniNameType $organisationName
     * @param identifierType[] $ABN
     */
    public function __construct($organisationShortName1, $organisationShortName2, $effectiveFrom, $deleteIndicator, $organisationName, array $ABN)
    {
      parent::__construct($organisationShortName1, $organisationShortName2, $effectiveFrom, $deleteIndicator, $organisationName);
      $this->ABN = $ABN;
    }

    /**
     * @return identifierType[]
     */
    public function getABN()
    {
      return $this->ABN;
    }

    /**
     * @param identifierType[] $ABN
     * @return \App\Asic\abnRecordType
     */
    public function setABN(array $ABN)
    {
      $this->ABN = $ABN;
      return $this;
    }

    /**
     * @return identifierType[]
     */
    public function getACN()
    {
      return $this->ACN;
    }

    /**
     * @param identifierType[] $ACN
     * @return \App\Asic\abnRecordType
     */
    public function setACN(array $ACN = null)
    {
      $this->ACN = $ACN;
      return $this;
    }

    /**
     * @return ANZSIC[]
     */
    public function getANZSIC()
    {
      return $this->ANZSIC;
    }

    /**
     * @param ANZSIC[] $ANZSIC
     * @return \App\Asic\abnRecordType
     */
    public function setANZSIC(array $ANZSIC = null)
    {
      $this->ANZSIC = $ANZSIC;
      return $this;
    }

    /**
     * @return entityTypeType[]
     */
    public function getEntityType()
    {
      return $this->entityType;
    }

    /**
     * @param entityTypeType[] $entityType
     * @return \App\Asic\abnRecordType
     */
    public function setEntityType(array $entityType = null)
    {
      $this->entityType = $entityType;
      return $this;
    }

    /**
     * @return goodsAndServicesTax[]
     */
    public function getGoodsAndServicesTax()
    {
      return $this->goodsAndServicesTax;
    }

    /**
     * @param goodsAndServicesTax[] $goodsAndServicesTax
     * @return \App\Asic\abnRecordType
     */
    public function setGoodsAndServicesTax(array $goodsAndServicesTax = null)
    {
      $this->goodsAndServicesTax = $goodsAndServicesTax;
      return $this;
    }

    /**
     * @return deductibleGiftRecipient[]
     */
    public function getDeductibleGiftRecipient()
    {
      return $this->deductibleGiftRecipient;
    }

    /**
     * @param deductibleGiftRecipient[] $deductibleGiftRecipient
     * @return \App\Asic\abnRecordType
     */
    public function setDeductibleGiftRecipient(array $deductibleGiftRecipient = null)
    {
      $this->deductibleGiftRecipient = $deductibleGiftRecipient;
      return $this;
    }

    /**
     * @return legalName[]
     */
    public function getLegalName()
    {
      return $this->legalName;
    }

    /**
     * @param legalName[] $legalName
     * @return \App\Asic\abnRecordType
     */
    public function setLegalName(array $legalName = null)
    {
      $this->legalName = $legalName;
      return $this;
    }

    /**
     * @return mainTradingName[]
     */
    public function getMainTradingName()
    {
      return $this->mainTradingName;
    }

    /**
     * @param mainTradingName[] $mainTradingName
     * @return \App\Asic\abnRecordType
     */
    public function setMainTradingName(array $mainTradingName = null)
    {
      $this->mainTradingName = $mainTradingName;
      return $this;
    }

    /**
     * @return otherTradingName[]
     */
    public function getOtherTradingName()
    {
      return $this->otherTradingName;
    }

    /**
     * @param otherTradingName[] $otherTradingName
     * @return \App\Asic\abnRecordType
     */
    public function setOtherTradingName(array $otherTradingName = null)
    {
      $this->otherTradingName = $otherTradingName;
      return $this;
    }

    /**
     * @return geographicType[]
     */
    public function getServiceOfNoticePhysicalAddress()
    {
      return $this->serviceOfNoticePhysicalAddress;
    }

    /**
     * @param geographicType[] $serviceOfNoticePhysicalAddress
     * @return \App\Asic\abnRecordType
     */
    public function setServiceOfNoticePhysicalAddress(array $serviceOfNoticePhysicalAddress = null)
    {
      $this->serviceOfNoticePhysicalAddress = $serviceOfNoticePhysicalAddress;
      return $this;
    }

    /**
     * @return abnEmailType[]
     */
    public function getServiceOfNoticeEmailAddress()
    {
      return $this->serviceOfNoticeEmailAddress;
    }

    /**
     * @param abnEmailType[] $serviceOfNoticeEmailAddress
     * @return \App\Asic\abnRecordType
     */
    public function setServiceOfNoticeEmailAddress(array $serviceOfNoticeEmailAddress = null)
    {
      $this->serviceOfNoticeEmailAddress = $serviceOfNoticeEmailAddress;
      return $this;
    }

    /**
     * @return geographicType[]
     */
    public function getMainBusinessPhysicalAddress()
    {
      return $this->mainBusinessPhysicalAddress;
    }

    /**
     * @param geographicType[] $mainBusinessPhysicalAddress
     * @return \App\Asic\abnRecordType
     */
    public function setMainBusinessPhysicalAddress(array $mainBusinessPhysicalAddress = null)
    {
      $this->mainBusinessPhysicalAddress = $mainBusinessPhysicalAddress;
      return $this;
    }

    /**
     * @return associate[]
     */
    public function getAssociate()
    {
      return $this->associate;
    }

    /**
     * @param associate[] $associate
     * @return \App\Asic\abnRecordType
     */
    public function setAssociate(array $associate = null)
    {
      $this->associate = $associate;
      return $this;
    }

    /**
     * @return indicatorType
     */
    public function getSuppressionIndicator()
    {
      return $this->suppressionIndicator;
    }

    /**
     * @param indicatorType $suppressionIndicator
     * @return \App\Asic\abnRecordType
     */
    public function setSuppressionIndicator($suppressionIndicator)
    {
      $this->suppressionIndicator = $suppressionIndicator;
      return $this;
    }

}
