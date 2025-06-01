<?php $Titulo= "Section 2 - "?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
    $adm = true;

    if ($adm) {
        echo"Access Allowed!";
    } else { 
        echo "Access Deny!";
    }
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>