/* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace()

  // Graphs
  
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart({
    type: 'line',
    data: {
      datasets: [{          
        
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })
}())