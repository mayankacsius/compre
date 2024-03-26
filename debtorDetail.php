<?php

namespace App\Asic;

class debtorDetail
{

    /**
     * @var prefix $prefix
     */
    protected $prefix = null;

    /**
     * @var suffix $suffix
     */
    protected $suffix = null;

    /**
     * @param prefix $prefix
     * @param suffix $suffix
     */
    public function __construct($prefix, $suffix)
    {
      $this->prefix = $prefix;
      $this->suffix = $suffix;
    }

    /**
     * @return prefix
     */
    public function getPrefix()
    {
      return $this->prefix;
    }

    /**
     * @param prefix $prefix
     * @return \App\Asic\debtorDetail
     */
    public function setPrefix($prefix)
    {
      $this->prefix = $prefix;
      return $this;
    }

    /**
     * @return suffix
     */
    public function getSuffix()
    {
      return $this->suffix;
    }

    /**
     * @param suffix $suffix
     * @return \App\Asic\debtorDetail
     */
    public function setSuffix($suffix)
    {
      $this->suffix = $suffix;
      return $this;
    }

}
