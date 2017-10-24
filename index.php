<!DOCTYPE html>
<html>

<head>
    <title>Day/Season Cycle</title>
</head>

<body>
    <?php
        include('_inc/backgrnd.php'); //Display background based on weather
        include('_inc/functions.php'); //Load Functions
        include('_inc/time.php'); // Load active time
    ?>

        <p onload="starttime()">
            <div id="txt"></div>
        </p>
        <p>
            Good
            <?php echo timegreet(); ?>,<br> The time is currently
            <?php echo date('h:i:a'); ?>
            <br> The Date is
            <?php echo date('D, M d, Y'); ?>
            <br> The season is
            <?php echo season(); ?>
        </p>

</body>

</html>
