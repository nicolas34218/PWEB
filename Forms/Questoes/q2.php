<?php
session_start();
$title = "School Report Card"; 
include(__DIR__ . '/../Components/header.php');
?>
<div class="main-container">
    <form method="post">
        <h3>School Report Card</h3>
        <label for="subject">Subject: </label>
        <input type="text" name="subject" id="subject" required>

        <label for="grade">Grade: </label>
        <input type="number" name="grade" id="grade" step="0.1" min="0" max="10" required>

        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    if (!isset($_SESSION['report_card'])) {
        $_SESSION['report_card'] = [];
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        $newSubject = htmlspecialchars($_POST['subject']);
        $newGrade = (float) $_POST['grade'];

        $_SESSION['report_card'][] = ['subject' => $newSubject, 'grade' => $newGrade]; 
    }


    if (!empty($_SESSION['report_card'])) {
        foreach ($_SESSION['report_card'] as $entry) {
            $subject = htmlspecialchars($entry['subject']);
            $grade = htmlspecialchars($entry['grade']);
            $status = ($entry['grade'] >= 7) ? "Approved!" : "Failed!";
            $statusClass = ($entry['grade'] >= 7) ? "approved" : "failed"; 
            echo "<div class='item'>";
            echo "Subject: $subject<br>";
            echo "Grade: $grade<br>";
            echo "<span class='$statusClass'>Student $status</span><br><br>";
            echo "</div>";
        }
    } else {
        echo "<p>No grades entered yet.</p>";
    }
    ?>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>