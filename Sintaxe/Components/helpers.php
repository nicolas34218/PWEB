<?php            
    function add($a, $b) {
        $result = $a + $b;
        echo "<p>Sum result: $result</p>";
    }
            
    function totalCost($price, $quant) {
        return $price * $quant;
    }

    function calcAvg($notes) {
        return array_sum($notes) / count($notes);
    }

    function formatPrico($value) {
        return "R$ " . number_format($value, 2, ',', '.');
    }

    function calcArea($width, $height) {
        return $width * $height;
    }

    function Hi(){
        echo "Hi";
    }

?>