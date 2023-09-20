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
    public function fetchSpecie() {
      return $this->specie;
    }

    public function fetchIcona() {
      return $this->icona;
    }
  }
?>