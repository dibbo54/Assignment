<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <h1>Even or Odd Checker</h1>

    <?php
    // Define variables
    $number = '';
    $result = '';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get input value from the form
        $number = $_POST["number"];

        // Check if the number is even or odd
        if ($number % 2 == 0) {
            $result = "The number $number is even.";
        } else {
            $result = "The number $number is odd.";
        }
    }
    ?>

    <form method="post" action="">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" id="number" value="<?php echo $number; ?>" required>
        
        <input type="submit" value="Check">
    </form>

    <?php
    // Display the result if available
    if ($result !== '') {
        echo "<p>$result</p>";
    }
    ?>
</body>
</html>
