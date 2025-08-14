<?php

$age = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sticky Age Form</title>
</head>
<body>
    <h2>Enter Your Age</h2>
    <form method="post" action="">
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" value="<?php echo htmlspecialchars($age); ?>">
        <button type="submit">Submit</button>
    </form>

    <?php if ($age !== ""): ?>
        <p>You entered: <?php echo htmlspecialchars($age); ?></p>
    <?php endif; ?>
</body>
</html>

