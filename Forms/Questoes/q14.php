<?php
session_start();
$title = "Gym Workout Records"; 
include(__DIR__ . '/../Components/header.php'); 

if (!isset($_SESSION['workoutRecords'])) {
    $_SESSION['workoutRecords'] = [
        ["Carlos", [50,80,65]],
        ["Maria", [15,20,10]],
        ["Yago", [20,30,25]]
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $name = trim(htmlspecialchars($_POST['name'] ?? ''));
        $weightsInput = trim($_POST['weights'] ?? '');
        $weights = array_map('floatval', explode(',', $weightsInput));

        $weights = array_filter($weights, 'is_numeric');

        if (!empty($name) && !empty($weights)) {
            $_SESSION['workoutRecords'][] = [$name, array_values($weights)]; 
        }
    }
    if (isset($_POST['clear'])) {
        $_SESSION['workoutRecords'] = [];
    }
}
?>

<div class="main-container">
    <form method="post">
        <h3>Gym Workout Records</h3>
        <label for="name">Student Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="weights">Weights Lifted (comma-separated):</label>
        <input type="text" name="weights" id="weights" placeholder="ex: 50,80,65" required>

        <button type="submit" name="add">Add</button>
        <button type="submit" name="clear">Clear</button>
    </form>

    <div style="margin-top: 20px;">
        <h4>Student Records:</h4>
        <?php
        if (!empty($_SESSION['workoutRecords'])) {
            foreach ($_SESSION['workoutRecords'] as $student) {
                $name = htmlspecialchars($student[0]);
                $results = $student[1];
                if (!empty($results)) {
                    $average = number_format(array_sum($results) / count($results), 2);
                    echo "Student: $name, Average weight lifted: $average<br>"; 
                } else {
                    echo "Student: $name, No weights recorded.<br>"; 
                }
            }
        } else {
            echo "No student records available."; 
        }
        ?>
    </div>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>