<?php
  require_once __DIR__ . '/prodotto.php';

  class Game extends Product {
    // Variables
    protected $marca;
    protected $prezzo;
    protected $descrizione;
    protected $immagine;
    protected $materiale;
    protected $colore;

    // Construct
    function __construct(string $_marca, string $_prezzo, string $_descrizione, string $_immagine, string $_materiale, string $_colore) {
      $this->marca = $_marca;
      $this->prezzo = $_prezzo;
      $this->descrizione = $_descrizione;
      $this->immagine = $_immagine;
      $this->materiale = $_materiale;
      $this->colore = $_colore;
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

    public function fetchMateriale() {
      return $this->materiale;
    }

    public function fetchColore() {
      return $this->colore;
    }
  }

?>