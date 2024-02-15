const btn = document.getElementById('clickModal');
const modal = document.getElementById('registerModal');
const span = document.getElementsByClassName('close')[0];

btn.onclick = function () {
  modal.style.display = 'block';
};
span.onclick = function () {
  modal.style.display = 'none';
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
};

var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "horizontalBar",
  data: {
  labels: xValues,
  datasets: [{
    backgroundColor: barColors,
    data: yValues
  }]
},
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    },
    scales: {
      xAxes: [{ticks: {min: 10, max:60}}]
    }
  }
});
