<!DOCTYPE html>
<html>
<head>
    <title>Number Comparison Tool</title>
</head>
<body>
    <h1>Number Comparison Tool</h1>

    <?php
    // Define variables
    $number1 = '';
    $number2 = '';
    $result = '';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get input values from the form
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        // Use the ternary operator to determine the larger number
        $result = ($number1 > $number2) ? "The larger number is $number1." : "The larger number is $number2";
    }
    ?>

    <form method="post" action="">
        <label for="number1">Enter Number 1:</label>
        <input type="number" name="number1" id="number1" value="<?php echo $number1; ?>" required>
        
        <label for="number2">Enter Number 2:</label>
        <input type="number" name="number2" id="number2" value="<?php echo $number2; ?>" required>
        
        <input type="submit" value="Compare">
    </form>

    <?php
    // Display the result if available
    if ($result !== '') {
        echo "<p>$result</p>";
    }
    ?>
</body>
</html>
