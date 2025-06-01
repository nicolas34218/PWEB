<?php $Titulo= "Section 4 - Question 38: Price Formatting"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
    function formatMonetaryValue($value) {
        return "R$ " . number_format($value, 2, ',', '.');
    }

    $price1 = 1234.56;
    $price2 = 50.00;
    $price3 = 1234567.89;

    echo "<p>Formatted price: " . formatMonetaryValue($price1) . "</p>";
    echo "<p>Formatted price: " . formatMonetaryValue($price2) . "</p>";
    echo "<p>Formatted price: " . formatMonetaryValue($price3) . "</p>";
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>