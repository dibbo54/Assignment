<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>

    <?php
    // Define variables
    $score1 = '';
    $score2 = '';
    $score3 = '';
    $average = '';
    $grade = '';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get input values from the form
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];

        // Calculate the average
        $average = ($score1 + $score2 + $score3) / 3;

        // Determine the grade based on the average
        if ($average >= 90) {
            $grade = 'A';
        } elseif ($average >= 80) {
            $grade = 'B';
        } elseif ($average >= 70) {
            $grade = 'C';
        } elseif ($average >= 60) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="score1">Enter Test Score 1:</label>
        <input type="number" step="any" name="score1" id="score1" value="<?php echo $score1; ?>" required>
        
        <label for="score2">Enter Test Score 2:</label>
        <input type="number" step="any" name="score2" id="score2" value="<?php echo $score2; ?>" required>
        
        <label for="score3">Enter Test Score 3:</label>
        <input type="number" step="any" name="score3" id="score3" value="<?php echo $score3; ?>" required>
        
        <input type="submit" value="Calculate">
    </form>

    <?php
    // Display the average and corresponding grade if available
    if ($average !== '') {
        echo "<p>Average Score: $average</p>";
        echo "<p>Letter Grade: $grade</p>";
    }
    ?>
</body>
</html>
