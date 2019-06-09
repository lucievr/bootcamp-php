<?php

// protected
class Father
{
    protected $car = 'in the garage';
    // from the class that defines it
    public function driveCar()
    {
        $this->car = 'on the road';
    }
}
 
class Son extends Father
{
    // from a class that extends Father
    public function borrowCar($father)
    {
        $father->car = 'crashed';
    }
}
 
// from the outside (global scope, global function, completely different class ...)
$father = new Father();
$father->car = 'stolen'; // ERROR, protected

// private
class Father
{
    private $pin_number = 1234;
    // from the class that defines it
    public function useCreditCard()
    {
        echo 'Using card with PIN ' . $this->pin_number;
    }
}
 
class Son extends Father
{
    // from a class that extends Father
    public function useFathersCreditCard($father)
    {
        echo 'Using card with PIN ' . $father->pin_number; // ERROR, private
    }
}
 
// from the outside (global scope, global function, completely different class ...)
$father = new Father();
$father->pin = 5678; // ERROR, private

// If a protected or private property / method shoud be usable also from the outside of its default visibility, 
// we must define a public accessor method

class Father
{
    private $pin_number = 1234;
 
    public function getPinNumber()
    {
        return $this->pin_number; // accessible, defined in the same class as $pin_number
    }

    public function setPinNumber($pin_number)
    {
        $this->pin_number = $pin_number;
    }
}
 
// from anywhere (extending class, global scope, global function, completely different class ...)
$father = new Father();
echo 'Using card with PIN ' . $father->getPinNumber(); // OK, getPinNumber is public