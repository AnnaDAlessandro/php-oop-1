<?php
class Movie
{
    public $title;
    public $genre;
    public $releaseYear;
    public $cast;

    function __construct($_title, $_genre, $_releaseYear)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->releaseYear = $_releaseYear;
    }

    public function setCast($nomeCast) {
        $this->cast = $nomeCast;
    }

    public function getCast() {
        return $this->cast;
    }

    public function displayMovieInfo() {
        echo "<h2>{$this->title}</h2>";
        echo "<p>Genre: {$this->genre}</p>";
        echo "<p>Release Year: {$this->releaseYear}</p>";
        echo "<p>Cast: {$this->getCast()}</p>";
        echo "------------------------<br>";
    }

}
$movie1 = new Movie("Inception", "Sci-Fi", 2010);
$movie1->setCast("Leonardo DiCaprio, Joseph Gordon-Levitt");

$movie2 = new Movie("The Dark Knight", "Action", 2008);
$movie2->setCast("Christian Bale, Heath Ledger");

$movie3 = new Movie("The Shawshank Redemption", "Drama", 1994);
$movie3->setCast("Tim Robbins, Morgan Freeman");

$movie4 = new Movie("Pulp Fiction", "Crime", 1994);
$movie4->setCast("John Travolta, Uma Thurman, Samuel L. Jackson");

$movie1->displayMovieInfo();
$movie2->displayMovieInfo();
$movie3->displayMovieInfo();
$movie4->displayMovieInfo();


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    
</body>
</html>