<?php

  class Car{
    public $doors = 4;
    
    public function __construct($name,$doors,$color){
      $this-> name = $name;
      $this-> doors = $doors;
      $this-> color = $color;
    }
    public function printName(){
      echo $this->name;
    }
    public function statement(){
      echo "This car is a {$this->name} and it has {$this->doors} and it's {$this->color}";
    }
  }

  $honda = new Car('Honda',2,'Green');
  $bmw = new Car('BMW',2,'Purple');
  $toyota = new Car('Toyota',4,'White');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Classes</title>
</head>
<body>
  <h1><?=$honda->statement()?></h1>
  <h1><?=$bmw->statement()?></h1>
  <h1><?=$toyota->statement()?></h1>
</body>
</html>