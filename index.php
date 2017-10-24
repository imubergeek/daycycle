<!DOCTYPE html>
<html>

<head>
    <title>Day/Season Cycle</title>
</head>

<body>
    <?php


    include('_inc/backgrnd.php');



    //For testing
        echo '<p>Good '.timegreet().',<br> The time is currently ';
            echo date('h:i:a');
            echo '<br> The Date is ';
            echo date('D, M d, Y');
            echo '<br> The season is ';
            echo season();
    echo '</p>';
    //For testing
        ?>


</body>

</html>
