<?php $Titulo= "Section 4 - Question 32: Basic Calculator"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
    function sumTwoNumbers($num1, $num2) {
        $result = $num1 + $num2;
        echo "<div class='calculator'>";
        echo "  <div class='display'>";
        echo "    <div class='input'></div>";
        echo "    <div class='output'>$result</div>";
        echo "  </div>";
        echo "  <div class='keys'>";
        echo "    <div class='key'>$num1</div>";
        echo "    <div class='key'>+</div>";
        echo "    <div class='key'>$num2</div>";
        echo "    <div class='key operator'>=</div>";
        echo "  </div>";
        echo "</div>";
    }

    sumTwoNumbers(15, 27);
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>