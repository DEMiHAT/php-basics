<!DOCTYPE html>
<html>
<head>
    <title>Factorial of a Number</title>
</head>
<body>
    <h2>Factorial Calculator</h2>

    <form method="post">
        <label>Enter a number:</label>
        <input type="number" name="num" required>
        <input type="submit" name="submit" value="Find Factorial">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];

        if ($num < 0) {
            echo "<p style='color:red;'>Factorial is not defined for negative numbers.</p>";
        } else {
            $fact = 1;
            for ($i = 1; $i <= $num; $i++) {
                $fact *= $i;
            }
            echo "<h3>Factorial of $num is: $fact</h3>";
        }
    }
    ?>
</body>
</html>


