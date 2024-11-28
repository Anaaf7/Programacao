<?php
$pa = 1000000;
$pb = 1300000;
$ano = 0;

 do {
    $pa = $pa * 0.03;
    $pb = $pb * 0.02;
    $ano++;
 } while ($pa < $pb);
    echo"$ano anos";
?>