<!--
Get the current time
Based on time of day(morning,afternoon, evening, night) change background to match
Based on the month, change to a different background
-->
<html lang="en">

<head>

</head>

<body>
    <?php

function timegreet() {
    date_default_timezone_set('America/New_York'); //Set timezone
    $hour = date('H'); //Get current time (24 hour)
    if ($hour >= '00' && $hour < '12') {$greeting = 'Morning';} //Morning: midnight to 11:59am
    elseif ($hour >= '12' && $hour < '17') {$greeting = 'Afternoon';} //Afternoon: 12:00pm to 5:00pm
    elseif ($hour >= '17' && $hour < '19') {$greeting = 'Evening';} // Evening: 5:01pm to 8:00pm
    else {$greeting = 'Night';} //8:01pm to Midnight
    return $greeting;
    }

function season() {
    $monthname = date('M');
    $monthname = strtolower($monthname);

    $images = array(
        'winter' => 'winter',
        'spring' => 'spring',
        'summer' => 'summer',
        'autumn' => 'autumn'
        );

    $seasons = array(
        'winter' => array('dec', 'jan', 'feb'),
        'spring' => array('mar', 'apr', 'may'),
        'summer' => array('jun', 'jul', 'aug'),
        'autumn' => array('sep', 'oct', 'nov')
        );

    foreach ($seasons AS $key => $montharray) {
	   if (in_array($monthname, $montharray)) {
           $season = $key;
           break;
       }
        return $key;
    }

    $background = $images[$key]; //Define background image based on season
    echo $background;

    }
    $bkImage = 'url(../img/bkg/'.season().'-'.(timegreet()).'.jpg)';
    echo $bkImage;
        ?>

        <style>
            body {
                background-image: url(../_img/bkg/<?php echo season().'-'.(timegreet());
                ?>.jpg);
                background-repeat: repeat;
                background-attachment: scroll;
                margin: 0px;
                padding: 0px;
            }

            #morning {
                background: rgba(0, 0, 0, 0);
                padding: 0px;
                margin: 0px;
                height: 100%;
                width: 100%;
            }


            #afternoon {
                background: rgba(0, 0, 0, 0);
                padding: 0px;
                margin: 0px;
                height: 100%;
                width: 100%;
            }

            #evening {
                background: rgba(0, 0, 0, 0);
                color: white;
                padding: 0px;
                margin: 0px;
                height: 100%;
                width: 100%;
            }

            #night {
                background: rgba(0, 0, 0, 0);
                color: white;
                padding: 0px;
                margin: 0px;
                height: 100%;
                width: 100%;
            }

        </style>
</body>

</html>
