<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Add or Multiply Two Numbers</h2>

<form method="post">
    Enter first number: <input type="number" name="num1" required><br><br>
    Enter second number: <input type="number" name="num2" required><br><br>

    <input type="submit" name="operation" value="Add">
    <input type="submit" name="operation" value="Multiply">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    if ($operation == "Add") {
        $result = $num1 + $num2;
        echo "<h3>Result (Addition): $result</h3>";
    } elseif ($operation == "Multiply") {
        $result = $num1 * $num2;
        echo "<h3>Result (Multiplication): $result</h3>";
    }
}
?>

</body>
</html>
