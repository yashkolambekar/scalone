<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scalone</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <?php include "components/nav/nav.php" ?>

    <section class="sec_1" id="currentandgraph">
        <div id="current_wrapper">
            <p id='current_weight'>45<span>kg</span></p>
            <p id="current_average">Average (7 days)</p>
        </div>
        <div id="graph_wrapper">
            <canvas id='weight_chart'></canvas>
        </div>
    </section>

    <section class="sec_2" id="quick_stats_wrapper">
        <div class="quick_stat"><p>Gym Streak: 12🔥</p></div>
        <div class="quick_stat"><p>Weightloss streak: 45📉</p></div>
        <div class="quick_stat"><p>No Junk Streak: 33💖</p></div>
    </section>

    <br>

    <section class="sec_2" id="entries_wrapper">
        
        <div class="ew_div" id="all_entries"><p>All Entries</p></div>
        <div class="ew_div" id="new_entry"><p>New Entry</p></div>
    </section>

</body>
<script src="js/index.js"></script>
</html>