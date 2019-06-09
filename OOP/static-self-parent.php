<?php

// To access static properties and methods use the double colon operator: :: (Paamayim Nekudotayim)

// from anywhere using the name of the class (if the property / method is public) class_name::$property, class_name::method()
// from anywhere using an object of the class (if the property / method is public) $object::$property, $object::method()
// from inside the class' methods static::$property, static::method(), self::$property, self::method()

class Dog
{
    public $color = 'unspecified';
 
    public function __construct()
    {
        static::$nr_of_dogs++;
    }
 
    public function bark()
    {
        echo "WOOF!";
    }
 
    public static $nr_of_dogs = 0; // static property - global counter of dogs
 
    public static function getNrOfDogs()
    {
        return static::$nr_of_dogs;
    }

    public static function getColorWithSelf()
    {
        return self::$color;
    }
 
    public static function getColorWithStatic()
    {
        return static::$color;
    }
}
 
$my_dog = new Dog(); // dog::$nr_of_dogs increased by 1
 
// (because they're public I can access the static property and method from anywhere)
echo Dog::$nr_of_dogs; // static property
echo Dog::getNrOfDogs(); // static method
echo $my_dog::$nr_of_dogs; // property using the object
echo $my_dog::getNrOfDogs(); // method using the object

// static vs. self
class Retriever extends Dog
{
    public static $color = 'golden';
}
 
echo Retriever::getColorWithSelf(); // 'unspecified'
echo Retriever::getColorWithStatic(); // 'golden'

// parent

class A
{
    public function foo()
    {
        echo 'Boo!';
    }
}

class B extends A
{
    public function foo()
    {
        parent::foo(); // prints 'Boo!'
    }
}