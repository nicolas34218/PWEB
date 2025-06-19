<?php
session_start();
$title = "Price Increase"; 
include(__DIR__ . '/../Components/header.php'); 
include(__DIR__ . '/../Components/function.php'); 

if (!isset($_SESSION['oldPrices'])) {
    $_SESSION['oldPrices'] = [15.50, 22.00, 30.75, 8.99]; // Storing as numbers
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $newPrice = filter_input(INPUT_POST, 'new_price', FILTER_VALIDATE_FLOAT);
        if ($newPrice !== false && $newPrice !== null) {
            $_SESSION['oldPrices'][] = $newPrice;
        }
    }
    if (isset($_POST['clear'])) {
        $_SESSION['oldPrices'] = [];
    }
}

function calculatePercentageIncrease($n) { 
    return number_format(($n * 1.1), 2, '.', ''); 
}
?>

<div class="main-container">
    <form method="post">
        <h3>Price Increase</h3>
        <label for="new_price">Add Price:</label>
        <input type="number" step="0.01" name="new_price" id="new_price" required>
        <button type="submit" name="add">Add</button>
        <button type="submit" name="clear">Clear</button>
    </form>

    <div style="margin-top: 20px;">
        <?php
        if (!empty($_SESSION['oldPrices'])) {
            $newPrices = array_map('calculatePercentageIncrease', $_SESSION['oldPrices']); 
            echo "Prices with Adjustment:<br>"; 
            echo print_array($newPrices);
        } else {
            echo "No prices registered."; 
        }
        ?>
    </div>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>