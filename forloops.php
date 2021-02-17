<?php
  $name = "18";
  $soccer_team = [
    [
      "name" => "Hector",
      "age" => 21,
      "city" => "Lima",
    ],
    [
      "name" => "Maria",
      "age" => 20,
      "city" => "Bogota",
    ],
    [
      "name" => "Jose",
      "age" => 29,
      "city" => "Quito",
    ],
    [
      "name" => "Mario",
      "age" => 21,
      "city" => "Buenos Aires",
    ]
  ];
  for ($i = 0; $i < 11; $i++){
    echo "<h4>{$i}</h4>";
  }

  foreach ($soccer_team as $value){
    echo "{$value['name']} - {$value['age']} - {$value['city']}<br>";
  }
  
  $i = 0;
  while($i < 10){
    echo "{$i} <br>";
    $i++;
  }
  
  $age = 0;

  do{
    if ($age < 18){
      echo "You're a kid, you shall not pass <br>";
    }else{
      echo "You're a grown man, you can pass <br>";
    }
    $age++;
  }while($age <= 18);
?>

<!DOCTYPE html>
<html>
<body>
  <?php 
    
  ?>
</body>
</html>