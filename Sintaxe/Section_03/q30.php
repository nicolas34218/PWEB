<?php $Titulo = "Section 3 - Question 30"?>
<?php include(__DIR__ . '/../Components/header.php'); ?>
    <div class="main-container">
        <style>
            .tabuada {
                display: inline-block;
                padding: 15px;
                margin: 10px;
                background:#555;
                border-radius: 12px;
            }
        </style>

        <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "<div class='tabuada'>"; 
                echo "<h3>Multiplication Table of $i</h3>";
                for ($j = 1; $j <= 10; $j++) {
                    echo "$i x $j = " . ($i * $j) . "<br>";
                }
                echo "</div>";
            }
        ?>
    </div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>