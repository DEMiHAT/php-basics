<!DOCTYPE html>
<html>
<head>
    <title>Armstrong Number Checker</title>
</head>
<body>
    <h2>Check Whether a Number is an Armstrong Number</h2>

    <form method="post">
        <label>Enter a number:</label>
        <input type="number" name="num" required>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        $sum = 0;
        $temp = $num;
        $digits = strlen((string)$num);

        while ($temp > 0) {
            $rem = $temp % 10;
            $sum += pow($rem, $digits);
            $temp = (int)($temp / 10);
        }

        if ($sum == $num) {
            echo "<h3>$num is an Armstrong number.</h3>";
        } else {
            echo "<h3>$num is NOT an Armstrong number.</h3>";
        }
    }
    ?>
</body>
</html>
