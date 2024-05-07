<!DOCTYPE html>
<html>
<head>
    <title>Input Form</title>
</head>
<body>
    <h2>Enter your name:</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="name">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        echo "<h3>Welcome, $name!</h3>";
    }
    ?>
</body>
</html>
