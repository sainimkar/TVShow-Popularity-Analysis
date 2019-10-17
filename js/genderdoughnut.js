$(document).ready(function(){

    $.ajax({
        url : "http://localhost/dbmsproject/genderdata.php",
        type : "GET",
        success : function(data) {

            console.log(data);

            var count = [];

            var len = data.length;

            for (var i = 0; i < len; i++) {

                count.push(data[i].count);

            }
            console.log(count);
            var ctx1 = $("#doughnut-chartcanvas-2");


            var data1 = {
                labels : ["male", "female","others"],
                datasets : [
                    {
                        label : "Gender",
                        data : count,
                        backgroundColor : [
                            "#DEB887",
                            "#DC143C",
                            "#A9A9A9"
                        ],
                        borderColor : [
                            "#CDA776",
                            "#CB252B",
                            "#989898"
                        ],
                        borderWidth : [1, 1, 1]
                    }
                ]
            };



            var options1 = {
                title : {
                    display : true,
                    position : "top",
                    text : "Gender",
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