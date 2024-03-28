<?php

namespace App\Asic;

class formType
{

    /**
     * @var newRegistration $newRegistration
     */
    protected $newRegistration = null;

    /**
     * @var is410P $is410P
     */
    protected $is410P = null;

    /**
     * @var modify $modify
     */
    protected $modify = null;

    /**
     * @param newRegistration $newRegistration
     * @param is410P $is410P
     * @param modify $modify
     */
    public function __construct($newRegistration, $is410P, $modify)
    {
      $this->newRegistration = $newRegistration;
      $this->is410P = $is410P;
      $this->modify = $modify;
    }

    /**
     * @return newRegistration
     */
    public function getNewRegistration()
    {
      return $this->newRegistration;
    }

    /**
     * @param newRegistration $newRegistration
     * @return \App\Asic\formType
     */
    public function setNewRegistration($newRegistration)
    {
      $this->newRegistration = $newRegistration;
      return $this;
    }

    /**
     * @return is410P
     */
    public function getIs410P()
    {
      return $this->is410P;
    }

    /**
     * @param is410P $is410P
     * @return \App\Asic\formType
     */
    public function setIs410P($is410P)
    {
      $this->is410P = $is410P;
      return $this;
    }

    /**
     * @return modify
     */
    public function getModify()
    {
      return $this->modify;
    }

    /**
     * @param modify $modify
     * @return \App\Asic\formType
     */
    public function setModify($modify)
    {
      $this->modify = $modify;
      return $this;
    }

}
