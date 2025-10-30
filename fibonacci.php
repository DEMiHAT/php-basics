<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>
</head>
<body>

<h2>Fibonacci Series Generator</h2>

<form method="post">
    Enter number of terms: <input type="number" name="n" required>
    <input type="submit" value="Generate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['n'];

    $num1 = 0;
    $num2 = 1;

    echo "<h3>Fibonacci Series up to $n terms:</h3>";

    for ($i = 1; $i <= $n; $i++) {
        echo $num1 . " ";
        $next = $num1 + $num2;
        $num1 = $num2;
        $num2 = $next;
    }
}
?>

</body>
</html>
