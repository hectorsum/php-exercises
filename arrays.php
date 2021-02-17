<?php
  $soccer_team = [
    (object)[
      "name" => "Hector",
      "age" => 21,
      "city" => "Lima",
    ],
    (object)[
      "name" => "Maria",
      "age" => 20,
      "city" => "Bogota",
    ],
    (object)[
      "name" => "Jose",
      "age" => 29,
      "city" => "Quito",
    ],
    (object)[
      "name" => "Mario",
      "age" => 21,
      "city" => "Buenos Aires",
    ]
  ];
  
  //Replacing
  $soccer_team[0] = [
    "name" => "Esteban",
    "age" => 50,
    "city" => "Arequipa",
  ];  
?>

<!DOCTYPE html>
<html>
<body>
  <?php 
    // var_dump($soccer_team[0]['name']);
    // var_dump($soccer_team[0]['age']);
    // var_dump($soccer_team[0]['city']);
    var_dump($soccer_team[0]->name)
  ?>
</body>
</html>