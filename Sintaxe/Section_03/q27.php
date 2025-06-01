<?php $Titulo= "Section 3 - Question 27"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
<div class="main-content">
<?php
$members = ["Nicolas", "José", "Caique", "Teogenes", "Marllon", "Felipe", "Diego", "Mateus", "Juan", "Gabriel", "Sergio", "Ricardo"];
for ($i = 0; $i < count($members); $i++) {
    echo "$members[$i]<br>";
}
?>
</div>
<?php include(__DIR__ . '/../Components/footer.php'); ?>