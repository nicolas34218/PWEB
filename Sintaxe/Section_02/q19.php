<?php $Titulo= "Section 2 - "?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
$posit = "Developer";
$salary = 3420;

switch ($posit) {
    case "Developer":
        echo"The salary is: ",(1.5*$salary);
        break;
    case "Designer":
        echo "The salary is: ",(1.25*$salary);
        break;
    case "Manager":
        echo"The salary is: ",(2*$salary);
        break;
    }
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>