<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
</head>
<body>
<section>
<h1>NIVEL 1 </h1>
<?php
    include 'ejercicio1.php';
    include 'ejercicio2.php';
    include 'ejercicio3.php';
    include 'ejercicio4.php';
    // resta
    resta(3,4);
    echo "<br>";
    // par e impar
    pareimpar(12);
    echo "<br>";
    // encapsular en funcion llamada parell_o_imparell
    parell_o_imparell(30);
    echo "<br>";
    // for hasta 10 
    echo "for hasta 10";
    echo "<br>";
    for_10(10);
    echo "<br>";
?>
<h1>NIVEL 2</h1>
<?php
    // contar de 2 en 2
    include 'ejercicio1.2.php';
    echo "for hasta 10 de 2 en 2";
    echo "<br>";
    for_10_2(10);
    echo "<br>";

    // esta misma funcion trabaja para cualquier valor
     echo "for de 2 en 2, para cualquier valor";
     echo "<br>";
     for_10_2(20);
     echo "<br>";

    // Parametro por defecto igual a 10 
    $escondite = 10;
    echo "for de 2 en 2 parametro por defecto = 10";
    echo "<br>";
    for_10_2($escondite);
    echo "<br>";
?>

<h1>NIVEL 3</h1>



</section>
    
</body>
</html>
