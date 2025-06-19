<?php
session_start();
$title = "Book Stock Management"; 
include(__DIR__ . '/../Components/header.php'); 
?>
<div class="main-container">
    <form method="post">
        <h3>Book Stock Management</h3>
        <label for="title">Enter Title:</label>
        <input type="text" name="title" id="title" value="<?= isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '' ?>" required>

        <label for="category">Enter Category:</label>
        <input type="text" name="category" id="category" value="<?= isset($_POST['category']) ? htmlspecialchars($_POST['category']) : '' ?>" required>

        <label for="year">Enter Publication Year:</label>
        <input type="number" name="year" id="year" value="<?= isset($_POST['year']) ? htmlspecialchars($_POST['year']) : '' ?>" required>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (!isset($_SESSION['books'])) {
        $_SESSION['books'] = [];
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
        $newTitle = htmlspecialchars($_POST['title'] ?? '');
        $newCategory = htmlspecialchars($_POST['category'] ?? '');
        $newYear = htmlspecialchars($_POST['year'] ?? '');

        $_SESSION['books'][] = [ 
            'title' => $newTitle,
            'category' => $newCategory,
            'year' => $newYear
        ];
    }

    if (isset($_POST['remove']) && is_numeric($_POST['remove'])) {
        $index = (int)$_POST['remove'];
        if (isset($_SESSION['books'][$index])) {
            unset($_SESSION['books'][$index]);
            $_SESSION['books'] = array_values($_SESSION['books']); 
        }
    }
    ?>

    <div class="books-container">
        <h4>Available Books:</h4>
        <?php if (empty($_SESSION['books'])): ?>
            <p>No books registered.</p>
        <?php else: ?>
            <?php foreach ($_SESSION['books'] as $index => $book): ?>
                <div class="book-item">
                    <strong>Title:</strong> <?= htmlspecialchars($book['title']) ?><br>
                    <strong>Category:</strong> <?= htmlspecialchars($book['category']) ?><br>
                    <strong>Publication Year:</strong> <?= htmlspecialchars($book['year']) ?><br>

                    <form method="post">
                        <input type="hidden" name="remove" value="<?= $index ?>">
                        <button type="submit">Remove</button>
                    </form>
                </div><br>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>