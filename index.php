<?php
require_once __DIR__ . '/db/db.php';


$category = new Category("cane", "fa-solid fa-dog");
$category = new Category("gatto", "fa-solid fa-cat");


$project_title = 'PHP OOP 2';
?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $project_title ?></title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
</head>

<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid d-flex justify-content-between">
      <div class="nav-left">
        <a class="navbar-brand fw-bold fs-1" href="#"><?php echo $project_title ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="nav-right">
        <div class="navbar-nav gap-3">
          <a class="nav-link" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Cane</a>
          <a class="nav-link" href="#">Gatto</a>
          <a class="nav-link" href="#">Altri animali</a>
          <a class="nav-link" href="#">Community</a>
        </div>
      </div>
    </div>
  </nav>

  <main>
    <div class="container">
      <h2 class="fw-bold mt-5">Cibo</h2>
      <div class="d-flex flex-wrap gap-5">
        <?php 
        foreach ($foods as $food) { ?>
          <div class="card border rounded-0 mt-5 width">
            <img src="<?php echo ($food->fetchImmagine()) ?>" class="card-img-top h-100">
            <div class="fs-1 icon"><i class="<?php echo ($food->fetchCategoria() === 'cane' ? 'fa-solid fa-dog' : 'fa-solid fa-cat') ?>" style="color: #000000;"></i></div>
            <div class="card-body">
              <h5 class="card-title text-center"><span class="fw-bold">Descrizione:</span> <?php echo ($food->fetchDescrizione()) ?></h5>
              <p class="card-text text-center"><span class="fw-bold">Marca:</span> <?php echo ($food->fetchMarca()) ?></p>
              <p class="card-text text-center"><span class="fw-bold">Prezzo: €</span> <?php echo ($food->fetchPrezzo()) ?></p>
              <p class="card-text text-center"><span class="fw-bold">Peso:</span> <?php echo ($food->fetchPeso()) ?></p>
              <p class="card-text text-center"><span class="fw-bold">Ingredienti:</span> <?php echo ($food->fetchIngredienti()) ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

    <div class="container">
      <h2 class="fw-bold mt-5">Giochi</h2>
      <div class="d-flex flex-wrap gap-5">
        <?php 
        foreach ($games as $game) { ?>
          <div class="card border rounded-0 mt-5 width">
            <img src="<?php echo ($game->fetchImmagine()) ?>" class="card-img-top h-100">
            <div class="fs-1 icon"><i class="<?php echo ($game->fetchCategoria() === 'cane' ? 'fa-solid fa-dog' : 'fa-solid fa-cat') ?>" style="color: #000000;"></i></div>
            <div class="card-body">
              <h5 class="card-title text-center"><span class="fw-bold">Descrizione:</span> <?php echo ($game->fetchDescrizione()) ?></h5>
              <p class="card-text text-center"><span class="fw-bold">Marca:</span> <?php echo ($game->fetchMarca()) ?></p>
              <p class="card-text text-center"><span class="fw-bold">Prezzo: €</span> <?php echo ($game->fetchPrezzo()) ?></p>
              <p class="card-text text-center"><span class="fw-bold">Materiale:</span> <?php echo ($game->fetchMateriale()) ?></p>
              <p class="card-text text-center"><span class="fw-bold">Colore:</span> <?php echo ($game->fetchColore()) ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

    <div class="container">
      <h2 class="fw-bold mt-5">Cibo</h2>
      <div class="d-flex flex-wrap gap-5">
        <?php 
        foreach ($kennels as $kennel) { ?>
          <div class="card border rounded-0 mt-5 width">
            <img src="<?php echo ($kennel->fetchImmagine()) ?>" class="card-img-top h-100">
            <div class="fs-1 icon"><i class="<?php echo ($kennel->fetchCategoria() === 'cane' ? 'fa-solid fa-dog' : 'fa-solid fa-cat') ?>" style="color: #000000;"></i></div>
            <div class="card-body">
              <h5 class="card-title text-center"><span class="fw-bold">Descrizione:</span> <?php echo ($kennel->fetchDescrizione()) ?></h5>
              <p class="card-text text-center"><span class="fw-bold">Marca:</span> <?php echo ($kennel->fetchMarca()) ?></p>
              <p class="card-text text-center"><span class="fw-bold">Prezzo: €</span> <?php echo ($kennel->fetchPrezzo()) ?></p>
              <p class="card-text text-center"><span class="fw-bold">Dimensioni:</span> <?php echo ($kennel->fetchDimensione()) ?></p>
              <p class="card-text text-center"><span class="fw-bold">MAteriali:</span> <?php echo ($kennel->fetchMateriale()) ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </main>

</body>

</html>