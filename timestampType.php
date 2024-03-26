<?php

namespace App\Asic;

class TimestampType
{

    /**
     * @var AttributedDateTime $Created
     */
    protected $Created = null;

    /**
     * @var AttributedDateTime $Expires
     */
    protected $Expires = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var ID $Id
     */
    protected $Id = null;

    /**
     * @param AttributedDateTime $Created
     * @param AttributedDateTime $Expires
     * @param string $any
     * @param ID $Id
     */
    public function __construct($Created, $Expires, $any, $Id)
    {
      $this->Created = $Created;
      $this->Expires = $Expires;
      $this->any = $any;
      $this->Id = $Id;
    }

    /**
     * @return AttributedDateTime
     */
    public function getCreated()
    {
      return $this->Created;
    }

    /**
     * @param AttributedDateTime $Created
     * @return \App\Asic\TimestampType
     */
    public function setCreated($Created)
    {
      $this->Created = $Created;
      return $this;
    }

    /**
     * @return AttributedDateTime
     */
    public function getExpires()
    {
      return $this->Expires;
    }

    /**
     * @param AttributedDateTime $Expires
     * @return \App\Asic\TimestampType
     */
    public function setExpires($Expires)
    {
      $this->Expires = $Expires;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \App\Asic\TimestampType
     */
    public function setAny($any)
    {
      $this->any = $any;
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
     * @return \App\Asic\TimestampType
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
