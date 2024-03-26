<?php

namespace App\Asic;

class distinguishedNameType
{

    /**
     * @var nniNameType $name
     */
    protected $name = null;

    /**
     * @var distinguishedWordType $distinguishedWord
     */
    protected $distinguishedWord = null;

    /**
     * @param nniNameType $name
     */
    public function __construct($name)
    {
      $this->name = $name;
    }

    /**
     * @return nniNameType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param nniNameType $name
     * @return \App\Asic\distinguishedNameType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return distinguishedWordType
     */
    public function getDistinguishedWord()
    {
      return $this->distinguishedWord;
    }

    /**
     * @param distinguishedWordType $distinguishedWord
     * @return \App\Asic\distinguishedNameType
     */
    public function setDistinguishedWord($distinguishedWord)
    {
      $this->distinguishedWord = $distinguishedWord;
      return $this;
    }

}
