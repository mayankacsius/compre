<?php

namespace App\Asic;

class hexBinary
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var anonymous469 $contentType
     */
    protected $contentType = null;

    /**
     * @param string $_
     * @param anonymous469 $contentType
     */
    public function __construct($_, $contentType)
    {
      $this->_ = $_;
      $this->contentType = $contentType;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \App\Asic\hexBinary
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous469
     */
    public function getContentType()
    {
      return $this->contentType;
    }

    /**
     * @param anonymous469 $contentType
     * @return \App\Asic\hexBinary
     */
    public function setContentType($contentType)
    {
      $this->contentType = $contentType;
      return $this;
    }

}
