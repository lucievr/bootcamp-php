<?php
require_once 'fellowship.php';
require_once 'functions.php';
include 'journey.php';
if (is_array(current($party))) { // is the first item of $party an array?
    // we have a multidimensional array
    
    foreach ($party as $one_party) {
        present_party($one_party);
    }
} else {
    // we have an array with a single dimension
    present_party($party);
}