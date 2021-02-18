<?php 
  include 'includes/header.php';
  $productos = [
    [
      'nombre' => 'Tablet',
      'precio' => 200,
      'disponible' => true
    ],
    [
      'nombre' => 'Television',
      'precio' => 300,
      'disponible' => true
    ],
    [
      'nombre' => 'Monitor Curvo',
      'precio' => 400,
      'disponible' => false
    ]
  ];

  foreach($productos as $producto){ ?>
    <li>
      <p>Producto: <?= $producto['nombre'] ?></p>
      <p>Precio: <?= "$".$producto['precio'] ?></p>
      <p>
        <?php echo ($producto['disponible']) ? "<p>Disponible</p>" : "<p>No esta Disponible</p>"?>
      </p>
    </li>
  <?php
  }

include 'includes/footer.php';