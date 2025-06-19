<?php
session_start();
$title = "Event Attendance Register"; 
include(__DIR__ . '/../Components/header.php'); 

if (!isset($_SESSION['participantList'])) {
    $_SESSION['participantList'] = ['Carlos', 'Ana', 'João', 'Maria', 'Pedro', 'Maria', 'Ana'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    $newParticipant = trim(htmlspecialchars($_POST['new_participant'] ?? ''));
    if (!empty($newParticipant)) {
        $_SESSION['participantList'][] = $newParticipant;
    }
}
?>

<div class="main-container">
    <form method="post">
        <h3>Event Attendance Register</h3>
        <label for="new_participant">Add Participant:</label>
        <input type="text" name="new_participant" id="new_participant" required>
        <button type="submit" name="add">Add</button>
    </form>

    <div style="margin-top: 20px;">
        <h4>Unique Participants:</h4>
        <?php
        $uniqueParticipants = array_unique($_SESSION['participantList']);
        if (empty($uniqueParticipants)) {
            echo "No participants registered.";
        } else {
            foreach ($uniqueParticipants as $participant) {
                echo htmlspecialchars($participant) . "<br>";
            }
        }
        ?>
    </div>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>