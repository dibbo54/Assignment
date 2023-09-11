<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>

    <?php
    // Define variables
    $temperature = '';
    $converted_temperature = '';
    $conversion_type = '';
    
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get input values from the form
        $temperature = $_POST["temperature"];
        $conversion_type = $_POST["conversion_type"];
        
        // Convert temperature based on the selected conversion type
        if ($conversion_type == "celsius_to_fahrenheit") {
            $converted_temperature = ($temperature * 9/5) + 32;
        } elseif ($conversion_type == "fahrenheit_to_celsius") {
            $converted_temperature = ($temperature - 32) * 5/9;
        }
    }
    ?>

    <form method="post" action="">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" step="any" name="temperature" id="temperature" value="<?php echo $temperature; ?>" required>
        
        <label for="conversion_type">Select Conversion:</label>
        <select name="conversion_type" id="conversion_type">
            <option value="celsius_to_fahrenheit" <?php if ($conversion_type == "celsius_to_fahrenheit") echo "selected"; ?>>Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius" <?php if ($conversion_type == "fahrenheit_to_celsius") echo "selected"; ?>>Fahrenheit to Celsius</option>
        </select>
        
        <input type="submit" value="Convert">
    </form>

    <?php
    // Display the converted temperature if available
    if ($converted_temperature !== '') {
        echo "<p>Converted Temperature: $converted_temperature</p>";
    }
    ?>
</body>
</html>
