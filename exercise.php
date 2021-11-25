<?php

//  Base class that will be inherited at least once.
//  This base case must have at least:
//  3 properties
//  3 methods
//  1 constructor and 1 destructor

class Building
{
    public $size;
    public $owner;
    public $address;
    public $floors;

    public function __construct($size, $owner, $address)
    {
        $this->size = $size;
        $this->owner = $owner;
        $this->address = $address;
    }

    public function __destruct()
    {
        echo "DESTROYED" . $this->size . $this->owner . $this->address;
    }

    public function getSize()
    {
        return $this->size;
    }
    public function getOwner()
    {
        return $this->owner;
    }
    public function getAddress()
    {
        return $this->address;
    }

    public function printOwner()
    {
        echo "The owner of the building is a $this->owner";
    }
}

$buildingTest = new Building("35m2", "company", "C/Real,12");
var_dump($buildingTest);
echo "</br></br>";


// One class that inherits the base class.
// This class must add:
// 1 static property
// 1 method
// This class must override:
// 1 property
// 1 method


class House extends Building
{
    public static $detached;

    public $floors = 2;

    public static function greeting()
    {
        echo "Welcome to the house";
    }


    public function printOwner()
    {
        echo "The owner of this house is a $this->owner";
    }
}

$houseTest = new House("52m2", "person", "C/Calle,21");

echo "</br></br>";
var_dump($houseTest);




// One abstract class with at least:
// 2 properties
// 2 methods
abstract class PublicBuilding extends Building
{
    public $owner = "public";
    public $department;
    public $manager;

    public function getDepartment()
    {
        return $this->department;
    }

    public function getManager()
    {
        return $this->manager;
    }
}


// One interface that must be implemented by one class.
// This interface must have at least 2 methods.

interface BuildingApp
{
    public static function showMap();
    public static function showThumbnail();
}

class HotelApp implements BuildingApp
{
    const APPNAME = "HOTEL TOOLS";

    public static $thumbnail;
    public static $map;

    public static function showMap()
    {
        echo "You can take a look at this map " . self::$map . " thanks to our " . self::APPNAME;
    }
    public static function showThumbnail()
    {
        echo "This is our hotel " . self::$thumbnail;
    }
}

echo "</br></br>";
$hotelApp = new HotelApp();
$hotelApp->showMap();
echo "</br>";
$hotelApp->showThumbnail();
echo "</br></br>";
