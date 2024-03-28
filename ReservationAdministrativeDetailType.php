<?php

namespace App\Asic;

class ReservationAdministrativeDetailType
{

    /**
     * @var trueType $isManualProcessing
     */
    protected $isManualProcessing = null;

    /**
     * @var manualReviewSupportingReason[] $manualReviewSupportingReason
     */
    protected $manualReviewSupportingReason = null;

    /**
     * @param trueType $isManualProcessing
     * @param manualReviewSupportingReason[] $manualReviewSupportingReason
     */
    public function __construct($isManualProcessing, array $manualReviewSupportingReason)
    {
      $this->isManualProcessing = $isManualProcessing;
      $this->manualReviewSupportingReason = $manualReviewSupportingReason;
    }

    /**
     * @return trueType
     */
    public function getIsManualProcessing()
    {
      return $this->isManualProcessing;
    }

    /**
     * @param trueType $isManualProcessing
     * @return \App\Asic\ReservationAdministrativeDetailType
     */
    public function setIsManualProcessing($isManualProcessing)
    {
      $this->isManualProcessing = $isManualProcessing;
      return $this;
    }

    /**
     * @return manualReviewSupportingReason[]
     */
    public function getManualReviewSupportingReason()
    {
      return $this->manualReviewSupportingReason;
    }

    /**
     * @param manualReviewSupportingReason[] $manualReviewSupportingReason
     * @return \App\Asic\ReservationAdministrativeDetailType
     */
    public function setManualReviewSupportingReason(array $manualReviewSupportingReason)
    {
      $this->manualReviewSupportingReason = $manualReviewSupportingReason;
      return $this;
    }

}
