<?php $Titulo= "Section 2 - "?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
    $n1 = 8;
    $n2 = 9;
    $avg = ($n1 + $n2) / 2;

    if($avg > 7) {
        echo "Approved!";
    } else if ($avg > 5 and $avg < 6.9) {
        echo "Recovery!";
    } else {
        echo "Failed!";
    }
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>