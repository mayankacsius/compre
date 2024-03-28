<?php

namespace App\Asic;

class RegistrationAdministrativeDetailType
{

    /**
     * @var manualReview $manualReview
     */
    protected $manualReview = null;

    /**
     * @var boolean $isAsicConsentGranted
     */
    protected $isAsicConsentGranted = null;

    /**
     * @param manualReview $manualReview
     */
    public function __construct($manualReview)
    {
      $this->manualReview = $manualReview;
    }

    /**
     * @return manualReview
     */
    public function getManualReview()
    {
      return $this->manualReview;
    }

    /**
     * @param manualReview $manualReview
     * @return \App\Asic\RegistrationAdministrativeDetailType
     */
    public function setManualReview($manualReview)
    {
      $this->manualReview = $manualReview;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAsicConsentGranted()
    {
      return $this->isAsicConsentGranted;
    }

    /**
     * @param boolean $isAsicConsentGranted
     * @return \App\Asic\RegistrationAdministrativeDetailType
     */
    public function setIsAsicConsentGranted($isAsicConsentGranted)
    {
      $this->isAsicConsentGranted = $isAsicConsentGranted;
      return $this;
    }

}
