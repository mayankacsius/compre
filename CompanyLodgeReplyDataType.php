<?php

namespace App\Asic;

class CompanyLodgeReplyDataType
{

    /**
     * @var nameAvailabilityResponseType $notProcessed
     */
    protected $notProcessed = null;

    /**
     * @var accepted $accepted
     */
    protected $accepted = null;

    /**
     * @param nameAvailabilityResponseType $notProcessed
     * @param accepted $accepted
     */
    public function __construct($notProcessed, $accepted)
    {
      $this->notProcessed = $notProcessed;
      $this->accepted = $accepted;
    }

    /**
     * @return nameAvailabilityResponseType
     */
    public function getNotProcessed()
    {
      return $this->notProcessed;
    }

    /**
     * @param nameAvailabilityResponseType $notProcessed
     * @return \App\Asic\CompanyLodgeReplyDataType
     */
    public function setNotProcessed($notProcessed)
    {
      $this->notProcessed = $notProcessed;
      return $this;
    }

    /**
     * @return accepted
     */
    public function getAccepted()
    {
      return $this->accepted;
    }

    /**
     * @param accepted $accepted
     * @return \App\Asic\CompanyLodgeReplyDataType
     */
    public function setAccepted($accepted)
    {
      $this->accepted = $accepted;
      return $this;
    }

}
