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
    _poster: "https://m.media-amazon.com/images/M/MV5BNzQzOTk3OTAtNDQ0Zi00ZTVkLWI0MTEtMDllZjNkYzNjNTc4L2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg",
    _title: "The Matrix",
    _year: 1999,
    _genre: ["Action","Science Fiction"],
  ),
  new Movie(
    _poster: "https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_FMjpg_UX1000_.jpg",
    _title: "The Lord of the Rings: The Fellowship of the Ring",
    _year: 2001,
    _genre: ["Fantasy","Adventure"],
  ),
  new Movie(
    _poster: "https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzViMjE3YzI5MjljXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg",
    _title: "Pulp Fiction",
    _year: 1994,
    _genre: ["Crime","Action"],
  ),
  new Movie(
    _poster: "https://www.themoviedb.org/t/p/original/l9Rxe5Z1s2cN5KSD3puxiZaJxi5.jpg",
    _title: "Rocky",
    _year: 1976,
    _genre: ["Drama"],
  ),
  new Movie(
    _poster: "https://m.media-amazon.com/images/M/MV5BMTQ1ODM2MjY3OV5BMl5BanBnXkFtZTgwMTU2MjEyMDE@._V1_.jpg",
    _title: "The Shawshank Redemption",
    _year: 1994,
    _genre: ["Drama"],
  ),
  new Movie(
    _poster: "https://m.media-amazon.com/images/M/MV5BMTM0MjUzNjkwMl5BMl5BanBnXkFtZTcwNjY0OTk1Mw@@._V1_.jpg",
    _title: "Inception",
    _year: 2010,
    _genre: ["Science Fiction"],
  )
];

// $movies[0]->addGenre("Thriller");


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
        <div class="col d-flex flex-column justify-content-start mb-3 ms-3">
          <a href="#">
            <img src="./imgs/vuejs-logo.png" alt="" width="60" height="45">
          </a>
        </div>
        <div class="row row-cols-3 g-3">
          <!-- Foreach per stampare elements di movie nelle card -->
          <?php foreach($newMovies as $movie) { ?>
            <div class="col">
              <div class="card bg-secondary bg-opacity-25">
                <img src="<?php echo $movie->get_posterImage(); ?>" alt="Immagine" class="card-img-top mt-4" style="object-fit: contain; max-height: 510px;">
                <div class="card-body text-center">
                  <h5 class="card-title text-white"><?php echo $movie->get_title(); ?> </h5>
                  <h6 class="card-text text-light fw-light"><?php echo $movie->get_year(); ?> </h6>
                  <p class="card-text text-white"><?php echo implode(', ', $movie->get_genre()); ?></p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>