<?php $Titulo= "Section 3 - Question 22"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<div class="main-content">
<?php
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i, "!<br>";
    }
}
?>
</div>
<?php include(__DIR__ . '/../Components/footer.php'); ?>