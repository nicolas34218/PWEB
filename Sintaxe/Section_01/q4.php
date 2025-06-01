<?php $Titulo= "Section 1 - Order Status"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
    <div class="main-container">
        <?php
            $status = true;
            if ($status){
                echo "<p>The request has been sent!</p>";
            } else {
                echo "<p>The request was not sent!</p>";
            }
        ?>
    </div>
<?php include(__DIR__ . '/../Components/footer.php'); ?>