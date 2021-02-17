<?php 
  // This is a comment
  
  // Comment from me
  # Comment from me
  $name = 'Hector';
  $last_name = 'Herrera';
  $name = 'Martin';
  $car = 'TOYOTA';

  //Cannot override a const
  define('constante','Jet');
  #define('constante','Jet2');
  
  // define('full_name',"{$name} {$last_name}");
  
  function printName(){
    // $car = 'BWM';
    global $car; //Getting the car variable from outside
    return $car;
  }
?>

<!DOCTYPE html>
<html>
<body>
  <?php 
    echo "<h1>My name is ".$name."</h1>";
    echo "<h1>My name is {$name}</h1>";
    echo constante;
    echo $car;
    echo printName();
    echo "{$name} {$last_name}";
  ?>
</body>
</html>