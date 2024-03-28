<?php

namespace App\Asic;

class CoyReserveFormType
{

    /**
     * @var isWithdraw $isWithdraw
     */
    protected $isWithdraw = null;

    /**
     * @var lodgement $lodgement
     */
    protected $lodgement = null;

    /**
     * @param isWithdraw $isWithdraw
     * @param lodgement $lodgement
     */
    public function __construct($isWithdraw, $lodgement)
    {
      $this->isWithdraw = $isWithdraw;
      $this->lodgement = $lodgement;
    }

    /**
     * @return isWithdraw
     */
    public function getIsWithdraw()
    {
      return $this->isWithdraw;
    }

    /**
     * @param isWithdraw $isWithdraw
     * @return \App\Asic\CoyReserveFormType
     */
    public function setIsWithdraw($isWithdraw)
    {
      $this->isWithdraw = $isWithdraw;
      return $this;
    }

    /**
     * @return lodgement
     */
    public function getLodgement()
    {
      return $this->lodgement;
    }

    /**
     * @param lodgement $lodgement
     * @return \App\Asic\CoyReserveFormType
     */
    public function setLodgement($lodgement)
    {
      $this->lodgement = $lodgement;
      return $this;
    }

}
