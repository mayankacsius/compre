<?php

namespace App\Asic;

class base64Binary
{

    /**
     * @var base64Binary $_
     */
    protected $_ = null;

    /**
     * @var anonymous315 $contentType
     */
    protected $contentType = null;

    /**
     * @param base64Binary $_
     * @param anonymous315 $contentType
     */
    public function __construct($_, $contentType)
    {
      $this->_ = $_;
      $this->contentType = $contentType;
    }

    /**
     * @return base64Binary
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param base64Binary $_
     * @return \App\Asic\base64Binary
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous315
     */
    public function getContentType()
    {
      return $this->contentType;
    }

    /**
     * @param anonymous315 $contentType
     * @return \App\Asic\base64Binary
     */
    public function setContentType($contentType)
    {
      $this->contentType = $contentType;
      return $this;
    }

}
