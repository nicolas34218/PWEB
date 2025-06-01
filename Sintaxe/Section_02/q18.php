<?php $Titulo= "Section 2 - "?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
$color = "Red";

if ($color == "Red" or $color == "Blue" or $color == "Yellow") {
    echo "Valid Color!";
} else {
    echo "Suggested Color not Valid! <br>Branco";
}
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>