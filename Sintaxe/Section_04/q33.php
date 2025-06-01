<?php $Titulo= "Section 4 - Question 33: Total Cost Calculation"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
    function calcTotal($unitPrice, $quantity) {
        return $unitPrice * $quantity;
    }

    $costItemA = calcTotal(10.50, 3);
    $costItemB = calcTotal(25.00, 2);

    $overallTotalCost = $costItemA + $costItemB;

    echo "<p>Cost of Item A: R$ " . number_format($costItemA, 2, ',', '.') . "</p>";
    echo "<p>Cost of Item B: R$ " . number_format($costItemB, 2, ',', '.') . "</p>";
    echo "<p>Overall Total Cost: R$ " . number_format($overallTotalCost, 2, ',', '.') . "</p>";
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>