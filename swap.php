<!DOCTYPE html>
<html>
<head>
    <title>Swap Two Numbers</title>
</head>
<body>

<h2>Swap Two Numbers Using Function</h2>

<form method="post">
    Enter first number: <input type="number" name="a" required><br><br>
    Enter second number: <input type="number" name="b" required><br><br>
    <input type="submit" value="Swap">
</form>

<?php
function swapValues(&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];

    echo "<h3>Before Swapping:</h3>";
    echo "a = $a, b = $b<br><br>";

    swapValues($a, $b);

    echo "<h3>After Swapping:</h3>";
    echo "a = $a, b = $b";
}
?>

</body>
</html>
