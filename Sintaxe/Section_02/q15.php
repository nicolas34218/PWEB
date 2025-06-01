<?php $Titulo= "Section 2 - "?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
$drink = "Coffe";
$drinks = array("Coffe", "Tea", "Juice", "Capuccino", "Latte");

if (in_array($drink, $drinks)) {
    echo "You chose $drink";
} else {
    echo "Drink not available!";
}
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>