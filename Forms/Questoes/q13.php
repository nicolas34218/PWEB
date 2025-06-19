<?php
session_start();
$title = "Average Monthly Expenses"; 
include(__DIR__ . '/../
Components/header.php'); 

if (!isset($_SESSION['monthlyExpenses'])) {
    $_SESSION['monthlyExpenses'] = [1200.50, 850.75, 1500.00, 920.30, 1100.20]; 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $newExpense = filter_input(INPUT_POST, 'new_expense', FILTER_VALIDATE_FLOAT);
        if ($newExpense !== false && $newExpense !== null) {
            $_SESSION['monthlyExpenses'][] = $newExpense;
        }
    }
    if (isset($_POST['clear'])) {
        $_SESSION['monthlyExpenses'] = [];
    }
}
?>

<div class="main-container">
    <form method="post">
        <h3>Average Monthly Expenses</h3>
        <label for="new_expense">Add Expense:</label>
        <input type="number" step="0.01" name="new_expense" id="new_expense" required>
        <button type="submit" name="add">Add</button>
        <button type="submit" name="clear">Clear</button>
    </form>

    <div style="margin-top: 20px;">
        <?php
        if (!empty($_SESSION['monthlyExpenses'])) {
            $averageExpenses = array_sum($_SESSION['monthlyExpenses']) / count($_SESSION['monthlyExpenses']);
            echo "Average monthly expenses: " . number_format($averageExpenses, 2, ',', '.'); 
        } else {
            echo "No expenses registered."; 
        }
        ?>
    </div>
</div>

<?php include(__DIR__ . '/../
Components/footer.php'); ?>