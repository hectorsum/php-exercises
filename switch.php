<?php

  function what_car_is($car = ""){
    switch($car){
      case "tesla":
        echo "<h1>Electric Car</h1>";
        break;
      default:
        echo "<h1>Another type of car</h1>";
    }
  }

?>