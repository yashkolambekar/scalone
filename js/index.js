const ctx = document.getElementById('weight_chart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["0 march", " march", 2, 3, 4, 5, 6,7, 8, 9, 10, 11, 12],
      datasets: [{
        label: 'Weight',
        data: [12, 19.5, 3, 5, 2, 3, 32, 21, 23, 9, 8, 12, 14],
        borderColor: '#AADC93',
        borderWidth: 2,
      }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true
        }
      },
      plugins:{
        legend: false
      }
    }
  });