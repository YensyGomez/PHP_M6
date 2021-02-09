<?php 
    function chocolate($arg1){
        $total_choco = $arg1 * 1.0;
        return $total_choco;
    }

    function print_chocolate($arg1){
        echo "Subtotal Chocolate";
        $choco = chocolate($arg1);
        echo "<br>";
        echo $choco;
        echo "<br>";
    }

    function chicles($arg1){
        $total_chicle = $arg1 * 0.50;
        return $total_chicle; 

    }

    function print_chicles($arg1){
        echo "subtotal Chicles";
        $chicle = chicles($arg1);
        echo "<br>";
        echo $chicle;
        echo "<br>";
    }

    function caramelo($arg1){
        $total_caramelo = $arg1 * 1.50;
        return $total_caramelo;

    }
    function print_caramelo($arg1){
        echo "subtotal Caramelo";
        $caramelo = caramelo($arg1);
        echo "<br>";
        echo $caramelo;
        echo "<br>";
    }

?>

