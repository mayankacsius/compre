<?php

namespace App\Asic;

class AttributedDateTime
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var ID $Id
     */
    protected $Id = null;

    /**
     * @param string $_
     * @param ID $Id
     */
    public function __construct($_, $Id)
    {
      $this->_ = $_;
      $this->Id = $Id;
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
     * @return \App\Asic\AttributedDateTime
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param ID $Id
     * @return \App\Asic\AttributedDateTime
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
