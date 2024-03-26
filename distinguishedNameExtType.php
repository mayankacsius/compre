<?php

namespace App\Asic;

class distinguishedNameExtType
{

    /**
     * @var name $name
     */
    protected $name = null;

    /**
     * @var distinguishedWord $distinguishedWord
     */
    protected $distinguishedWord = null;

    /**
     * @param name $name
     */
    public function __construct($name)
    {
      $this->name = $name;
    }

    /**
     * @return name
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param name $name
     * @return \App\Asic\distinguishedNameExtType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return distinguishedWord
     */
    public function getDistinguishedWord()
    {
      return $this->distinguishedWord;
    }

    /**
     * @param distinguishedWord $distinguishedWord
     * @return \App\Asic\distinguishedNameExtType
     */
    public function setDistinguishedWord($distinguishedWord)
    {
      $this->distinguishedWord = $distinguishedWord;
      return $this;
    }

}
