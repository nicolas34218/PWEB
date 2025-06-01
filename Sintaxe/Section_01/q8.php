<?php $Titulo= "Section 1 - Category Change"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
    <div class="main-container">
        <?php
            $code = "FF6B99";
            echo "<p>The value of the code before is: ". $code . "</p>";
            $code = 342;
            echo "<p>The value of the code after is: ". $code . "</p>";
        ?>
    </div>
<?php include(__DIR__ . '/../Components/footer.php'); ?>