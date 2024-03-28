<?php

namespace App\Asic;

class lodgements
{

    /**
     * @var registrations $registrations
     */
    protected $registrations = null;

    /**
     * @var reservation $reservation
     */
    protected $reservation = null;

    /**
     * @var reservationExtension $reservationExtension
     */
    protected $reservationExtension = null;

    /**
     * @param registrations $registrations
     * @param reservation $reservation
     * @param reservationExtension $reservationExtension
     */
    public function __construct($registrations, $reservation, $reservationExtension)
    {
      $this->registrations = $registrations;
      $this->reservation = $reservation;
      $this->reservationExtension = $reservationExtension;
    }

    /**
     * @return registrations
     */
    public function getRegistrations()
    {
      return $this->registrations;
    }

    /**
     * @param registrations $registrations
     * @return \App\Asic\lodgements
     */
    public function setRegistrations($registrations)
    {
      $this->registrations = $registrations;
      return $this;
    }

    /**
     * @return reservation
     */
    public function getReservation()
    {
      return $this->reservation;
    }

    /**
     * @param reservation $reservation
     * @return \App\Asic\lodgements
     */
    public function setReservation($reservation)
    {
      $this->reservation = $reservation;
      return $this;
    }

    /**
     * @return reservationExtension
     */
    public function getReservationExtension()
    {
      return $this->reservationExtension;
    }

    /**
     * @param reservationExtension $reservationExtension
     * @return \App\Asic\lodgements
     */
    public function setReservationExtension($reservationExtension)
    {
      $this->reservationExtension = $reservationExtension;
      return $this;
    }

}
