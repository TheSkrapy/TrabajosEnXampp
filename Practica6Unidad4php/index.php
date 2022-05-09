<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herramientas</title>
    <?php 
    include("herramientas.php")
    ?>
</head>
<body>
    <h1>Herramientas</h1>
    <?php 
    $caja_herramientas = new Herramientas;
    $caja_herramientas->nombre = "Caja de herramientas";
    $caja_herramientas->precio = 60;
    $caja_herramientas->descripcion="Caja completa de herramientas, 50 piezas calidad buena.";
    
    echo "<img src='$caja_herramienta->imagen' alt='$caja_herramientas->nombre'  width='200' align='left'>";
    echo "<p>Producto: $caja_herramientas->nombre </p>";
    echo "<p>Precio: $caja_herramientas->precio </p>";
    echo "<p>Descripcion: $caja_herramientas->descripcion  </p>";
    ?>
   
</body>
</html>