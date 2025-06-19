<?php
$title = "Prime Number Generator"; 
include(__DIR__ . '/../Components/header.php'); 
?>

<div class="main-container">
    <form method="post">
        <h3>Prime Number Generator</h3>

        <label for="quantity">Quantity of Numbers:</label>
        <input type="number" name="quantity" id="quantity"
               min="1" max="100" value="<?= $_POST['quantity'] ?? 10 ?>" required>

        <label for="min">Minimum Value:</label>
        <input type="number" name="min" id="min"
               min="1" value="<?= $_POST['min'] ?? 1 ?>" required>

        <label for="max">Maximum Value:</label>
        <input type="number" name="max" id="max"
               min="2" value="<?= $_POST['max'] ?? 60 ?>" required>

        <button type="submit" name="generate">Generate Numbers</button>
    </form>

    <?php
    function isPrime($num): bool { 
        if ($num <= 1) return false;
        if ($num == 2) return true;
        if ($num % 2 == 0) return false;

        for ($i = 3; $i <= sqrt($num); $i += 2) {
            if ($num % $i == 0) return false;
        }
        return true;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['generate'])) {
        $quantity = (int)($_POST['quantity'] ?? 10);
        $min = (int)($_POST['min'] ?? 1);
        $max = (int)($_POST['max'] ?? 60);

        if ($min >= $max) {
            echo "<div class='error'>The minimum value must be less than the maximum value!</div>";
        } else {
            $generatedNumbers = [];
            for ($i = 0; $i < $quantity; $i++) {
                $num = rand($min, $max);
                $generatedNumbers[] = [
                    "num" => $num,
                    "is_prime_text" => isPrime($num) ? "Is Prime" : "Is Not Prime", 
                    "class" => isPrime($num) ? "primo" : "nao-primo" 
                ];
            }

            echo "<div class='results'>";
            echo "<h4>Generated Numbers:</h4>";
            foreach ($generatedNumbers as $num_data) {
                echo "<div class='number {$num_data['class']}'>";
                echo "Number: {$num_data['num']} - <strong>{$num_data['is_prime_text']}</strong>";
                echo "</div>";
            }
            echo "</div>";
        }
    }
    ?>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>