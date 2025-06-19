<?php
session_start();
$title = "Product Management"; 
include(__DIR__ . '/../Components/header.php'); 
?>

<div class="main-container">
    <form method="POST">
        <h3>Add New Product</h3>
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="code">Product Code:</label>
        <input type="number" id="code" name="code" min="1" required>

        <button type="submit" name="add">Add</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
        $newName = htmlspecialchars($_POST['name']);
        $newCode = (int)$_POST['code'];

        if (!isset($_SESSION['products'])) {
            $_SESSION['products'] = [];
        }

        $_SESSION['products'][] = ['name' => $newName, 'code' => $newCode]; 
    }

    if (!empty($_SESSION['products'])) {
        foreach ($_SESSION['products'] as $product) {
            $name = htmlspecialchars($product['name']);
            $code = htmlspecialchars($product['code']);
            echo "<div class='item'>";
            echo "<strong>Product Name:</strong> $name<br>";
            echo "<strong>Product Code:</strong> $code<br>";
            echo "</div>";
        }
    } else {
        echo "<p>No products added yet.</p>";
    }
    ?>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>