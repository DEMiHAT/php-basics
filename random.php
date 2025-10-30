<!DOCTYPE html>
<html>
<head>
    <title>Random Number Generator</title>
</head>
<body>

<h2>Generate a Random Number (500 - 1000)</h2>

<form method="post">
    <input type="submit" name="generate" value="Generate Random Number">
</form>

<?php
if (isset($_POST['generate'])) {
    $randomNumber = rand(500, 1000);
    echo "<h3>Random Number: $randomNumber</h3>";
}
?>

</body>
</html>
