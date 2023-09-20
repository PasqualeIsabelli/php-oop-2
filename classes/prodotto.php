<?php

  class Product {
    // Variables
    protected $nome;
    protected $descrizione;
    protected $immagine;


    // Construct
    function __construct(string $_nome, string $_descrizione, string $_immagine) {
      $this->nome = $_nome;
      $this->descrizione = $_descrizione;
      $this->immagine = $_immagine;
    }

    // Methods
    public function fetchNome() {
      return $this->nome;
    }

    public function fetchDescrizione() {
      return $this->descrizione;
    }

    public function fetchImmagine() {
      return $this->immagine;
    }
  }

?>