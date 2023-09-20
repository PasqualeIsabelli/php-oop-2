<?php
  require_once __DIR__ . '/prodotto.php';

  class Food extends Product {
    // Variables
    protected $marca;
    protected $prezzo;
    protected $descrizione;
    protected $immagine;
    protected $peso;
    protected $ingredienti;
    protected $categoria;

    // Construct
    function __construct(string $_marca, string $_prezzo, string $_descrizione, string $_immagine, string $_peso, string $_ingredienti, string $_categoria) {
      $this->marca = $_marca;
      $this->prezzo = $_prezzo;
      $this->descrizione = $_descrizione;
      $this->immagine = $_immagine;
      $this->peso = $_peso;
      $this->ingredienti = $_ingredienti;
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

    public function fetchPeso() {
      return $this->peso;
    }

    public function fetchIngredienti() {
      return $this->ingredienti;
    }

    public function fetchCategoria() {
      return $this->categoria;
    }
  }

?>