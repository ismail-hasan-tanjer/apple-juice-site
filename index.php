<?php

require_once "vendor/autoload.php";

use App\classes\HelloWorld;

$myText = new HelloWorld();
$myText -> one();

for ($x =0; $x <= 10; $x++) {
    echo "Hellow";
}