<!DOCTYPE html>
<html>
<head>
    <title>Reverse a String</title>
</head>
<body>

<h2>Reverse a String Using Built-in Function</h2>

<form method="post">
    Enter a string: <input type="text" name="str" required><br><br>
    <input type="submit" value="Reverse">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['str'];
    $reversed = strrev($str);

    echo "<h3>Original String:</h3> $str";
    echo "<h3>Reversed String:</h3> $reversed";
}
?>

</body>
</html>
