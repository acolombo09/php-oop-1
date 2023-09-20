<?php
  class Movie {
    // Properties (chiamate così in php oop, sono le variabili)
    public $title;
    public $year;
    public $poster;
    public $genre;

    // Setto una costante
    const WELCOME_MESSAGE = "Benvenuto, fruttarolo!" ;

    // Setto la constructor function
    function __construct($title, $year) {
      $this->title = $title;
      $this->year = $year;
    }

    // Methods (chiamate così in php, sono le funzioni)
    // setting functions
    public function set_title($title) {
      $this->title = $title;
    }
    public function set_year($year) {
      $this->year = $year;
    }

    // getting functions
    public function get_title() {
      return $this->title;
    }
    public function get_year() {
      return $this->year;
    }
  }
  // creo nuove istanze nella classe Movie
  $apple = new Movie("Apple", "Red");
  $banana = new Movie("Banana", "Yellow");

  // testo le setting functions
  $apple->set_title('Apple');
  $banana->set_title('Banana');
  $apple->set_year('Red');

  // stampo la costante nella classe
  echo Movie::WELCOME_MESSAGE;

  // testo le getting functions con la stampa delle properties/variabili
  echo $apple->get_title();
  echo "<br>";
  echo $banana->get_title();

  echo "Title:" . $apple->get_title();
  echo "<br>";
  echo "Year:" . $apple->get_year();

?>

