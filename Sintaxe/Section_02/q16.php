<?php $Titulo= "Section 2 - "?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
$mariState = "S";

switch ($mariState) {
    case "M":
        echo"Married";
        break;
    case "S":
        echo "Single";
        break;
    case "D":
        echo"Divorced";
        break;
    case "O":
        echo"Other";
        break;
    }
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>