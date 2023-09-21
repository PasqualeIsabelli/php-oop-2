<?php
  trait Razza {
    protected $razza;

    /**
     * Get the value of razza
     */ 
    public function getRazza()
    {
        return $this->razza;
    }

    /**
     * Set the value of razza
     *
     * @return  self
     */ 
    public function setRazza($razza)
    {
        $this->razza = $razza;

        return $this;
    }
  }
?>