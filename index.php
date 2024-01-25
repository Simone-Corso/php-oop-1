<?php

/**
 * ho incluso la parte del movie php
 */

 include_once __DIR__ . '/models/movie.php';

/**
 * creiamo un istanza del movie
 */

 $movie = new Movie("Fast and Furious", ["Azione", "Giallo"], 2001, "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRIfclk0cjsddvp1d2hSsOc6j4Oge8zyJq8zvGhG1ErFeRe_6dm");

 $movie = new Movie("2 Fast 2 Furious", ["Azione", "Giallo"], 2003, "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQSudidhR3TCIzRUMURMV-cOjOYzNH7oTrlVJAUs-goIdhgxKKD");

 /**
  * adesso provo a stampare i film che ho inserito sopra
  */

  echo "movie:";
  $movie->movieInfo();
  

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>
  <h1>film</h1>
</header>

<main>
  <div class="container">
    <div class="row">
      <div class="col-4">
    <div class="card" style="width: ">
  <img src="<?php echo $movie->image; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $movie->title; ?></h5>
        <p class="card-text"><?php echo implode(' , ' , $movie->genre);?></p>
        <p class="card-text"><?php echo $movie->realesyear;?></p>
      </div>
      </div>
    </div>
  </div>

</div>
</main>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
