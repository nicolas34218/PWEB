<?php
$title = "Product Pricing"; 
session_start();
include(__DIR__ . '/../Components/header.php'); 

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
    $newName = htmlspecialchars($_POST['product'] ?? '');
    $newPrice = (float)htmlspecialchars($_POST['price'] ?? ''); 

    if (!empty($newName) && !empty($newPrice)) {
        $_SESSION['products'][] = [
            'product' => $newName,
            'price' => $newPrice
        ];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['clear'])) {
    $_SESSION['products'] = [];
}

$products = $_SESSION['products'];
?>
<div class="main-container">
    <form method="post">
        <h3>Product Pricing</h3>
        <label for="product">Enter Product Name:</label>
        <input type="text" name="product" id="product" required>

        <label for="price">Enter Product Price:</label>
        <input type="number" name="price" id="price" step="0.01" min="0" required>

        <button type="submit" name="submit">Submit</button>

        <button type="submit" name="clear">Clear All</button>
    </form>

    <div style="margin-top: 20px;">
        <?php
        usort($products, function($a, $b) {
            return $a['price'] <=> $b['price'];
        });

        if (empty($products)) {
            echo "No products registered.";
        } else {
            foreach ($products as $prod) {
                $name = htmlspecialchars($prod['product']);
                $price = number_format($prod['price'], 2, ',', '.');
                echo "Product: $name<br>Price: R$ $price<br><br>";
            }
        }
        ?>
    </div>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>