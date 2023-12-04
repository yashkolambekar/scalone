<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Entry</title>
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/entries.css">
</head>

<body>
    <?php include "../components/nav/nav.php" ?>
    <?php include "../db/db.php" ?>
    <section id="entries_wrapper">

        <div class="head_div">
            <p>Date</p>
        </div>
        <div class="head_div">
            <p>Weight</p>
        </div>
        <div class="head_div">
            <p>Gym</p>
        </div>
        <div class="head_div">
            <p>Workout</p>
        </div>
        <div class="head_div">
            <p>No Junk</p>
        </div>
        <div class="head_div">
            <p>Food</p>
        </div>
        <div class="head_div">
            <p>Period</p>
        </div>
        <div class="head_div">
            <p>Condition</p>
        </div>

        <?php

        $page = 1;
        if(isset($_GET["page"])){
            $page =(int) $_GET["page"];
        }

        $limit = ($page - 1) * 7;

        $query = "SELECT * FROM `entries` ORDER BY `date` DESC LIMIT $limit, 7";
        $result = mysqli_query($db, $query);

        if($result){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class='div_first'>
                <p>" . $row["date"] ."</p>
            </div>
            <div>
                <p class='p_weight'>". $row["weight"] ."</p>
            </div>
            <div>
                ";
            if($row["gym"] == 1){
                echo "<div class='green_ball'></div>";
            }
            echo "
            </div>
            <div>
                <p>". $row["gym_option"] ."</p>
            </div>
            <div>
                <p>";
                if($row["no_junk"] == 1){
                    echo "<div class='green_ball'></div>";
                }
                echo "</p>
            </div>
            <div>
                <p>". $row["no_junk_input"] ."</p>
            </div>
            <div>
                <p>";
                if($row["period"] == 1){
                    echo "<div class='green_ball'></div>";
                }
                echo "</p>
            </div>
            <div class='div_last'>
                <p>" . $row["period_input"] ."</p>
            </div>";
            }
        }
        ?>
    </section>
    <section id="links_wrapper">
        <?php
        if($page != 1){
            echo '<a class="links" href="?page=';
            echo $page - 1;
            echo '">Prev</a>';
        }
        ?>
        <a class="links" href="?page=<?php echo $page + 1 ?>">Next</a>
    </section>
</body>
<script src="../js/entries.js"></script>

</html>