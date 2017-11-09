<!DOCTYPE html>
<!--
Day, month, and season cycler
Purpose: Determine the time of day, and the season. Display appropriate backgrounds.
For use across multiple sites as an include.
-->
<html>

<head>
    <?php date_default_timezone_set('America/New_York'); //Set timezone ?>
    <style>
        body {
            background: url('_img/bkg/<?php echo season().'_'.strtolower(timeGreet()); ?>.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0px;
            padding: 0px;
        }

        .footer {
            background: rgba(0, 0, 0, .2);
            color: white;
            padding: 5px;
            position: absolute;
            bottom: 5px;
        }

    </style>
</head>

<body>
    <?php
    $monthNum = date('m');
    $dayNum = date('d');


    function timeGreet(){
        /*Select greeting based on time of day */
        $hour = date('H'); //Get current time (24 hour)
        if ($hour >= '00' && $hour < '12') {$greeting = 'Morning';} //Morning: midnight to 11:59am
        elseif ($hour >= '12' && $hour < '17') {$greeting = 'Afternoon';} //Afternoon: 12:00pm to 5:00pm
        elseif ($hour >= '17' && $hour < '19') {$greeting = 'Evening';} // Evening: 5:01pm to 8:00pm
        else {$greeting = 'Night';} //8:01pm to Midnight
        return $greeting;
    }

    function season(){
        $monthName = date('M');

        $seasons = array(
        'winter' => array('dec', 'jan', 'feb'),
        'spring' => array('mar', 'apr', 'may'),
        'summer' => array('jun', 'jul', 'aug'),
        'autumn' => array('sep', 'oct', 'nov')
        );

        foreach ($seasons AS $key => $monthArray) {
            if (in_array($monthName, $monthArray)) {
                $season = $key;
                break;
            }
        }
        return $key;
    }

    echo '<div class="footer">';
    echo 'Good '.timeGreet().', ';
    echo 'Today is '.$monthNum;
    echo '-'.$dayNum;
    echo '-'.date('y');
    echo ' and the season is '.ucfirst(season()).'<br>';
    echo '</div>';
    ?>
</body>

</html>
