<?php 
  include('Car.php'); 
  class Honda extends Car{
    public function __construct($name,$company,$doors,$color,$price){
      $this->name = $name;
      $this->company = $company;
      $this->doors = $doors;
      $this->color = $color;
      $this->price = $price;
    }
    public function price(){
      echo "The price of this {$this->company} {$this->name} is {$this->price}";
    }
    public function changePrice($price){
      $this->price = $price;
      echo "Changing price to {$price}";
      $this->store();
    }
    
  }