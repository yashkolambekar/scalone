$.ajax({
  type: "GET",
  url: "../api.php",
  cache: false,
  success: function (data) {

    // Functions
    function formatDate(dateString) {
      let date = new Date(dateString);
      let options = { month: "short", day: "numeric" };
      return new Intl.DateTimeFormat("en-US", options).format(date);
    }

    // Streaks init
    let gym_data = []
    let gym_streak = 0;
    let no_junk_data = [];
    let no_junk_streak = 0;
    let weightloss_data = [];
    let weightloss_streak = 0;

    // Labels and Data
    let weightsData = JSON.parse(data);
    let chartLabels = [];
    let chartData = [];
    for (let i = 0; i < weightsData.length; i++) {
      let pos = weightsData.length - i - 1;
      chartLabels.push(formatDate(weightsData[pos]["date"]));
      chartData.push(weightsData[pos]["weight"]);
      gym_data.push(weightsData[i]["gym"])
      no_junk_data.push(weightsData[i]["no_junk"])
      weightloss_data.push(weightsData[i]["weight"])
    }


    console.log(gym_data);

    // Streaks calculations
    for(let i = 0; i < weightsData.length; i++){
      if(gym_data[i] == 0){
        break;
      }
      gym_streak += Number(gym_data[i]);
    }
    for(let i = 0; i < weightsData.length; i++){
      if(no_junk_data[i] == 0){
        break;
      }
      no_junk_streak += Number(no_junk_data[i]);
    }
    for(let i = 1; i < weightsData.length; i++){
      if(parseInt(weightloss_data[i - 1]) <= parseInt(weightloss_data[i])){
        weightloss_streak += 1;
      }else{
        break;
      }
    }

    console.log(weightloss_data);
    

    // Streak assignments
    document.getElementById("gym_streak").innerText = gym_streak;
    document.getElementById("no_junk_streak").innerText = no_junk_streak;
    document.getElementById("weightloss_streak").innerText = weightloss_streak;

    // 7 days average
    let last7 = chartData.slice(-7).reduce((a, b) => Number(a) + Number(b), 0);
    let avg7 = Math.round(last7 / 7);
    document.getElementById("current_weight").innerHTML = avg7 + "<span>kg</span>";

    // Chart Constructor
    const ctx = document.getElementById("weight_chart");
    new Chart(ctx, {
      type: "line",
      data: {
        labels: chartLabels,
        datasets: [
          {
            label: "Weight",
            data: chartData,
            borderColor: "#AADC93",
            borderWidth: 2,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: true,
          },
        },
        plugins: {
          legend: false,
        },
      },
    });
  },
});
