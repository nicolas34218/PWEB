<?php $Titulo= "Section 4 - Question 36: Eligibility System"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
    function checkEligibility($age) {
        return ($age >= 18) ? "Eligible" : "Not Eligible";
    }

    $age1 = 20;
    $age2 = 16;

    echo "<p>A person aged $age1 is: " . checkEligibility($age1) . "</p>";
    echo "<p>A person aged $age2 is: " . checkEligibility($age2) . "</p>";
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>