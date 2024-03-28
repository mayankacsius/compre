<?php

namespace App\Asic;

class statusReason
{

    /**
     * @var statusText $statusText
     */
    protected $statusText = null;

    /**
     * @param statusText $statusText
     */
    public function __construct($statusText)
    {
      $this->statusText = $statusText;
    }

    /**
     * @return statusText
     */
    public function getStatusText()
    {
      return $this->statusText;
    }

    /**
     * @param statusText $statusText
     * @return \App\Asic\statusReason
     */
    public function setStatusText($statusText)
    {
      $this->statusText = $statusText;
      return $this;
    }

}
