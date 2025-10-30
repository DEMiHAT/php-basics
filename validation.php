<!DOCTYPE html>
<html>
<head>
    <title>Form Validation in PHP</title>
</head>
<body>

<h2>PHP Form Validation Example</h2>

<form method="post" action="">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Age: <input type="text" name="age"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = trim($_POST['age']);
    $errors = [];

    // Check empty fields
    if (empty($name) || empty($email) || empty($age)) {
        $errors[] = "All fields are required.";
    }

    // Validate name length
    if (!empty($name) && strlen($name) < 3) {
        $errors[] = "Name must be at least 3 characters long.";
    }

    // Validate email format
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate age as numeric
    if (!empty($age) && !is_numeric($age)) {
        $errors[] = "Age must be a number.";
    }

    // Display results
    if (empty($errors)) {
        echo "<h3 style='color:green;'>Form submitted successfully!</h3>";
        echo "Name: $name <br>Email: $email <br>Age: $age";
    } else {
        echo "<h3 style='color:red;'>Errors:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }
}
?>

</body>
</html>
