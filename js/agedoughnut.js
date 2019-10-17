$(document).ready(function(){

    $.ajax({
        url : "http://localhost/dbmsproject/age-data.php",
        type : "GET",
        success : function(data) {

            console.log(data);

            var count = [];


            var len = data.length;

            for (var i = 0; i < len; i++) {

                    count.push(data[i].count);

            }
            console.log(count);
            var ctx1 = $("#doughnut-chartcanvas-1");


            var data1 = {
                labels : ["age less than 18", "age less than 35","age less than 75"],
                datasets : [
                    {
                        label : "TeamA score",
                        data : count,
                        backgroundColor : [
                            "#DEB887",
                            "#A9A9A9",
                            "#DC143C"
                        ],
                        borderColor : [
                            "#CDA776",
                            "#989898",
                            "#CB252B"
                        ],
                        borderWidth : [1, 1, 1]
                    }
                ]
            };



            var options1 = {
                title : {
                    display : true,
                    position : "top",
                    text : "Age",
                    fontSize : 18,
                    fontColor : "#111"
                },
                legend : {
                    display : true,
                    position : "bottom"
                }
            };



            var chart1 = new Chart( ctx1, {
                type : "doughnut",
                data : data1,
                options : options1
            } );


        },
        error : function(data) {

            console.log(data);

        }
    });

})