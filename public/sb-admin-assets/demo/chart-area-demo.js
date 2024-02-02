// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Mar 1", "Mar 2", "Mar 3", "Mar 4", "Mar 5"],
    datasets: [{
      label: "Sessions",
    //   LABEL
      lineTension: 0.3,
    //   Ketajaman Garis
      backgroundColor: "rgba(2,117,216,0.2)",
    //   Warna Latar
      borderColor: "rgba(2,117,216,1)",
    //   Warna Garis
      pointRadius: 5,
    //   Besar Bulatan
      pointBackgroundColor: "rgba(2,117,216,1)",
    //   Warna Bulatan
      pointBorderColor: "rgba(255,255,255,0.8)",
    //   Garis Tepi Bulatan
      pointHoverRadius: 5,
    //   Garis Tepi pada saat Hover

      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [10000, 30162, 26263, 18394, 18287],
    //   DATA
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 40000,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
