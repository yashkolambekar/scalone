$.ajax({
  type: "GET",
  url: "../api.php",
  cache: false,
  success: function (data) {
    function formatDate(dateString) {
      let date = new Date(dateString);
      let options = { month: "short", day: "numeric" };
      return new Intl.DateTimeFormat("en-US", options).format(date);
    }

    let weightsData = JSON.parse(data);

    let chartLabels = [];
    let chartData = [];

    for (let i = 0; i < weightsData.length; i++) {
      chartLabels.push(formatDate(weightsData[i]["date"]));
      chartData.push(weightsData[i]["weight"]);
    }

    let last7 = chartData.slice(-7).reduce((a, b) => Number(a) + Number(b), 0);
    let avg7 = Math.round(last7 / 7);

    document.getElementById("current_weight").innerHTML = avg7 + "<span>kg</span>";

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
