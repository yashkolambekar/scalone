<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scalone</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
        <div class="quick_stat">
            <p>Gym Streak: <span id="gym_streak"></span>🔥</p>
        </div>
        <div class="quick_stat">
            <p>Weightloss streak: <span id="weightloss_streak"></span>📉</p>
        </div>
        <div class="quick_stat">
            <p>No Junk Streak: <span id="no_junk_streak"></span>💖</p>
        </div>
    </section>

    <br>

    <section class="sec_2" id="entries_wrapper">

        <div class="ew_div" id="all_entries"><a target="_blank" href="entries">All Entries</a></div>
        <div class="ew_div" id="new_entry"><a href="new">New Entry</a></div>
    </section>

</body>
<script src="js/index.js"></script>
<script>
    navigator.serviceWorker.register("sw.js");
    function enableNotif() {
        Notification.requestPermission().then((permission) => {
            if (permission == 'granted') {
                navigator.serviceWorker.ready.then((sw) => {
                    sw.pushManager.subscribe({
                        userVisibleOnly: true,
                        applicationServerKey: "BKO6jZYLPd815FsrIFABJuIuT2CLFrXgZ7-42XhnUiNe7wX9aUM4AQ27IHL5Zd-Kw5VCBoV6eigS0qe5Heop5gU"
                    }).then((subscription) => {
                        console.log(JSON.stringify(subscription));
                    })
                })
            }
        })
    }
    enableNotif();
</script>

</html>