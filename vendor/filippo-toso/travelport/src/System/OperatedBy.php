<?php

namespace FilippoToso\Travelport\System;

class OperatedBy
{

    /**
     * @var typeNonBlanks $_
     */
    protected $_ = null;

    /**
     * @param typeNonBlanks $_
     */
    public function __construct($_ = null)
    {
      $this->_ = $_;
    }

    /**
     * @return typeNonBlanks
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeNonBlanks $_
     * @return \FilippoToso\Travelport\System\OperatedBy
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
