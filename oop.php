<?php

class Movie {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function rentMovie() { 
        if ($this -> availableCopies > 0) {
            $this -> availableCopies--;
            return true;
        } else {
            return false; 
        }
    }

    public function returnMovie() {
        $this->availableCopies++;
    }
}

 class Customer {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function rentMovie(Movie $movie) {
        if ($movie->rentMovie()) {
           return $this->name . " rented '" . $movie->getTitle();
        } else {
            return "Sorry, '" . $movie->getTitle() . "' is not available for rent.";
        }
    }

    public function returnMovie(Movie $movie) {
        $movie->returnMovie();
        return $this->name . " returned '" . $movie->getTitle() ;
    }
}

$movie1 = new Movie("Inception", 4);
$movie2 = new Movie("Interstellar", 2);

$customer1 = new Customer("Alice");
$customer2 = new Customer("Bob");

$customer1->rentMovie($movie1); 
$customer2->rentMovie($movie2); 

echo "Available Copies of '" . $movie1->getTitle() . "': " . $movie1->getAvailableCopies().  "<br>";
echo "Available Copies of '" . $movie2->getTitle() . "': " . $movie2->getAvailableCopies();







?>
