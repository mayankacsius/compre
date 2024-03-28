<?php

namespace App\Asic;

class modify
{

    /**
     * @var action $action
     */
    protected $action = null;

    /**
     * @var reason $reason
     */
    protected $reason = null;

    /**
     * @var reservationDocumentNumber $reservationDocumentNumber
     */
    protected $reservationDocumentNumber = null;

    /**
     * @var date $expiryDate
     */
    protected $expiryDate = null;

    /**
     * @param action $action
     * @param reason $reason
     * @param reservationDocumentNumber $reservationDocumentNumber
     * @param date $expiryDate
     */
    public function __construct($action, $reason, $reservationDocumentNumber, $expiryDate)
    {
      $this->action = $action;
      $this->reason = $reason;
      $this->reservationDocumentNumber = $reservationDocumentNumber;
      $this->expiryDate = $expiryDate;
    }

    /**
     * @return action
     */
    public function getAction()
    {
      return $this->action;
    }

    /**
     * @param action $action
     * @return \App\Asic\modify
     */
    public function setAction($action)
    {
      $this->action = $action;
      return $this;
    }

    /**
     * @return reason
     */
    public function getReason()
    {
      return $this->reason;
    }

    /**
     * @param reason $reason
     * @return \App\Asic\modify
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

    /**
     * @return reservationDocumentNumber
     */
    public function getReservationDocumentNumber()
    {
      return $this->reservationDocumentNumber;
    }

    /**
     * @param reservationDocumentNumber $reservationDocumentNumber
     * @return \App\Asic\modify
     */
    public function setReservationDocumentNumber($reservationDocumentNumber)
    {
      $this->reservationDocumentNumber = $reservationDocumentNumber;
      return $this;
    }

    /**
     * @return date
     */
    public function getExpiryDate()
    {
      return $this->expiryDate;
    }

    /**
     * @param date $expiryDate
     * @return \App\Asic\modify
     */
    public function setExpiryDate($expiryDate)
    {
      $this->expiryDate = $expiryDate;
      return $this;
    }

}
