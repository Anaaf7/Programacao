<?php
$a = 1000000;
$b = 1300000;
$ta = 0.03;
$tb = 0.02;
$anos = 0;

    while ($a <= $b) {
        echo"Pais A = $a crescendo <br>";
        echo"Pais B = $b crescendo <br>";

        $a += $a * $ta;
        $b += $b * $tb;

        $anos++;
    }echo"Demorou $anos anos para que a população de A ultrapasse a população de B";
?>