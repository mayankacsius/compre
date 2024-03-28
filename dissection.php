<?php

namespace App\Asic;

class dissection
{

    /**
     * @var code $code
     */
    protected $code = null;

    /**
     * @var type $type
     */
    protected $type = null;

    /**
     * @var description $description
     */
    protected $description = null;

    /**
     * @var amountType $amount
     */
    protected $amount = null;

    /**
     * @param code $code
     * @param type $type
     * @param description $description
     * @param amountType $amount
     */
    public function __construct($code, $type, $description, $amount)
    {
      $this->code = $code;
      $this->type = $type;
      $this->description = $description;
      $this->amount = $amount;
    }

    /**
     * @return code
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param code $code
     * @return \App\Asic\dissection
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return type
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param type $type
     * @return \App\Asic\dissection
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return description
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param description $description
     * @return \App\Asic\dissection
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param amountType $amount
     * @return \App\Asic\dissection
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
