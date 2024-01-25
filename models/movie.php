
<?php
/**
* andrò a creare una classe di movie
*/

class movie{
    public $title;
    public $genre;
    public $RealesYear;
}

/**
 * qui inserirò il costruttore
 */

 public function __construct($title, $genre, $RealesYear) {
        $this->title = $title;
        $this->genre = $genre;
        $this->realesyear = $RealesYear;
 }