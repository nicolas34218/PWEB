<?php $Titulo= "Section 2 - "?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
    $dia = 3;

    if($dia == 1) {
        echo "Sunday";
    } else if ($dia == 2){
        echo "Monday";
    } else if ($dia == 3){
        echo "Tuesday";
    } else if ($dia == 4){
        echo "Wednesday";
    } else if ($dia == 5){
        echo "Thursday";
    } else if ($dia == 6){
        echo "Friday";
    } else if ($dia == 7){
        echo "Saturday";}
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>