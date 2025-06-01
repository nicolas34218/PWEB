<?php $Titulo= "Section 1 - Budget Calculation"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
    <div class="main-container">
        <?php
            $MaterialCost = 5000;
            $LaborCost = 10000;
            $Total = $MaterialCost + $LaborCost;
            echo "<p>The total is: ". $Total . "</p>"; // Corrigido $total para $Total
        ?>
    </div>
<?php include(__DIR__ . '/../Components/footer.php'); ?>