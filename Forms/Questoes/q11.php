<?php
session_start();
$title = "Sensor Monitoring"; 
include(__DIR__ . '/../Components/header.php'); 

if (!isset($_SESSION['temperatures'])) {
    $_SESSION['temperatures'] = [15, -10, 25, 20, 10, 32, 28, 7]; 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $newTemp = filter_input(INPUT_POST, 'new_temp', FILTER_VALIDATE_FLOAT); 
        if ($newTemp !== false && $newTemp !== null) {
            $_SESSION['temperatures'][] = $newTemp;
        }
    }
    if (isset($_POST['clear'])) {
        $_SESSION['temperatures'] = [];
    }
}
?>

<div class="main-container">
    <form method="post">
        <h3>Sensor Monitoring</h3>
        <label for="new_temp">Add Temperature:</label>
        <input type="number" name="new_temp" id="new_temp" step="any" required>
        <button type="submit" name="add">Add</button>
        <button type="submit" name="clear">Clear</button>
    </form>

    <div style="margin-top: 20px;">
        <?php
        if (!empty($_SESSION['temperatures'])) {
            $maxTemp = max($_SESSION['temperatures']);
            $minTemp = min($_SESSION['temperatures']);
            echo "Highest temperature: $maxTemp<br>Lowest temperature: $minTemp"; 
        } else {
            echo "No temperatures recorded."; 
        }
        ?>
    </div>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>