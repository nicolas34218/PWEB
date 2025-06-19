<?php
session_start();
$title = "Product Categories"; 
include(__DIR__ . '/../Components/header.php');

if (!isset($_SESSION['productCategories'])) {
    $_SESSION['productCategories'] = [
        "Clothing",
        "Food", 
        "Peripheral", 
        "Accessory", 
        "Home Appliance" 
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    $newCategory = trim(htmlspecialchars($_POST['new_category'] ?? ''));
    if (!empty($newCategory)) {
        $_SESSION['productCategories'][] = $newCategory;
    }
}

$ordering = $_GET['ordering'] ?? '';
$categoriesToDisplay = $_SESSION['productCategories'];

if ($ordering === 'ascending') {
    sort($categoriesToDisplay);
} elseif ($ordering === 'descending') {
    rsort($categoriesToDisplay);
}
?>

<div class="main-container">
    <form method="post">
        <h3>Category Management</h3>
        <label for="new_category">Add New Category:</label>
        <input type="text" name="new_category" id="new_category" required>
        <button type="submit" name="add">Add</button>
    </form>

        <a href="?ordering=">View Original</a>
        <a href="?ordering=ascending">Order Ascending</a>
        <a href="?ordering=descending">Order Descending</a>

    <?php
    echo "<h4>Array " . match($ordering) {
        'ascending' => 'in ascending alphabetical order', 
        'descending' => 'in descending alphabetical order', 
        default => 'original'
    } . ":</h4>";

    foreach ($categoriesToDisplay as $category) {
        echo "Category: " . htmlspecialchars($category) . "<br>";
    }
    ?>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>