<?php
  require_once __DIR__ . '/categoria.php';

  class Cat extends Category {
     // Variables
    protected $nome;
    protected $razza;
    protected $colore;
    protected $taglia;

    // Construct
    function __construct(string $_nome, string $_razza, string $_colore, string $_taglia) {
      $this->nome = $_nome;
      $this->razza = $_razza;
      $this->colore = $_colore;
      $this->taglia = $_taglia;
    }

    // Methods
    public function fetchNome() {
      return $this->nome;
    }

    public function fetchRazza() {
      return $this->razza;
    }

    public function fetchColore() {
      return $this->colore;
    }

    public function fetchTaglia() {
      return $this->taglia;
    }
  }

?>