<?php $Titulo= "Section 4 - Question 39: Land Area Calculation"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
    function calculateRectangularLandArea($sideA, $sideB) {
        return $sideA * $sideB;
    }

    $height = 10;
    $width = 5;
    $area = calculateRectangularLandArea($height, $width);

    echo "<p>The area of a rectangular land with $height meters of height and $width meters of width is: " . $area . " m²</p>";
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>