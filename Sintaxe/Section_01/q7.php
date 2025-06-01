<?php $Titulo= "Section 1 - Delivery Address"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
    <div class="main-container">
        <?php
            $street = "Avenida São Sebastião";
            $number = 588; 
            echo "<p>The address of the house is: ". $street . ", " . $number . "</p>"; // Melhorando a concatenação
        ?>
    </div>
<?php include(__DIR__ . '/../Components/footer.php'); ?>