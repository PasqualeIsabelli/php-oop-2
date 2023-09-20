<?php
  require_once __DIR__ . '/prodotto.php';

  class Kennel extends Product {
    // Variables
    protected $marca;
    protected $prezzo;
    protected $descrizione;
    protected $immagine;
    protected $dimensione;
    protected $materiale;
    protected $categoria;

    // Construct
    function __construct(string $_marca, string $_prezzo, string $_descrizione, string $_immagine, string $_dimensione, string $_materiale, string $_categoria) {
      $this->marca = $_marca;
      $this->prezzo = $_prezzo;
      $this->descrizione = $_descrizione;
      $this->immagine = $_immagine;
      $this->dimensione = $_dimensione;
      $this->materiale = $_materiale;
      $this->categoria = $_categoria;
    }

    // Methods
    public function fetchMarca() {
      return $this->marca;
    }

    public function fetchPrezzo() {
      return $this->prezzo;
    }

    public function fetchDescrizione() {
      return $this->descrizione;
    }

    public function fetchImmagine() {
      return $this->immagine;
    }

    public function fetchDimensione() {
      return $this->dimensione;
    }

    public function fetchMateriale() {
      return $this->materiale;
    }

    public function fetchCategoria() {
      return $this->categoria;
    }
  }

?>