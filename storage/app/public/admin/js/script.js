$(document).ready(function () {
  let registerUser = $("#registeredUsers");
  let registerCart = new Chart(registerUser, {
    type: "line",
    data: {
      label: ["", "", "", "", "", ""],
      datasets: [
        {
          data: [15333, 21555, 18496, 24200, 10600, 15600],
          backgroundColor: "transparent",
          borderColor: "#fff",
          borderWidth: 2,
          pointBackgroundColor: "#fff",
        },
      ],
    },
    options: {
      layout: {
        padding: {
          left: 5,
          right: 5,
        },
      },
      scales: {
        yAxes: [
          {
            display: false,
          },
        ],
        xAxes: [
          {
            display: false,
          },
        ],
      },
      legend: {
        display: false,
      },
    },
  });
});
