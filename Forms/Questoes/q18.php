<?php
session_start();
$title = "Sensor Data Filtering"; 
include(__DIR__ . '/../Components/header.php'); 
include(__DIR__ . '/../Components/function.php'); 

if (!isset($_SESSION['sensorData'])) {
    $_SESSION['sensorData'] = [15.2, 28.9, 12.0, 35.5, 20.1, 40.0, 5.8];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $newData = filter_input(INPUT_POST, 'new_data', FILTER_VALIDATE_FLOAT);
        if ($newData !== false && $newData !== null) {
            $_SESSION['sensorData'][] = $newData;
        }
    }
    if (isset($_POST['clear'])) {
        $_SESSION['sensorData'] = [];
    }
}

function filterGreaterThan25($n) { 
    return $n > 25;
}
?>

<div class="main-container">
    <form method="post">
        <h3>Sensor Data Filtering</h3>
        <label for="new_data">Add Reading:</label>
        <input type="number" step="0.1" name="new_data" id="new_data" required>
        <button type="submit" name="add">Add</button>
        <button type="submit" name="clear">Clear</button>
    </form>

    <div style="margin-top: 20px;">
        <?php
        if (!empty($_SESSION['sensorData'])) {
            $filteredData = array_filter($_SESSION['sensorData'], 'filterGreaterThan25'); 
            echo "Filtered Data (>25):<br>"; 
            echo print_array($filteredData);
        } else {
            echo "No data recorded."; 
        }
        ?>
    </div>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>