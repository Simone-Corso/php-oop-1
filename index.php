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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
