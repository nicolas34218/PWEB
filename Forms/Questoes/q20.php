<?php
session_start();
$title = "Inventory System"; 
include(__DIR__ . '/../Components/header.php'); 
include(__DIR__ . '/../Components/function.php'); 

if (!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = [
        'Notebook' => 20,
        'Mouse' => 50,
        'Keyboard' => 30
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $item = trim(htmlspecialchars($_POST['item'] ?? ''));
        $quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT); 

        if (!empty($item) && $quantity !== false && $quantity !== null && $quantity > 0) {
            if (isset($_SESSION['inventory'][$item])) {
                $_SESSION['inventory'][$item] += $quantity;
            } else {
                $_SESSION['inventory'][$item] = $quantity;
            }
        }
    }
    if (isset($_POST['clear'])) {
        $_SESSION['inventory'] = [];
    }
}
?>

<div class="main-container">
    <form method="post">
        <h3>Inventory System</h3>
        <label for="item">Item:</label>
        <input type="text" name="item" id="item" required>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" required>

        <button type="submit" name="add">Add/Update</button>
        <button type="submit" name="clear">Clear Inventory</button>
    </form>

    <div style="margin-top: 20px;">
        <h4>Current Inventory:</h4>
        <?php
        if (!empty($_SESSION['inventory'])) {
            echo print_array($_SESSION['inventory']);
        } else {
            echo "Inventory is empty."; 
        }
        ?>
    </div>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>