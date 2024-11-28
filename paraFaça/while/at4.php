<?php
    $chico = 1.50;
    $ze = 1.10;
    $anos = 0;

    while ($ze < $chico) {
        $chico = $chico + 0.02;
        $ze = $ze + 0.03;
        $anos++;
    }echo"Zé demorou $anos anos para ser mais alto que Chico";
?>