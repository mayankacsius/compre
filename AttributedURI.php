<?php

namespace App\Asic;

class AttributedURI
{

    /**
     * @var anyURI $_
     */
    protected $_ = null;

    /**
     * @var ID $Id
     */
    protected $Id = null;

    /**
     * @param anyURI $_
     * @param ID $Id
     */
    public function __construct($_, $Id)
    {
      $this->_ = $_;
      $this->Id = $Id;
    }

    /**
     * @return anyURI
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param anyURI $_
     * @return \App\Asic\AttributedURI
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
     * @return \App\Asic\AttributedURI
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
