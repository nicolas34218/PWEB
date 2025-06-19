<?php
session_start();
$title = "Customer Queue Management"; 
include(__DIR__ . '/../Components/header.php'); 
include(__DIR__ . '/../Components/function.php'); 

if (!isset($_SESSION['customerQueue'])) {
    $_SESSION['customerQueue'] = ['John Doe', 'Maria Santos', 'Pedro Costa']; 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newName = trim(htmlspecialchars($_POST['new_name'] ?? ''));

    if (isset($_POST['add_start']) && !empty($newName)) {
        array_unshift($_SESSION['customerQueue'], $newName);
    }
    if (isset($_POST['add_end']) && !empty($newName)) {
        array_push($_SESSION['customerQueue'], $newName);
    }
    if (isset($_POST['serve'])) {
        array_shift($_SESSION['customerQueue']);
    }
    if (isset($_POST['clear'])) {
        $_SESSION['customerQueue'] = [];
    }
}
?>

<div class="main-container">
    <form method="post">
        <h3>Customer Queue Management</h3>
        <label for="new_name">Client Name:</label>
        <input type="text" name="new_name" id="new_name" required>

        <button type="submit" name="add_start">Add to Start</button>
        <button type="submit" name="add_end">Add to End</button>
        <button type="submit" name="serve">Serve Next</button>
        <button type="submit" name="clear">Clear Queue</button>
    </form>

    <div style="margin-top: 20px;">
        <h4>Current Queue:</h4>
        <?php
        if (!empty($_SESSION['customerQueue'])) {
            echo print_array($_SESSION['customerQueue']);
        } else {
            echo "Queue is empty."; 
        }
        ?>
    </div>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>