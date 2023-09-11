<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>

    <form method="post" action="">
        Enter Temperature (in Celsius): <input type="number" step="0.01" name="temperature" required><br><br>
        <input type="submit" name="check" value="Check Weather">
    </form>

    <?php
    if(isset($_POST['check'])){
        $temperature = floatval($_POST['temperature']);

        // Provide weather information based on the temperature range
        if ($temperature < 0) {
            echo "<p>It's freezing!</p>";
        } elseif ($temperature >= 0 && $temperature < 15) {
            echo "<p>It's cool.</p>";
        } elseif ($temperature >= 15 && $temperature < 25) {
            echo "<p>It's warm.</p>";
        } else {
            echo "<p>It's hot!</p>";
        }
    }
    ?>
</body>
</html>
