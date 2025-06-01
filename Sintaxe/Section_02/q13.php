<?php $Titulo= "Section 2 - "?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
    $temp = 34;

    if($temp > 0) {
        echo "Positive!";
    } else if ($temp < 0) {
        echo "Negative!";
    } else {
        echo "Zero!";
    }
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>