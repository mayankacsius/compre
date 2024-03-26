<?php

namespace App\Asic;

class signatoryType
{

    /**
     * @var personNameLodgeType $name
     */
    protected $name = null;

    /**
     * @var capacity $capacity
     */
    protected $capacity = null;

    /**
     * @var date $dateSigned
     */
    protected $dateSigned = null;

    /**
     * @var trueType $declaresTrueAndCorrect
     */
    protected $declaresTrueAndCorrect = null;

    /**
     * @param personNameLodgeType $name
     * @param date $dateSigned
     * @param trueType $declaresTrueAndCorrect
     */
    public function __construct($name, $dateSigned, $declaresTrueAndCorrect)
    {
      $this->name = $name;
      $this->dateSigned = $dateSigned;
      $this->declaresTrueAndCorrect = $declaresTrueAndCorrect;
    }

    /**
     * @return personNameLodgeType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param personNameLodgeType $name
     * @return \App\Asic\signatoryType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return capacity
     */
    public function getCapacity()
    {
      return $this->capacity;
    }

    /**
     * @param capacity $capacity
     * @return \App\Asic\signatoryType
     */
    public function setCapacity($capacity)
    {
      $this->capacity = $capacity;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateSigned()
    {
      return $this->dateSigned;
    }

    /**
     * @param date $dateSigned
     * @return \App\Asic\signatoryType
     */
    public function setDateSigned($dateSigned)
    {
      $this->dateSigned = $dateSigned;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getDeclaresTrueAndCorrect()
    {
      return $this->declaresTrueAndCorrect;
    }

    /**
     * @param trueType $declaresTrueAndCorrect
     * @return \App\Asic\signatoryType
     */
    public function setDeclaresTrueAndCorrect($declaresTrueAndCorrect)
    {
      $this->declaresTrueAndCorrect = $declaresTrueAndCorrect;
      return $this;
    }

}
