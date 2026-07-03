<?php require_once 'optimizer.php'; ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
    <form method="POST">
        <textarea name="code" placeholder="Wklej kod JS..."></textarea>
        <button type="submit">Optymalizuj</button>
    </form>

    <?php if ($_POST): 
        $input = $_POST['code'];
        $minified = CodeOptimizer::minify($input);
        $obfuscated = CodeOptimizer::obfuscate($minified);
    ?>
        <h3>Wynik:</h3>
        <textarea readonly><?php echo htmlspecialchars($obfuscated); ?></textarea>
    <?php endif; ?>
</body>
</html>
