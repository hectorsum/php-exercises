<?php 
  class Car{
    public $doors = 4;
    public $color = "Black";
    public function __construct($name,$company,$doors,$color,$price){
      $this->name = $name;
      $this->company = $company;
      $this->doors = $doors;
      $this->color = $color;
      $this->price = $price;
    }
    public function statement(){
      echo "{$this->company} {$this->name} has {$this->doors} and the color is {$this->color}";
    }
    //* Cannot use it in another class unless its included in another public class
    protected function store(){
      echo "Sold at Northern Blvd Dealership";
      $this->introduce();
    }
    //* It only should be use inside its own class unless if its used in another slibing method either Public or Protected 
    private function introduce(){
      echo "This is a {$this->name} car";
    }
  }