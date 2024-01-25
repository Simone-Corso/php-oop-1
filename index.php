<?php

/**
 * ho incluso la parte del movie php
 */

 include_once __DIR__ . '/models/movie.php';

/**
 * creiamo un istanza del movie
 */

 $movieFirst = new Movie("Fast and Furious", ["Azione", "Giallo"], 2001);

 $movieTwo = new Movie("2 Fast 2 Furious", ["Azione", "Giallo"], 2003);

 /**
  * adesso provo a stampare i film che ho inserito sopra
  */

  echo "movieFirst:";
  $movieFirst->movieInfo();

  echo "movieTwo:";
  $movieTwo->movieInfo();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
