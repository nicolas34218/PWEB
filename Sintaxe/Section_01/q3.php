<?php $Titulo= "Section 1 - Land Measurement"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
    <div class="main-container">
        <?php
            $height = 34.2;
            $width = 23.5;
            $area = $width * $height;
            echo "<p>This is the area in m² of the land: ". $area . "</p>";
        ?>
    </div>
<?php include(__DIR__ . '/../Components/footer.php'); ?>