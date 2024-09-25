<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Example</title>
</head>
<body>
    <h1>Welcome to My PHP Page</h1>
    <p>Today's date is: 
        <?php
            // PHP code to display the current date
            echo date("Y-m-d");
        ?>
    </p>
    
    <p>The result of 5 + 3 is: 
        <?php
            // PHP code to calculate and display a sum
            echo 5 + 3;
        ?>
    </p>
    
    <p>Here is a random number between 1 and 100: 
        <?php
            // PHP code to generate and display a random number
            echo rand(1, 100);
        ?>
    </p>
</body>
</html>

