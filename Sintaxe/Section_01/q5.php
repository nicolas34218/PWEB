<?php $Titulo= "Section 1 - Selling Price and Data Type"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
    <div class="main-container">
        <?php
            $price = 3.42;
            $type = gettype($price);    
            echo "<p>The type of the variable is: ". $type . "</p>";
        ?>
    </div>
<?php include(__DIR__ . '/../Components/footer.php'); ?>