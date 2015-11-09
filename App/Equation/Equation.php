<?php

require_once('QuadraticRoots.php');

if(isset($_POST['ok'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    echo "Ваше уравнение: ". $a. "x^2 ". "+ ". $b. "x ". "+ ". $c. " = 0";
    echo "<br>";

    $d = pow($b, 2) - 4 * $a * $c;

    echo "Дискриминант D = ". $d;
    echo "<br>";

    $roots = new QuadraticRoots();
    $roots->roots($a, $b, $d);
}
