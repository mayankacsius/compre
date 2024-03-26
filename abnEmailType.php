<?php

namespace App\Asic;

class abnEmailType
{

    /**
     * @var dateType $effectiveFrom
     */
    protected $effectiveFrom = null;

    /**
     * @var dateType $effectiveTo
     */
    protected $effectiveTo = null;

    /**
     * @var indicatorType $deleteIndicator
     */
    protected $deleteIndicator = null;

    /**
     * @var emailType $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @param dateType $effectiveFrom
     * @param dateType $effectiveTo
     * @param indicatorType $deleteIndicator
     * @param emailType $emailAddress
     */
    public function __construct($effectiveFrom, $effectiveTo, $deleteIndicator, $emailAddress)
    {
      $this->effectiveFrom = $effectiveFrom;
      $this->effectiveTo = $effectiveTo;
      $this->deleteIndicator = $deleteIndicator;
      $this->emailAddress = $emailAddress;
    }

    /**
     * @return dateType
     */
    public function getEffectiveFrom()
    {
      return $this->effectiveFrom;
    }

    /**
     * @param dateType $effectiveFrom
     * @return \App\Asic\abnEmailType
     */
    public function setEffectiveFrom($effectiveFrom)
    {
      $this->effectiveFrom = $effectiveFrom;
      return $this;
    }

    /**
     * @return dateType
     */
    public function getEffectiveTo()
    {
      return $this->effectiveTo;
    }

    /**
     * @param dateType $effectiveTo
     * @return \App\Asic\abnEmailType
     */
    public function setEffectiveTo($effectiveTo)
    {
      $this->effectiveTo = $effectiveTo;
      return $this;
    }

    /**
     * @return indicatorType
     */
    public function getDeleteIndicator()
    {
      return $this->deleteIndicator;
    }

    /**
     * @param indicatorType $deleteIndicator
     * @return \App\Asic\abnEmailType
     */
    public function setDeleteIndicator($deleteIndicator)
    {
      $this->deleteIndicator = $deleteIndicator;
      return $this;
    }

    /**
     * @return emailType
     */
    public function getEmailAddress()
    {
      return $this->emailAddress;
    }

    /**
     * @param emailType $emailAddress
     * @return \App\Asic\abnEmailType
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

}
