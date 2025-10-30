<!DOCTYPE html>
<html>
<head>
    <title>Maximum of Three Numbers</title>
</head>
<body>
    <h2>Find the Maximum of Three Numbers</h2>

    <form method="post">
        <label>Enter first number:</label>
        <input type="number" name="num1" required><br><br>

        <label>Enter second number:</label>
        <input type="number" name="num2" required><br><br>

        <label>Enter third number:</label>
        <input type="number" name="num3" required><br><br>

        <input type="submit" name="submit" value="Find Maximum">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $c = $_POST['num3'];

        $max = $a;

        if ($b > $max) {
            $max = $b;
        }

        if ($c > $max) {
            $max = $c;
        }

        echo "<h3>The maximum of $a, $b, and $c is: $max</h3>";
    }
    ?>
</body>
</html>
