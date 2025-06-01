<?php $Titulo= "Section 1 - π (Pi) Value"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
    <div class="main-container">
        <?php
            $pi = round(3.141592, 4); 
            echo "<p>The value of Pi with only 4 decimal places is: ". $pi . "</p>";
        ?>
    </div>
<?php include(__DIR__ . '/../Components/footer.php'); ?>