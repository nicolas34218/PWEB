<?php $Titulo= "Section 2 - "?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
    $age = 23;
    if($age > 18) {
        echo "Access Allowed!";
    } else {
        echo "Access Deny!";
    }
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>