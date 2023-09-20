<?php
  class Movie {
    // Properties (chiamate così in php oop, sono le variabili)
    public $poster;
    public $title;
    public $year;
    public $genre;

    // Setto una costante
    const WELCOME_MESSAGE = "Benvenuto, pantofolaio!" ;

    // Setto la constructor function
    function __construct($poster, $title, $year, $genre) {
      $this->poster = $poster;
      $this->title = $title;
      $this->year = $year;
      $this->genre = $genre;
    }

    // Methods (chiamate così in php, sono le funzioni)

    // getting functions
    public function get_posterImage() {
      return $this->poster;
    }
    public function get_title() {
      return $this->title;
    }
    public function get_year() {
      return $this->year;
    }
    public function get_genre() {
      return $this->genre;
    }
  }

  // stampo una costante nella classe
  echo Movie::WELCOME_MESSAGE;



  // // testo le setting functions
  // $apple->set_title('Apple');
  // $banana->set_title('Banana');
  // $apple->set_year('Red');

  // // testo le getting functions con la stampa delle properties/variabili
  // echo $apple->get_title();
  // echo "<br>";
  // echo $banana->get_title();

  // echo "Title:" . $apple->get_title();
  // echo "<br>";
  // echo "Year:" . $apple->get_year();

?>

