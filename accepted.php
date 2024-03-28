<?php

namespace App\Asic;

class accepted
{

    /**
     * @var nniNumberType $acn
     */
    protected $acn = null;

    /**
     * @var certificateUrl $certificateUrl
     */
    protected $certificateUrl = null;

    /**
     * @param nniNumberType $acn
     * @param certificateUrl $certificateUrl
     */
    public function __construct($acn, $certificateUrl)
    {
      $this->acn = $acn;
      $this->certificateUrl = $certificateUrl;
    }

    /**
     * @return nniNumberType
     */
    public function getAcn()
    {
      return $this->acn;
    }

    /**
     * @param nniNumberType $acn
     * @return \App\Asic\accepted
     */
    public function setAcn($acn)
    {
      $this->acn = $acn;
      return $this;
    }

    /**
     * @return certificateUrl
     */
    public function getCertificateUrl()
    {
      return $this->certificateUrl;
    }

    /**
     * @param certificateUrl $certificateUrl
     * @return \App\Asic\accepted
     */
    public function setCertificateUrl($certificateUrl)
    {
      $this->certificateUrl = $certificateUrl;
      return $this;
    }

}
