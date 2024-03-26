<?php

namespace App\Asic;

class resultType
{

    /**
     * @var trueType $requestFulfilled
     */
    protected $requestFulfilled = null;

    /**
     * @var trueType $requestRejected
     */
    protected $requestRejected = null;

    /**
     * @var trueType $requestDelayed
     */
    protected $requestDelayed = null;

    /**
     * @var trueType $requestFailed
     */
    protected $requestFailed = null;

    /**
     * @param trueType $requestFulfilled
     * @param trueType $requestRejected
     * @param trueType $requestDelayed
     * @param trueType $requestFailed
     */
    public function __construct($requestFulfilled, $requestRejected, $requestDelayed, $requestFailed)
    {
      $this->requestFulfilled = $requestFulfilled;
      $this->requestRejected = $requestRejected;
      $this->requestDelayed = $requestDelayed;
      $this->requestFailed = $requestFailed;
    }

    /**
     * @return trueType
     */
    public function getRequestFulfilled()
    {
      return $this->requestFulfilled;
    }

    /**
     * @param trueType $requestFulfilled
     * @return \App\Asic\resultType
     */
    public function setRequestFulfilled($requestFulfilled)
    {
      $this->requestFulfilled = $requestFulfilled;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getRequestRejected()
    {
      return $this->requestRejected;
    }

    /**
     * @param trueType $requestRejected
     * @return \App\Asic\resultType
     */
    public function setRequestRejected($requestRejected)
    {
      $this->requestRejected = $requestRejected;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getRequestDelayed()
    {
      return $this->requestDelayed;
    }

    /**
     * @param trueType $requestDelayed
     * @return \App\Asic\resultType
     */
    public function setRequestDelayed($requestDelayed)
    {
      $this->requestDelayed = $requestDelayed;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getRequestFailed()
    {
      return $this->requestFailed;
    }

    /**
     * @param trueType $requestFailed
     * @return \App\Asic\resultType
     */
    public function setRequestFailed($requestFailed)
    {
      $this->requestFailed = $requestFailed;
      return $this;
    }

}
