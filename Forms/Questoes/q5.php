<?php
session_start();
$title = "Environmental Monitoring"; 
include(__DIR__ . '/../Components/header.php'); 

if (!isset($_SESSION['observedSpecies'])) {
    $_SESSION['observedSpecies'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    $newSpecies = trim(htmlspecialchars($_POST['new_species'] ?? ''));
    if (!empty($newSpecies)) {
        $_SESSION['observedSpecies'][] = $newSpecies; 
    }
}

$verificationResult = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verify'])) {
    $speciesToVerify = trim(htmlspecialchars($_POST['species_to_verify'] ?? ''));
    if (!empty($speciesToVerify)) {
        $found = false;
        foreach ($_SESSION['observedSpecies'] as $species) {
            if (strcasecmp($species, $speciesToVerify) === 0) {
                $found = true;
                break;
            }
        }
        $verificationResult = $found
            ? "<div class='success'>Species '$speciesToVerify' REGISTERED!</div>"
            : "<div class='error'>Species '$speciesToVerify' NOT REGISTERED!</div>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['clear'])) {
    $_SESSION['observedSpecies'] = [];
    $verificationResult = '<div class="info">Species list has been reset!</div>';
}
?>

<div class="main-container">
    <h3>Registration of Observed Species</h3>

    <div class="form-container">
        <form method="post" class="form-section">
            <h4>Add New Species</h4>
            <label for="new_species">Species Name:</label>
            <input type="text" name="new_species" id="new_species" required>
            <button type="submit" name="add">Add Species</button>
        </form>

        <form method="post" class="form-section">
            <h4>Verify Species</h4>
            <label for="species_to_verify">Species Name:</label>
            <input type="text" name="species_to_verify" id="species_to_verify" required>
            <button type="submit" name="verify">Verify Species</button>
        </form>

        <form method="post" class="form-section">
            <h4>Management</h4>
            <button type="submit" name="clear">Clear All Species</button>
        </form>
    </div>

    <?= $verificationResult ?>

    <div class="result">
        <div class="species">
            <h4>All Registered Species:</h4>
            <?php if (empty($_SESSION['observedSpecies'])): ?>
                <p>No species registered yet.</p>
            <?php else: ?>
                <ul>
                    <?php foreach ($_SESSION['observedSpecies'] as $species): ?>
                        <li><?= htmlspecialchars($species) ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>

        <div class="species">
            <h4>Unique Registered Species:</h4>
            <?php
            $uniqueSpecies = array_unique($_SESSION['observedSpecies']);
            if (empty($uniqueSpecies)): ?>
                <p>No unique species registered.</p>
            <?php else: ?>
                <ul>
                    <?php foreach ($uniqueSpecies as $species): ?>
                        <li><?= htmlspecialchars($species) ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include(__DIR__ . '/../Components/footer.php'); ?>