<?php $Titulo= "Section 3 - Question 26"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<div class="main-content">
<?php
$values = [9, 14, 23, 17, 22, 0, 15, 24];
$i = 0;
do {
    if ($values[$i] !== 0) {
        echo "The input value was: " . $values[$i] . "<br>";
        $i++;
    } else {
        echo "The informed value closes the code";
        break;
    }
} while ($i < count($values));
?>
</div>
<?php include(__DIR__ . '/../Components/footer.php'); ?>