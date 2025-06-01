<?php $Titulo= "Section 3 - Question 24"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<div class="main-content">
<?php
for ($i = 0; $i < 100; $i++) {
    echo "Processing...<br>";
    if($i == 50) {
    echo "Process finalized to avoid overload";
    break;
    }
}
?>
</div>
<?php include(__DIR__ . '/../Components/footer.php'); ?>