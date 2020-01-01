let ctx = document.getElementById('myChart').getContext('2d');
let labels = ['BSCE', 'BSEE', 'BSECE', 'BSCPE', 'BSME'];
let colorHex = ['#09549e', '#c7c91a', '#ab2811', '#34bfa3', '#a2b0a6'];

let myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    datasets: [{
      data: [923, 730, 400, 520, 324],
      backgroundColor: colorHex
    }],
    labels: labels
  },
  options: {
    responsive: true,
    legend: {
      display: 'true',
      position: 'right',
      labels: {
        fontColor: '#fff',
        fullWidth: 'false'
      }
    },
    plugins: {
      datalabels: {
        color: '#fff',
        anchor: 'start',
        align: 'right',
        offset: -10,
        borderWidth: 2,
        borderColor: '#fff',
        borderRadius: 25,
        backgroundColor: (context) => {
          return context.dataset.backgroundColor;
        },
        font: {
          weight: 'bold',
          size: '10'
        },
        formatter: (value) => {
          return value;
        }
      }
    }
  }
})