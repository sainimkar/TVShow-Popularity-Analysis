$(document).ready(function(){

    $.ajax({
        url : "http://localhost/dbmsproject/region-data.php",
        type : "GET",
        success : function(data) {

            console.log(data);

            var count = [];

            var len = data.length;

            for (var i = 0; i < len; i++) {

                count.push(data[i].count);

            }
            console.log(count);
            var ctx1 = $("#doughnut-chartcanvas-3");


            var data1 = {
                labels : ["India", "USA","UK"],
                datasets : [
                    {
                        label : "Based on Region",
                        data : count,
                        backgroundColor : [
                            "#DEB887",
                            "#F4A460",
                            "#2E8B57"
                        ],
                        borderColor : [
                            "#CDA776",
                            "#E39371",
                            "#1D7A46"
                        ],
                        borderWidth : [1, 1, 1]
                    }
                ]
            };



            var options1 = {
                title : {
                    display : true,
                    position : "top",
                    text : "Region",
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