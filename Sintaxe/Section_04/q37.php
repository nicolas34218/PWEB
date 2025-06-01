<?php $Titulo= "Section 4 - Question 37: Message Personalization"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
    function generatePersonalizedGreeting($userName) {
        return "Hello, $userName! Welcome!";
    }

    $name1 = "Ana";
    $name2 = "Carlos";

    echo "<p>" . generatePersonalizedGreeting($name1) . "</p>";
    echo "<p>" . generatePersonalizedGreeting($name2) . "</p>";
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>