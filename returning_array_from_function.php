<?php
    //returning array

    function mathoption($num1,$num2){
        $sum = $num1 + $num2;
        $sub = $num1 - $num2;
        $mul = $num1 * $num2;
        $div= $num1 / $num2;

        $solution = array($sum, $sub, $mul, $div);

        return $solution;
    }
    $arraydis = mathoption(40,30);
    echo "sum = " . $arraydis[0]. "<br>";
    echo "sub = " . $arraydis[1]. "<br>";
    echo "mul = " . $arraydis[2]. "<br>";
    echo "div = " . $arraydis[3]. "<br>";
?>