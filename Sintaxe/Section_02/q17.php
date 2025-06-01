<?php $Titulo= "Section 2 - "?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
$temp = 23;

if ($temp < 0) {
    echo "Ice Alert!";
} else if ($temp > 0 and $temp < 15) {
    echo "Mild Climate";
} else if ($temp > 15 and $temp < 25) {
    echo "Pleasant Climate";
} else {
    echo "Atention: Extreme Heat!";
}
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>