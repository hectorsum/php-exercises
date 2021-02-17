<?php
  $year = 2021;
  $pi = 3.1416;
  $age = 21;
  function isValidAge($age){
    if ($age >= 18){
      echo "You're an adult person";
    }else{
      echo "You aren't an adult person";
    }
  }
  function squareNumber($number){
    return $number**2;
  }
?>

<!DOCTYPE html>
<html>
<body>
  <?php 
    isValidAge(17);
    echo "\n";
    echo squareNumber(2);
  ?>
</body>
</html>