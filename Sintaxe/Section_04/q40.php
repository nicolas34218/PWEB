<?php $Titulo= "Section 4 - Question 40: Event Log"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<?php
    function logEvent($message) {
        $timestamp = time();
        $dateTime = date('Y-m-d H:i:s', $timestamp);
        echo "<p>[LOG - $dateTime] $message</p>";
    }

    logEvent("User logged into the system.");
    logEvent("Homepage accessed.");
    logEvent("Error loading database data.");
?>
<?php include(__DIR__ . '/../Components/footer.php'); ?>