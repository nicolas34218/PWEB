<?php
session_start();
$title = "User ID Consolidation"; 
include(__DIR__ . '/../Components/header.php'); 

if (!isset($_SESSION['sources'])) {
    $_SESSION['sources'] = [
        'A' => ['101', '105', '102'],
        'B' => ['103', '101', '106']
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_A'])) {
        $newId = trim(htmlspecialchars($_POST['new_id_A'] ?? ''));
        if (!empty($newId) && !in_array($newId, $_SESSION['sources']['A'])) {
            $_SESSION['sources']['A'][] = $newId;
        }
    }

    if (isset($_POST['add_B'])) {
        $newId = trim(htmlspecialchars($_POST['new_id_B'] ?? ''));
        if (!empty($newId) && !in_array($newId, $_SESSION['sources']['B'])) {
            $_SESSION['sources']['B'][] = $newId;
        }
    }
}

$allIds = array_merge($_SESSION['sources']['A'], $_SESSION['sources']['B']);
$allIds = array_unique($allIds);
sort($allIds); 
?>

<div class="main-container">
    <h3>User ID Consolidation</h3>

    <div style="display: flex; gap: 20px; margin-bottom: 20px;">
        <div style="flex: 1;">
            <h4>Source A</h4>
            <form method="post">
                <label for="new_id_A">Add ID for Source A:</label>
                <input type="text" name="new_id_A" id="new_id_A" required>
                <button type="submit" name="add_A">Add</button>
            </form>
            <ul>
                <?php foreach ($_SESSION['sources']['A'] as $id): ?>
                    <li><?= htmlspecialchars($id) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div style="flex: 1;">
            <h4>Source B</h4>
            <form method="post">
                <label for="new_id_B">Add ID for Source B:</label>
                <input type="text" name="new_id_B" id="new_id_B" required>
                <button type="submit" name="add_B">Add</button>
            </form>
            <ul>
                <?php foreach ($_SESSION['sources']['B'] as $id): ?>
                    <li><?= htmlspecialchars($id) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div>
        <h4>System IDs (combined and unique):</h4>
        <?php
        if (empty($allIds)) {
            echo "No IDs registered.";
        } else {
            foreach ($allIds as $id) {
                echo htmlspecialchars($id) . "<br>";
            }
        }
        ?>
    </div>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>