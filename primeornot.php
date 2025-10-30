<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h2>Check Whether a Number is Prime or Not</h2>

    <form method="post">
        <label>Enter a number:</label>
        <input type="number" name="num" required>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];

        if ($num <= 1) {
            echo "<h3>$num is NOT a prime number.</h3>";
        } else {
            $isPrime = true;

            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }

            if ($isPrime)
                echo "<h3>$num is a Prime number.</h3>";
            else
                echo "<h3>$num is NOT a Prime number.</h3>";
        }
    }
    ?>
</body>
</html>
