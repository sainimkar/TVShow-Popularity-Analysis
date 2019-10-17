$(document).ready(function(){
  $.ajax({
    url: "http://localhost/dbmsproject/topsellingshowsdata.php",
    method: "GET",
    success: function(data) {
      console.log(data);


      var showname = [];
      var sales = [];

      for(var i in data) {
        showname.push( data[i].show_name);
        sales.push(data[i].show_sales);
      }

      var chartdata = {
        labels: showname,
        datasets : [
          {
            label: 'Show name',
            backgroundColor: poolColors(showname.length),
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 0.75)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: sales
          }
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata,
        options : {


          legend: {
            display: false          // Hides annoying dataset label
          },
          scales: {
            xAxes: [{

              categoryPercentage: 0.8,
              barPercentage: 0.8
            }],
          }
        }
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});

function dynamicColors() {
  console.log("worki");
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return "rgba(" + r + "," + g + "," + b + ", 0.5)";
}

function poolColors(a) {
  console.log("worki");
  var pool = [];
  for(i = 0; i < a; i++) {
    pool.push(dynamicColors());
  }

  console.log(pool);
  return pool;
}
