<?php
  class Category {
    // Variables
    protected $specie;
    protected $icona;

    // Construct
    function __construct(string $_specie, string $_icona) {
      $this->specie = $_specie;
      $this->icona = $_icona;      
    }

    // Methods
    /**
     * Get the value of specie
     */ 
    public function getSpecie()
    {
        return $this->specie;
    }

    /**
     * Set the value of specie
     *
     * @return  self
     */ 
    public function setSpecie($specie)
    {
        $this->specie = $specie;

        return $this;
    }

    /**
     * Get the value of icona
     */ 
    public function getIcona()
    {
        return $this->icona;
    }

    /**
     * Set the value of icona
     *
     * @return  self
     */ 
    public function setIcona($icona)
    {
        $this->icona = $icona;

        return $this;
    }
  }
?>