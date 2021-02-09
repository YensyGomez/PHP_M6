<?php

function olimpicos(){

    $a = array(
        "1960"  => "Roma",
        "1964"  => "Tokio",
        "1968"  => "Ciudad de Mexico",
        "1972"  => "Munich",
        "1976"  => "Montreal",
        "1980"  => "Moscu",
        "1984"  => "Los Angeles",
        "1988"  => "Seul",
        "1992"  => "Barcelona",
        "1996"  => "Atlanta",
        "2000"  => "Sidney",
        "2004"  => "Atenas",
        "2008"  => "Pekin",
        "2012"  => "Londres",
        "2016"  => "Rio de Janeiro"
    );

    foreach ($a as $k => $v) {
        echo "$k :  $v.\n";
        echo "<br>";
    }
    
}
?>