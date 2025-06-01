<?php $Titulo= "Section 4 - Question 35: Code Validation"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
    function isEvenOrOdd($numericCode) {
        return ($numericCode % 2 == 0);
    }

    $code1 = 1234;
    $code2 = 567;

    echo "<p>Is code $code1 even? " . (isEvenOrOdd($code1) ? 'Yes' : 'No') . "</p>";
    echo "<p>Is code $code2 even? " . (isEvenOrOdd($code2) ? 'Yes' : 'No') . "</p>";
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>