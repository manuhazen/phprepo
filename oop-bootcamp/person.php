<?php

class Person {
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        if ($age < 18) {
            throw new Exception('Hey, you can join to this amazing platform.');
        } elseif ($age > 18) {
            $this->age = $age;
        }
    }
}

$lucas = new Person('Lucas Diaz', '15/6/2000');
$lucas->setAge(30);
$lucas->getAge();
var_dump($lucas);