<?php $Titulo= "Section 3 - Question 29"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<div class="main-content">
<?php
$value = array(rand(1, 10));
for ($i = 0; $i < count($value); $i++) {
    $quantity = $value[$i];
    if ($value[$i] < 5) {
        echo $quantity;
    } else {
        echo "Finished";
    }
}
?>
</div>
<?php include(__DIR__ . '/../Components/footer.php'); ?>