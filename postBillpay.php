<?php

namespace App\Asic;

class postBillpay
{

    /**
     * @var billpayCode $billpayCode
     */
    protected $billpayCode = null;

    /**
     * @var ref $ref
     */
    protected $ref = null;

    /**
     * @param billpayCode $billpayCode
     * @param ref $ref
     */
    public function __construct($billpayCode, $ref)
    {
      $this->billpayCode = $billpayCode;
      $this->ref = $ref;
    }

    /**
     * @return billpayCode
     */
    public function getBillpayCode()
    {
      return $this->billpayCode;
    }

    /**
     * @param billpayCode $billpayCode
     * @return \App\Asic\postBillpay
     */
    public function setBillpayCode($billpayCode)
    {
      $this->billpayCode = $billpayCode;
      return $this;
    }

    /**
     * @return ref
     */
    public function getRef()
    {
      return $this->ref;
    }

    /**
     * @param ref $ref
     * @return \App\Asic\postBillpay
     */
    public function setRef($ref)
    {
      $this->ref = $ref;
      return $this;
    }

}
