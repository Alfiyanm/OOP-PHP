<?php

    /**
     * ***************** Namespace ***********************
     * 
     */

    require "vendor/autoload.php";
    
    require "src/Calculator.php";
    require "src/Mobil/Mobil.php";
    require "src/Mobil/Toyota.php";
    require "src/Mobil/Honda.php";

    use Dummy\Calculator; // mengimport namespace
    use Dummy\Mobil\Toyota as Fortuner; //contoh alias namespace
    use Dummy\Mobil\Honda as Crv; //contoh alias namespace

    $toyota = new Fortuner('Toyota Fortuner', 10);
    $calculator = new Calculator($toyota);
    echo "Jarak Maksimum " . $toyota->getMerk() . " adalah " . $calculator->hitungJarak() . " km. \n";

    $honda = new Crv('Honda CR-V', 10);
    $calculator = new Calculator($honda);
    echo "Jarak Maksimum " . $honda->getMerk() . " adalah " . $calculator->hitungJarak() . " km. \n";