<?php
session_start();
$title = "Password Generator"; 
include(__DIR__ . '/../Components/header.php'); 

if (!isset($_SESSION['allowedCharacters'])) {
    $_SESSION['allowedCharacters'] = ['SEnha', '@', '123'];
}

$generatedPassword = ''; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $newCharacter = trim(htmlspecialchars($_POST['new_character'] ?? ''));
        if (!empty($newCharacter)) {
            $_SESSION['allowedCharacters'][] = $newCharacter;
        }
    }
    if (isset($_POST['clear'])) {
        $_SESSION['allowedCharacters'] = [];
    }
    if (isset($_POST['generate'])) {

        if (!empty($_SESSION['allowedCharacters'])) {
            $generatedPassword = implode('', $_SESSION['allowedCharacters']);

        } else {
            $generatedPassword = "No characters to generate from.";
        }
    }
}
?>

<div class="main-container">
    <form method="post">
        <h3>Password Generator</h3>
        <label for="new_character">Add Character:</label>
        <input type="text" name="new_character" id="new_character" required>
        <button type="submit" name="add">Add</button>
        <button type="submit" name="clear">Clear</button>
        <button type="submit" name="generate">Generate Password</button>
    </form>

    <div style="margin-top: 20px;">
        <?php
        if (!empty($generatedPassword)) {
            echo "Generated Password: " . htmlspecialchars($generatedPassword); 
        } elseif (!empty($_SESSION['allowedCharacters'])) {
            echo "Available Characters: " . htmlspecialchars(implode(', ', $_SESSION['allowedCharacters'])); 
        } else {
            echo "No characters added."; 
        }
        ?>
    </div>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>