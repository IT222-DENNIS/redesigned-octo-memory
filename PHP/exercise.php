<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>EXERCISE</h1>
    <h3><?php writemsg(); ?></h3>
    <br>
    <?php familyname("John","1998"); ?>
    <br>
    <?php familyname("Carlo","2002"); ?>
    <br>
    <?php
    setHeight(150);
    setHeight();
    ?>
    <br>
    <?php echo sum(20,55); ?>
</body>
</html>