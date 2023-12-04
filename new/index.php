<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Entry</title>
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/new.css">
</head>

<body>
    <?php include "../components/nav/nav.php" ?>
    <section class="sec_1" id="form_wrapper">
        <form action="submit.php" method="post">
            <label for="">
                <input type="number" name="weight" id="weight_input" placeholder="12.55" step=".01" required>
                <p>Today's weight</p>
            </label>
            <br>
            <div class="multi_option_wrapper">
                <input type="checkbox" name="main_gym" id="main_gym" class="checkbox main_checkbox_input">
                <label for="main_gym" class="main_checkbox">
                    <p>Gym</p>
                </label>
                <div class="child_checkbox_wrapper">
                    <input type="radio" name="gym_option" id="gym_upper" class="checkbox" value="upper">
                    <label for="gym_upper" class="child_checkbox" >
                        <p>Upper</p>
                    </label>
                    <input type="radio" name="gym_option" id="gym_lower" class="checkbox" value="lower">
                    <label for="gym_lower" class="child_checkbox" >
                        <p>Lower</p>
                    </label>
                    <input type="radio" name="gym_option" id="gym_abs" class="checkbox" value="abs">
                    <label for="gym_abs" class="child_checkbox" >
                        <p>Abs</p>
                    </label>
                    <input type="radio" name="gym_option" id="gym_cardio" class="checkbox" value="cardio">
                    <label for="gym_cardio" class="child_checkbox" >
                        <p>Cardio</p>
                    </label>
                </div>
            </div>
            <div class="multi_option_wrapper">
                <input type="checkbox" name="no_junk" id="main_no_junk" class="checkbox main_checkbox_input">
                <label for="main_no_junk" class="main_checkbox" >
                    <p>No Junk</p>
                </label>
                <div class="child_checkbox_wrapper">
                    <input type="text" name="no_junk_input" class="child_input" id="" placeholder="Chapati, Soyabean, Dahi" maxlength="255">
                </div>
            </div>
            <div class="multi_option_wrapper">
                <input type="checkbox" name="period" id="main_period" class="checkbox main_checkbox_input">
                <label for="main_period" class="main_checkbox">
                    <p>Period</p>
                </label>
                <div class="child_checkbox_wrapper">
                    <input type="text" name="period_input" class="child_input" id="" placeholder="No severe cramps" maxlength="255">
                </div>
            </div>
            <br>
            <button>Submit</button>
        </form>
    </section>
</body>
<script src="../js/new.js"></script>

</html>