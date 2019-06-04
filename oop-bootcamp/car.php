<?php 

class Car {

    protected $model;

    public function __construct($model) 
    {
        $this->model = $model;
    }
}

class Dealer {

    protected $mechanic;

    public function __construct(Mechanic $mechanic) 
    {
        $this->mechanic = $mechanic;
    }

    public function sell(Car $car) 
    {   
        $this->mechanic->fix($car);
    }
}

class Mechanic {

    protected $lot = [];

    public function fix(Car $car)
    {
        $this->lot[] = $car;
    }
}

$modelE = new Car('Tesla Model E');

$mechanic = new Mechanic;

$dealer = new Dealer($mechanic);

$dealer->sell($modelE);

var_dump($mechanic);