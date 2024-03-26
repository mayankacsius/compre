<?php

namespace App\Asic;

class document
{

    /**
     * @var date $dateListStart
     */
    protected $dateListStart = null;

    /**
     * @var date $dateListEnd
     */
    protected $dateListEnd = null;

    /**
     * @var int $maxDocuments
     */
    protected $maxDocuments = null;

    /**
     * @param date $dateListStart
     * @param date $dateListEnd
     * @param int $maxDocuments
     */
    public function __construct($dateListStart, $dateListEnd, $maxDocuments)
    {
      $this->dateListStart = $dateListStart;
      $this->dateListEnd = $dateListEnd;
      $this->maxDocuments = $maxDocuments;
    }

    /**
     * @return date
     */
    public function getDateListStart()
    {
      return $this->dateListStart;
    }

    /**
     * @param date $dateListStart
     * @return \App\Asic\document
     */
    public function setDateListStart($dateListStart)
    {
      $this->dateListStart = $dateListStart;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateListEnd()
    {
      return $this->dateListEnd;
    }

    /**
     * @param date $dateListEnd
     * @return \App\Asic\document
     */
    public function setDateListEnd($dateListEnd)
    {
      $this->dateListEnd = $dateListEnd;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxDocuments()
    {
      return $this->maxDocuments;
    }

    /**
     * @param int $maxDocuments
     * @return \App\Asic\document
     */
    public function setMaxDocuments($maxDocuments)
    {
      $this->maxDocuments = $maxDocuments;
      return $this;
    }

}
