<?php
  require('switch.php');
  
  //Concat
  $introduce = "My full name is ";
  $full_name = "Hector Herrera";
  $car;
  function greeting(){
    global $introduce;
    global $full_name;
    return $introduce.$full_name;
  }

  
  echo "<h1>".greeting()."</h1>";
  if (isset($_POST['send'])){
    if(isset($_POST['car'])){
      $car = $_POST['car'];
    }
    what_car_is(strtolower($car));
  }
?>
<!DOCTYPE html>
<html>
<body>
  <form method="POST" action="./functions.php">
    <label for="car">Type your car: </label>
    <input type="text" name="car" id="car" autocomplete="off"/>
    <input type="submit" name="send"/>
  </form>
</body>
</html>