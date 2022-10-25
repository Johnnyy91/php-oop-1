<?php 

class Movie {
    public $title;
    public $director;
    public $principal_actor;
    public $year;


    function __construct($title,$director,$principal_actor,$year){
        $this-> title = $title;
        $this-> director = $director;
        $this-> principal_actor = $principal_actor;
        $this-> year = $year;
    }

    function print(){
        echo '<h2>'. $this->title . '</h2>';
        echo '<h3>'. $this->director . '</h3>';
        echo '<h4>'. $this->principal_actor . '</h4>';
        echo '<h5>'. $this->year . '</h5>';
    }
}

$film = new Movie('Interstellar','Christopher Nolan','Leo','2014');
$film2 = new Movie('Pulp Fiction','Tarantino','John Travolta','1990');
$film3 = new Movie('Batman Begins','Christopher Nolan','Christian Bale','2004');

$film->print();
$film2->print();
$film3->print();

?>