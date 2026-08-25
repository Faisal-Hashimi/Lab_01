<?php

// Part A Simple Class and Object

class Person
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function introduce()
    {
        echo "My name is " . $this->name . "<br>";
    }
}


// Part B - Student Class with Constructor

class Student extends Person
{
    public $studentId;
    public $department;

    function __construct($name, $studentId = null, $department = null)
    {
        parent::__construct($name);

        $this->studentId = $studentId;
        $this->department = $department;
    }

    // Part A
    function sayHello()
    {
        echo "Hello! I am a student.<br>";
    }

    // Part B
    function showInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Department: " . $this->department . "<br>";
    }

    // Part E
    function study()
    {
        echo $this->name . " is studying.<br>";
    }
}



// Part A - Create Object

$student1 = new Student(
    "Ahmad",
    1001,
    "Computer Science"
);

$student1->sayHello();

echo "<br>";


// Part B - Show Student Information

$student1->showInfo();

echo "<br>";


// Part C - Create Another Object

$student2 = new Student(
    "Sara",
    1002,
    "Information Systems"
);

$student2->showInfo();

echo "<hr>";


// Part D - Access Modifiers

class BankAccount
{
    public $ownerName;
    private $balance;

    function __construct($ownerName, $balance)
    {
        $this->ownerName = $ownerName;
        $this->balance = $balance;
    }

    function showBalance()
    {
        echo "Balance: " . $this->balance . "<br>";
    }
}


$account1 = new BankAccount(
    "Ahmad",
    5000
);

echo "Owner: " . $account1->ownerName . "<br>";

$account1->showBalance();

echo "<hr>";


// Part E - Simple Inheritance

$student3 = new Student("Ahmad");

$student3->introduce();
$student3->study();

echo "<hr>";


// Part G - Vehicle and Car

class Vehicle
{
    protected $brand;

    function __construct($brand)
    {
        $this->brand = $brand;
    }

    function start()
    {
        echo "The vehicle is starting.<br>";
    }
}


class Car extends Vehicle
{
    function showBrand()
    {
        echo "Car brand: " . $this->brand . "<br>";
    }
}


$car1 = new Car("Toyota");

$car1->start();
$car1->showBrand();

?>