<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <h2>POSITIVE AND NEGATIVE</h2>
    <?php
    echo checkPN(-5);
    echo '<br>';
    echo checkPN(5);
    ?>
</body>
</html>