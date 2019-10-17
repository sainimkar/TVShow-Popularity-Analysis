$(document).ready(function(){
    $.ajax({
        url: "http://localhost/dbmsproject/topsellingmoviesdata.php",
        method: "GET",
        success: function(data) {
            console.log(data);


            var moviename = [];
            var moviesales = [];

            for(var i in data) {
                moviename.push( data[i].movie_name);
                moviesales.push(data[i].movie_sales);
            }

            var chartdata = {
                labels: moviename,
                datasets : [
                    {

                        backgroundColor: poolColors(moviename.length),
                        borderColor: 'rgba(200, 200, 200, 0.75)',
                        hoverBackgroundColor: 'rgba(200, 200, 200, 0.75)',
                        hoverBorderColor: 'rgba(200, 200, 200, 1)',
                        data: moviesales
                    }
                ]
            };


            var ctx = $("#moviecanvas");

            var barGraph = new Chart(ctx, {
                type: 'bar',
                height: 200,
                data: chartdata,
                options : {

                    responsive:true,
                    maintainAspectRatio: false,
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
            console.log(error);
        }
    });
});

function dynamicColors() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return "rgba(" + r + "," + g + "," + b + ", 0.5)";
}

function poolColors(a) {
    var pool = [];
    for(i = 0; i < a; i++) {
        pool.push(dynamicColors());
    }
    console.log(pool);
    return pool;
}

