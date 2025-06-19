<?php
session_start();
$title = "Phrase Analysis";
include(__DIR__ . '/../Components/header.php'); 

if (!isset($_SESSION['texts'])) {
    $_SESSION['texts'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['analyze'])) {
    $newText = trim(htmlspecialchars($_POST['new_text'] ?? ''));
    if (!empty($newText)) {
        $_SESSION['texts'][] = $newText;
    }
}
?>

<div class="main-container">
    <form method="post">
        <h3>Phrase Analysis</h3>
        <label for="new_text">Enter a text:</label>
        <textarea name="new_text" id="new_text" required></textarea>
        <button type="submit" name="analyze">Analyze</button>
    </form>

    <div style="margin-top: 20px;">
        <?php
        if (!empty($_SESSION['texts'])) {
            $latestText = end($_SESSION['texts']);

            $wordCount = str_word_count($latestText);
            echo "String: '" . htmlspecialchars($latestText) . "'<br>"; 
            echo "Number of words: $wordCount"; 
        } else {
            echo "No text entered yet."; 
        }
        ?>
    </div>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>