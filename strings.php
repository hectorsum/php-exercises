<?php

  $sentence = "this is a sentence";
  $sentence = strtoupper($sentence);
  $sentence = lcfirst($sentence);
  $sentence = strlen($sentence);
  
  $full_name = "Hector Herrera";
  $sentence = "Hi there, I'm {$full_name}";
  $sentence = str_shuffle($sentence);
?>

<!DOCTYPE html>
<html>
<body>
  <?php 
    echo "<h1>{$sentence}</h1>";
  ?>
</body>
</html>