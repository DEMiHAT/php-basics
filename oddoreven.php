<!DOCTYPE html>
<html>
<head>
    <title>Odd or Even Checker</title>
</head>
<body>
    <h2>Check Whether a Number is Odd or Even</h2>

    <form method="post">
        <label>Enter a number:</label>
        <input type="number" name="num" required>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];

        if ($num % 2 == 0) {
            echo "<h3>$num is an Even number.</h3>";
        } else {
            echo "<h3>$num is an Odd number.</h3>";
        }
    }
    ?>
</body>
</html>
