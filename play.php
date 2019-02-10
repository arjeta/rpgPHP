<?php
/**
 * Created by PhpStorm.
 * User: Arjeta Avllaj <arjeta.avllaj14@gmail.com>
 * Date: 2019-02-09
 * Time: 13:00
 */

include 'vendor/autoload.php';

$gotPlayerName = false;
while ($gotPlayerName == false) {

    $name  = readline("Please enter your name: ");

    if(strlen($name) >= 3){
        $gotPlayerName = true;
    }
    else {
        echo "The player name should be at least three characters long.\n";
    }
}


$test = new Arjeta\Archer($name);

