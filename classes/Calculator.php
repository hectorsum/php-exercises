<?php 
  class Calculator{
    public function __construct($number1,$number2){
      $this->number1 = $number1;
      $this->number2 = $number2;
    }
    public function sum(){
      echo $this->number1+$this->number2;
    }
    public function substraction(){
      echo $this->number1-$this->number2;
    }
    public function division(){
      echo $this->number1/$this->number2;
    }
    public function multiplication(){
      echo $this->number1*$this->number2;
    }
  }
?>