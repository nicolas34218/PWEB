<?php
session_start();
$title = "Digital Card Game"; 
include(__DIR__ . '/../Components/header.php'); 

if (!isset($_SESSION['cardDeck'])) {
    $_SESSION['cardDeck'] = [
        "Queen of Clubs", 
        "Ace of Diamonds",
        "7 of Hearts", 
        "10 of Spades" 
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    $newCard = trim(htmlspecialchars($_POST['new_card'] ?? ''));
    if (!empty($newCard)) {
        $_SESSION['cardDeck'][] = $newCard;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['shuffle'])) {
    shuffle($_SESSION['cardDeck']);
}
?>

<div class="main-container">
    <form method="post">
        <h3>Digital Card Game</h3>

        <label for="new_card">Add New Card:</label>
        <input type="text" name="new_card" id="new_card">
        <button type="submit" name="add">Add Card</button>

        <div style="margin-top: 10px;">
            <button type="submit" name="shuffle">Shuffle Cards</button>
        </div>
    </form>

    <div style="margin-top: 20px;">
        <h4>Card Deck:</h4>
        <?php
        if (empty($_SESSION['cardDeck'])) {
            echo "The deck is empty.";
        } else {
            foreach ($_SESSION['cardDeck'] as $card) {
                echo htmlspecialchars($card) . "<br>";
            }
        }
        ?>
    </div>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>