<?php

namespace App\Asic;

class reservationDetails
{

    /**
     * @var reservationDocumentNumber $reservationDocumentNumber
     */
    protected $reservationDocumentNumber = null;

    /**
     * @param reservationDocumentNumber $reservationDocumentNumber
     */
    public function __construct($reservationDocumentNumber)
    {
      $this->reservationDocumentNumber = $reservationDocumentNumber;
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
     * @return \App\Asic\reservationDetails
     */
    public function setReservationDocumentNumber($reservationDocumentNumber)
    {
      $this->reservationDocumentNumber = $reservationDocumentNumber;
      return $this;
    }

}
