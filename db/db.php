<?php
  require_once __DIR__ . '/../classes/prodotto.php';
  require_once __DIR__ . '/../classes/categoria.php';
  require_once __DIR__ . '/../classes/cibo.php';
  require_once __DIR__ . '/../classes/gioco.php';
  require_once __DIR__ . '/../classes/cuccia.php';
  require_once __DIR__ . '/../classes/cane.php';
  require_once __DIR__ . '/../classes/gatto.php';



  $foods = [
    new Food("Nature's", "20,00", "Crocchette per cani", "./img/crocchette cani.webp", "2 kg", "pollo", "cane"),
    new Food("Nature's", "3,00", "Cibo umido per cani", "./img/cibo umido cani.webp", "140 ml", "tonno e salmone", "cane"),
    new Food("Vet Line", "3,30", "Snack per cani", "./img/snack cani.webp", "80 gr", "cervo", "cane"),
    new Food("Life Cat", "15.00", "Crocchette per gatti", "./img/crocchette gatti.webp", "1,5 kg", "tonno e gamberetti", "gatto"),
    new Food("Life Cat", "6,50", "Cibo umido per gatti", "./img/cibo umido per gatti.webp", "6 X 85 gr", "ingredienti", "gatto"),
    new Food("Alleva equilibrium", "22,00", "Crocchette per gatti", "./img/crocchette per gatti 2.webp", "1,5 kg", "pollo", "gatto"),
  ];

  $games = [
    new Game("Kong", "12,99", "Ruota Traxx da masticare", "./img/kong ruota.jpg", "gomma", "nero", "cane"),
    new Game("Musqui", "1,59", "Pallina da tennis", "./img/pallina da tennis.jpg", "gomma", "giallo", "cane"),
    new Game("Ferplast", "9,99", "Chicken", "./img/chicken.jpg", "gomma", "multicolore", "cane"),
    new Game("Kong", "4,99", "Palla moppy", "./img/kong pallina.jpg", "stoffa", "azzurro", "gatto"),
    new Game("Trixie", "15,00", "Peluche topo", "./img/peluche topo.jpg", "stoffa", "grigio", "gatto"),
    new Game("Trixie", "2,99", "Dado", "./img/dado.jpg", "gomma", "multicolore", "gatto"),  
  ];

  $kennels = [
    new Kennel("Habitat", "99,99", "Cuccia per cane legno", "./img/cuccia cane.webp", "60W X 41L X 56H", "legno", "cane"),
    new Kennel("Mimì", "36,99", "Cuccia per gatto igloo", "./img/cuccia per gatti.webp", "35W X 35L X 43H", "stoffa", "gatto"), 
  ];

  
?>