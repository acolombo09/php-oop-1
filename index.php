<!-- 
nome repo: php-oop-1

Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza 
che abbiamo visto stamattina e create un file index.php in cui:
  - importiamo una classe ‘Movie’
    => all’interno della classe sono dichiarate delle variabili d’istanza
    => all’interno della classe è definito un costruttore
    => all’interno della classe è definito almeno un metodo
  - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori 
  delle relative proprietà

Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.

Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file 
e cartelle. Possiamo ad esempio organizzare il codice:
- creando un file dedicato ai dati (tipo le array di oggetti) 
  che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi
  in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file 
  e parziali dedicati.
-->

<?php
require_once __DIR__ . "/models/Movie.php";

  // creo nuove istanze nella classe Movie
$newMovies = [
  new Movie(
    "https://m.media-amazon.com/images/I/51AP5MY2B5ç._AC_UF894,1000_QL80_.jpg",
    "The Matrix",
    1999,
    ["Action","Science Fiction"],
  ),
  new Movie(
    "https://m.media-amazon.com/images/I/51AP5MY2B5ç._AC_UF894,1000_QL80_.jpg",
    "The Lord of the Rings: The Fellowship of the Ring",
    2001,
    ["Fantasy","Adventure"],
  ),
  new Movie(
    "https://m.media-amazon.com/images/I/51AP5MY2B5ç._AC_UF894,1000_QL80_.jpg",
    "Pulp Fiction",
    1994,
    ["Crime","Action"],
  ),
];

$movies[0]->addGenre("Thriller");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- THIRD PARTY LIBRARIES -->
  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- FONTAWESOME CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- My css link -->
  <link rel="stylesheet" href="./style.css">
  <title>PHP | OOP-1</title>
</head>
<body>
  <div class="container-fluid py-4 bg-dark bg-opacity-90 shadow-lg">
    <div class="row justify-content-center">
      <div class="col-12 d-flex flex-column mx-auto">
        <div class="col d-flex flex-column justify-content-start mb-2 ms-3">
          <a href="#">
            <img src="./imgs/vuejs-logo.png" alt="" width="60" height="45">
          </a>
        </div>
        <div class="row row-cols-3 bg-success bg-opacity-50 g-5 mt-3 pb-5">
          
          <div class="col d-flex flex-column justify-content-center align-items-center text-center">
            <div class="card bg-dark bg-opacity-25" style="height: 420px; width: 351px;">
              <div class="card-img-top py-4 d-flex flex-column justify-content-center align-items-center">
                <img :src="post.poster" alt="-" style="width: 250px; height: 250px;">
              </div>
              <div class="card-body">
                <h5 class="card-title text-white">{{ movie.title }}</h5>
                <h6 class="card-text text-light fw-light">{{ movie.year }}</h6>
                <h5 class="card-text text-white"><small>{{ movie.genre }}</small></h5>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
</body>
</html>