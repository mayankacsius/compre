<?php

namespace App\Asic;

class asicSignatoryType
{

    /**
     * @var name $name
     */
    protected $name = null;

    /**
     * @var capacity $capacity
     */
    protected $capacity = null;

    /**
     * @var filename $filename
     */
    protected $filename = null;

    /**
     * @var date $dateSigned
     */
    protected $dateSigned = null;

    /**
     * @param name $name
     * @param capacity $capacity
     * @param filename $filename
     * @param date $dateSigned
     */
    public function __construct($name, $capacity, $filename, $dateSigned)
    {
      $this->name = $name;
      $this->capacity = $capacity;
      $this->filename = $filename;
      $this->dateSigned = $dateSigned;
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
     * @return \App\Asic\asicSignatoryType
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
     * @return \App\Asic\asicSignatoryType
     */
    public function setCapacity($capacity)
    {
      $this->capacity = $capacity;
      return $this;
    }

    /**
     * @return filename
     */
    public function getFilename()
    {
      return $this->filename;
    }

    /**
     * @param filename $filename
     * @return \App\Asic\asicSignatoryType
     */
    public function setFilename($filename)
    {
      $this->filename = $filename;
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
     * @return \App\Asic\asicSignatoryType
     */
    public function setDateSigned($dateSigned)
    {
      $this->dateSigned = $dateSigned;
      return $this;
    }

}
