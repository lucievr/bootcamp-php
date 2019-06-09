<?php

class Dog
{
    protected $name = null;
    public $breed = null;
    public $color = null;
    public $position = 'lying down';
 
    public function __construct($name) 
    {
        // a dog is born
        $this->cut_the_umbilical_cord();
        $this->name = $name;
    }

    public function bark()
    {
        echo 'WOOF!';
    }
 
    public function sit()
    {
        $this->position = 'sitting';
    }

    public function __destruct() 
    {
        // a dog is destroyed
        prepare_the_funeral();
    }
}

$my_dog = new Dog('Ben');
$my_dog->breed = 'beagle';
$my_dog->color = 'brown & white';
echo "My dog's color is " . $my_dog->color;

$my_dog->bark();
$my_dog->sit();


class User
{
    public $id = null;
    public $username = null;
    public $name = null;
    public $password = null;
    public $number_of_posts = 0;
    public $created_at = null;
    public function __construct($asdfghjkl)
    {
        global $total_users;
        $total_users++;
        $this->username = $asdfghjkl;
        $this->created_at = date('Y-m-d H:i:s');
    }
    public function __destruct()
    {
        global $total_users;
        $total_users--;
    }
    public function dumpMe()
    {
        var_dump( $this );
    }
}

// Inheritance.php
require_once 'Match.php';
require_once 'FootballMatch.php';
require_once 'IcehockeyMatch.php';
$afternoon_game = new FootballMatch('2019-05-31 17:00:00');
var_dump($afternoon_game);
$evening_game = new IcehockeyMatch('2019-05-31 19:30:00');
var_dump($evening_game);

// Match.php
class Match
{
    public $begins_at = null; // YYYY-MM-DD HH:mm:ss
    public $score = null;
    public $nr_of_players = null;
    public $length = null; // in minutes
    public function __construct($begins_at)
    {
        $this->begins_at = $begins_at;
    }
    public function getEstimatedEnd()
    {
        $begins_at_timestamp = strtotime($this->begins_at);
        $ends_at_timestamp = $begins_at_timestamp + $this->length * 60;
        return date('Y-m-d H:i:s', $ends_at_timestamp);
    }
}

// FootballMatch.php
class FootballMatch extends Match
{
    public $nr_of_players = 22;
    public $length = 90;
    public $halves = ['0:0', '0:0'];
    public $nr_offsides = 0;
}

//IcehockeyMatch.php
class IcehockeyMatch extends Match
{
    public $nr_of_players = 12;
    public $length = 60;
    public $thirds = ['0:0', '0:0', '0:0'];
    public function getThirdScore($nr)
    {
        return $thirds[$nr-1];
    }
}
