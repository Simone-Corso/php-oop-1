<?php

/**
 * ho incluso la parte del movie php
 */

 include_once __DIR__ . '/models/movie.php';

/**
 * creiamo un istanza del movie
 */
$movies = [
  new Movie("Fast and Furious", ["Azione", "Giallo"], 2001, "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRIfclk0cjsddvp1d2hSsOc6j4Oge8zyJq8zvGhG1ErFeRe_6dm"),
  new Movie("2 Fast 2 Furious", ["Azione", "Giallo"], 2003, "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQSudidhR3TCIzRUMURMV-cOjOYzNH7oTrlVJAUs-goIdhgxKKD"),
  new Movie("The Fast and the Furious: Tokyo Drift", ["Azione", "Giallo"], 2006, "https://upload.wikimedia.org/wikipedia/it/1/13/Tokyodrift.jpg"),
  new Movie("Fast & Furious - Solo parti originali", ["Azione", "Giallo"], 2009, "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRSP6nwdHJ_hJsGO3JMzcRm72ecLcZQfxJhTGg5GQtMhxbe5cUC"),
  new Movie("Fast & Furious 5", ["Azione", "Giallo"], 2011, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRemj9FGeCKaPC0m-btpaE5HHcg2QhoY5a2_X4xIG8IIgHbc-Jo"),
  new Movie("Fast & Furious 6", ["Azione", "Giallo"], 2013, "https://musicart.xboxlive.com/7/b8b61100-0000-0000-0000-000000000002/504/image.jpg?w=1920&h=1080"),
];
 /**
  * adesso provo a stampare i film che ho inserito sopra
  */

  
foreach ($movies as $movie) {
}
  

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<header>
<nav class="navbar h-50">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">StreamingMovie</a>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn" type="submit">Search</button>
      </form>

  </nav>
    
</header>

<main>
    <div class="container mt-5">
        <div class="row d-flex">
            <?php foreach ($movies as $movie) { ?>
                <div class="col-4 p-3">
                    <div class="card h-100 " style=" ">
                        <img src="<?php echo $movie->image; ?>" class="card-img" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $movie->title; ?></h5>
                            <p class="card-text"> <?php echo implode(', ', $movie->genre); ?></p>
                            <p class="card-text"> <?php echo $movie->realesyear; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
