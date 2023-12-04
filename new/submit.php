<div style="text-align:center; font-size:40px;">
<?php include "../db/db.php" ?>
<?php

    $weight =  $_POST["weight"] ?? "";
    $main_gym =  "";
    if($_POST["main_gym"] == "on"){
        $main_gym = 1;
    }else{
        $main_gym = 0;
    }
    $gym_option =  $_POST["gym_option"] ?? "";
    $no_junk =  "";
    if($_POST["no_junk"] == "on"){
        $no_junk = 1;
    }else{
        $no_junk = 0;
    }
    $no_junk_input =  $_POST["no_junk_input"] ?? "";
    $period =  "";
    if($_POST["period"] == "on"){
        $period = 1;
    }else{
        $period = 0;
    }
    $period_input =  $_POST["period_input"] ?? "";

    $check_existence_query = "SELECT * FROM `entries` WHERE `date` = DATE(NOW())";
    $check_existence = mysqli_query($db, $check_existence_query);

    if(mysqli_num_rows($check_existence) > 0){
        $query = "UPDATE `entries` SET weight='$weight', gym=$main_gym, gym_option='$gym_option', no_junk=$no_junk, no_junk_input='$no_junk_input', period=$period, period_input='$period_input', time=NOW() WHERE date=DATE(NOW())";
        $result = mysqli_query($db, $query);
        if($result){
            echo 'done';
        }
    }else{
        $query = "INSERT INTO `entries` (weight, gym, gym_option, no_junk, no_junk_input, period, period_input) VALUES ($weight, $main_gym, '$gym_option', $no_junk, '$no_junk_input', $period, '$period_input')";
        $result = mysqli_query($db, $query);
    }


?>

</div>