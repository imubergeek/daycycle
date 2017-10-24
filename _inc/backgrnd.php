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
    $monthName = date('m');
    $seasons = array(
        'winter' => array(12,1,2),
        'spring' => array(3,4,5),
        'summer' => array(6,7,8),
        'autumn' => array (9,10,11)
        );

    foreach ($seasons AS $key => $monthArray) {
        if (in_array($monthName, $monthArray)){
            $season = $key;
            break;
        }

    }
    return $season;

    }


    ?>
<style> body {
    background-image: url(_img/bkg/<?php echo season().'/'.strtolower((timegreet()));
    ?>.jpg);
    background-repeat: repeat;
    background-attachment: scroll;

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

