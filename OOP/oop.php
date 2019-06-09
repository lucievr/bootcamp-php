<?php

require_once 'Address.php';
$here = new Address;
$here->street = 'Krakovská';
$here->house_nr = 9;
echo $here;

// Address.php

class Address
{
    public $street = null;
    public $house_nr = null;
    public function __toString()
    {
        return $this->street . ' ' . $this->house_nr;
    }
}

// VEHICLE

class Vehicle
{
    public $wheels_count = null;
    public $color = null;
    public $avg_speed = null;
    public function travel($distance)
    {
        if (!$this->avg_speed) { // prevent division by zero
            return false;
        }
        return $distance / $this->avg_speed;
    }
}

class Car extends Vehicle
{
    public $wheels_count = 4;
    public function change_color($color)
    {
        $this->color = $color;
    }
}

class Horse extends Vehicle
{
    public $wheels_count = 0;
    public $is_fed = false;
    public function feed()
    {
        $this->is_fed = true;
    }
}