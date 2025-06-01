<?php $Titulo= "Section 3 - Question 28"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<div class="main-content">
<?php
$total = 0; 
for ($i = 0; $i < 100; $i++) {
    $sale = rand(50, 5000);
    $total += $sale; 
}
echo $total;
?>
</div>
<?php include(__DIR__ . '/../Components/footer.php'); ?>