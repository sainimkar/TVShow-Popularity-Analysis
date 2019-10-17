<?php
include 'connection.php';
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>TV series</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        #right {
            float: right;
        }

        .item {
            min-height: 300px;
        }

        #moreshows{
            display:none;
        }

        #moremovies{
            display: none;
        }

        #show_genre{
            display: none;
        }
        .navbar {
            margin-bottom: 0px;
            color: #000000;
            position: fixed;

            height: 1%;
            width:100%;
            font-color: white;

        }


        .navbar-brand {
            padding:10px;
        }

        li a{
            color: white;
        }

        h1{
            font-weight: 700;
            font-family: 'Open Sans', sans-serif;;
            font-size: 50px;
            font-stretch: ultra-expanded;
        }


        .navbar li a:active {
            border-bottom: 2px solid #ffffff;
        }

        html, body {
            height: 100%;
            overflow-x: hidden;
        }
        .card {
            position: relative;
            border: none;
        }

        .card img hover {
            opacity: .8;
            transition: .5s;
        }

        .card-body {
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .footer-bottom {
            padding: 40px 0 30px;
            border-top: 1px solid #666;
            background: #1e1e1e;
        }

        .copyright-text p {
            color: #ccc;
            margin-top: 9px;
            margin-bottom: 0;
        }

        .social-link li {
            display: inline-block;
            margin: 0 5px;
        }

        .social-link li a {
            color: #ccc;
            border: 1px solid #ccc;
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 50%;
            text-align: center;
            display: inline-block;
            font-size: 14px;
            transition: .5s;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .btn {
            background: #e50915;

        }
    </style>

</head>


<body data-spy="scroll" data-target=".navbar" data-offset="20">

<div class="navbar navbar-inverse navbar-expand-sm navbar-static-top">

    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://cdn.vox-cdn.com/thumbor/Yq1Vd39jCBGpTUKHUhEx5FfxvmM=/39x0:3111x2048/1200x800/filters:focal(39x0:3111x2048)/cdn.vox-cdn.com/uploads/chorus_image/image/49901753/netflixlogo.0.0.png" style="display: inline-block; width:40px; height:30px; margin-right: 10px;"><span>
    <span style="display: inline-block;">Netflix</span>
        </a>

        <button class="navbar-toggle" data-toggle="collapse" data-target = ".navHeaderCollapse"></button>
        <div class= "collapse navbar-collapse navHeaderCollapse">

            <ul class="nav navbar-nav navbar-right" id="right">

                <li ><a href="#home">Home</a></li>
                <li class="nav-item"><a href="#drama">TV Shows</a></li>
                <li class="nav-item"><a href="#romance">Movies</a></li>
                <li class="nav-item"><a href="#comedy">My Shows</a></li>
                <li class="nav-item"><a href="view_sales.php">Top Selling</a></li>
                <li class="nav-item"><a href="view.php">Top Rating </a></li>
                <li class="nav-item menu-item-has-children dropdown"><a> Hello ,<?php  $username = $_SESSION['username'] ;
                    echo $username ;?></a>

                </li>
                <li class="nav-item"><a href="logout1.php">Sign out </a></li>
            </ul>

        </div>

    </div>

</div>


<div class="container-fluid" id="home">

    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active">
                <img src="https://images.wallpaperscraft.com/image/sherlock_season_3_bbc_one_sherlock_holmes_dr_john_watson_benedict_cumberbatch_martin_freeman_door_221b_baker_street_93098_1920x1080.jpg" alt="Los Angeles" style="width:100%;">

                <!--<div class = "carousel-caption" style="">
                <span class="glyphicon glyphicon-chevron-down"></span></p>
                    <a href="section1" class="btn btn-danger btn-lg">
                <span class="glyphicon glyphicon-chevron-down"></span> Get Started
              </a>
                  </div>-->
            </div>

            <div class="item">
                <img src="https://hdqwalls.com/download/betty-cooper-in-riverdale-4k-1920x1080.jpg" alt="Chicago" style="width:100%;">
            </div>

            <div class="item">
                <img src="https://images.wallpaperscraft.com/image/the_big_bang_theory_beards_sheldon_leonard_howard_raj_97037_1920x1080.jpg" alt="Chicago" style="width:100%;">
            </div>

            <div class="item">
                <img src="https://images5.alphacoders.com/882/thumb-1920-88 83.jpg" alt="New York" style="width:100%;">
            </div>

            <div class="item">
                <img src="https://images4.alphacoders.com/796/thumb-1920-796479.jpg" alt="New York" style="width:100%;">
            </div>

            <div class="item">
                <img src="https://images4.alphacoders.com/829/829096.jpg" alt="New York" style="width:100%;">
            </div>

        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container-fluid" style="margin: 20px; align-content: center; padding: 10px;" id="romance">

    <h1 style="text-align: center; margin-top: 60px; margin-bottom: 40px;"> MOVIES</h1>



<div class="container mt-3">
        <div class="row">
            <?php
            $query = "SELECT * FROM movies  LIMIT 8";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-md-3" style=" margin-bottom: 30px;">



                        <div class="movies">
                            <img src="<?php echo $row["movie_image"]; ?>" class="img-responsive">
                            <h3 class="text-danger"><?php echo $row["movie_name"]; ?></h3>
                            <h4 class="text-danger"><?php echo $row["movie_genre"]; ?></h4>


                            <a class="btn btn-lg btn-success" href="individualmovie.php?movieid=<?php echo $row['movie_id']?>">Buy Now</a>

                        </div>

                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<div class="container-fluid" style=" align-content: center; " id="moremovies">
    <div class="container ">
        <div class="row">


            <?php
            $query = "SELECT * FROM movies LIMIT 9,50 ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-md-3" style="margin-bottom: 30px;">

                        <div class="shows">
                            <img src="<?php echo $row["movie_image"]; ?>" class="img-responsive">
                            <h3 class="text-info"><?php echo $row["movie_name"]; ?></h3>
                            <h4 class="text-danger"><?php echo $row["movie_genre"]; ?></h4>
                            <a class="btn btn-lg btn-success" href="individualmovie.php?movieid=<?php echo $row['movie_id']?>" style="float: bottom;">Buy Now</a>
                        </div>

                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<center><button class="btn btn-lg btn-danger" id="viewmoviesbutton"">view more</button></center>


<div class="container-fluid" style=" align-content: center; " id="drama">

    <h1 style="text-align: center; margin-top: 60px; margin-bottom: 62px;">TV SHOWS</h1>
    <div class="container ">
        <div class="row">


            <?php
            $query = "SELECT * FROM shows  LIMIT 8 ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-md-3" style="margin-bottom: 30px;">

                        <div class="shows">
                            <img src="<?php echo $row["show_image"]; ?>" class="img-responsive">
                            <h3 class="text-info"><?php echo $row["show_name"]; ?></h3>
                            <h4 class="text-info"><?php echo $row["show_genre"]; ?></h4>
                            <a class="btn btn-lg btn-success" href="individualshow.php?showid=<?php echo $row['show_id']?>" style="float: bottom;">Buy Now</a>
                        </div>

                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>

</div>

<div class="container-fluid" style=" align-content: center; " id="moreshows">
    <div class="container ">
        <div class="row">


            <?php
            $query = "SELECT * FROM shows LIMIT 9,50 ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-md-3" style="margin-bottom: 30px;">

                        <div class="shows">
                            <img src="<?php echo $row["show_image"]; ?>" class="img-responsive">
                            <h3 class="text-info"><?php echo $row["show_name"]; ?></h3>
                            <h4 class="text-info"><?php echo $row["show_genre"]; ?></h4>
                            <a class="btn btn-lg btn-success" href="individualshow.php?showid=<?php echo $row['show_id']?>" style="float: bottom;">Buy Now</a>
                        </div>

                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<center><button class="btn btn-lg btn-danger" id="viewshowsbutton"">view more</button></center>




















<!--<div class="container" style= " text-align: center;">
<div class="jumbotron">
  <h1>About Us</h1>
  <p>We are a group of students studying at Sardar Patel Institute of Technology with a passion for Web Programming </p>
</div>
</div> -->




<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 ">
                <div class="copyright-text">
                    <p>CopyRight © 2018 Digital All Rights Reserved</p>
                </div>
            </div> <!-- End Col -->
            <div class="col-sm-6">
                <ul class="social-link pull-right">
                    <li><a href=""><span class="fa fa-facebook"></span></a></li>
                    <li><a href=""><span class="fa fa-instagram"></span></a></li>
                    <li><a href=""><span class="fa fa-youtube"></span></a></li>
                    <li><a href=""><span class="fa fa-twitter"></span></a></li>
                    <li><a href=""><span class="fa fa-linkedin"></span></a></li>
                </ul>
            </div> <!-- End Col -->
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {

        $("#viewshowsbutton").click(function() {
            var elem = $("#viewshowsbutton").text();
            if (elem == "view more") {
                //Stuff to do when btn is in the read more state
                $("#viewshowsbutton").text("view less");
                $("#moreshows").css('display', 'inline-block');
            } else {
                //Stuff to do when btn is in the read less state
                $("#viewshowsbutton").text("view more");
                $("#moreshows").css('display', 'none');
            }
        });

        $("#viewmoviesbutton").click(function() {
            var elem = $("#viewmoviesbutton").text();
            if (elem == "view more") {
                //Stuff to do when btn is in the read more state
                $("#viewmoviesbutton").text("view less");
                $("#moremovies").css('display', 'inline-block');
            } else {
                //Stuff to do when btn is in the read less state
                $("#viewmoviesbutton").text("view more");
                $("#moremovies").css('display', 'none');
            }
        });


    });






</script>

</body>

</html>
