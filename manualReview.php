<?php

namespace App\Asic;

class manualReview
{

    /**
     * @var trueType $isManualProcessing
     */
    protected $isManualProcessing = null;

    /**
     * @var manualReviewSupportingReason $manualReviewSupportingReason
     */
    protected $manualReviewSupportingReason = null;

    /**
     * @param trueType $isManualProcessing
     * @param manualReviewSupportingReason $manualReviewSupportingReason
     */
    public function __construct($isManualProcessing, $manualReviewSupportingReason)
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
     * @return \App\Asic\manualReview
     */
    public function setIsManualProcessing($isManualProcessing)
    {
      $this->isManualProcessing = $isManualProcessing;
      return $this;
    }

    /**
     * @return manualReviewSupportingReason
     */
    public function getManualReviewSupportingReason()
    {
      return $this->manualReviewSupportingReason;
    }

    /**
     * @param manualReviewSupportingReason $manualReviewSupportingReason
     * @return \App\Asic\manualReview
     */
    public function setManualReviewSupportingReason($manualReviewSupportingReason)
    {
      $this->manualReviewSupportingReason = $manualReviewSupportingReason;
      return $this;
    }

}
