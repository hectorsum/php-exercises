<?php
  include('Honda.php');
  include('Calculator.php');
  
  
  $car = new Honda("Civic","Honda",2,"Green","25000");
  if(isset($_POST['send'])){
    if(isset($_POST['number1']) && isset($_POST['number2'])){
      $number1 = $_POST['number1'];
      $number2 = $_POST['number2'];
      $calculator = new Calculator($number1,$number2);
    }
  }
  $number1 = $_POST['number1'];
  $number2 = $_POST['number2'];
  $calculator = new Calculator($number1,$number2);
?>


<?php include('../includes/header.php') ?>
  <!-- <h1><?=$car->statement()?></h1>
  <h1><?=$car->price()?></h1>
  <h1><?=$car->changePrice(3000)?></h1>
  <h1><?=$car->price()?></h1> -->
  <div class="container p-4">
    <div class="row">
      <div class="col-md-5">
        <div class="container">
          <form action="index.php" method="POST">
            <h1>Calculator using Classes</h1>
            <hr/>
            <input type="text" name="number1" placeholder="Type number 01" class="form-control mb-3">
            <input type="text" name="number2" placeholder="Type number 02" class="form-control mb-3">
            <input type="submit" name="send" class="btn btn-success btn-block w-50">
          </form>
        </div>
      </div>
      <div class="col-md-5">
        <div class="container">
          <h1>Sum: <?=$calculator->sum()?></h1>
          <h1>Sustraction: <?=$calculator->substraction()?></h1>
          <h1>Multiplication: <?=$calculator->multiplication()?></h1>
          <h1>Division: <?=$calculator->division()?></h1>
        </div>
      </div>
    </div>
  </div>  
<?php include('../includes/footer.php') ?>