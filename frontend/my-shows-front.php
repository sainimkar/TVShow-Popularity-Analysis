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
                <li class="nav-item"><a href="#action">Top Selling</a></li>
                <li class="nav-item menu-item-has-children dropdown"><a> Hello ,<?php  $username = $_SESSION['username'] ;
                        echo $username ;?></a>

                </li>

            </ul>

        </div>

    </div>

</div>

<br>

<h1 style="text-align: center; margin-top: 100px; margin-bottom: 20px;"> My Shows </h1>

<br>


        <div class="container-fluid" style=" align-content: center; " id="mytvshows">


            <div class="container ">
                <div class="row">
        <?php


        $username = $_SESSION['username'];
        $query = "SELECT user_id from user WHERE username='" .  $username . " '";
        $result = mysqli_query($conn,$query) ;

        if($result === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }
        $row = mysqli_fetch_assoc($result);


        $user_id = $row['user_id'];

        $query = "SELECT show_id from myshows WHERE user_id='" .  $user_id . " '";
        $result = mysqli_query($conn,$query);

        $row = $result->fetch_assoc();

        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {


                $query1 = "SELECT * FROM shows  WHERE show_id ='" . $row['show_id'] . " '";
                $result1 = mysqli_query($conn, $query1);
                if (mysqli_num_rows($result1) > 0) {
                    while ($row1 = mysqli_fetch_array($result1)) {
                        ?>
                        <div class="col-md-3" style="margin-bottom: 30px;">

                            <div class="shows">
                                <img src="<?php echo $row1["show_image"]; ?>" class="img-responsive">
                                <h3 class="text-info"><?php echo $row1["show_name"]; ?></h3>
                                <h4 class="text-info"><?php echo $row1["show_genre"]; ?></h4>
                                <a class="btn btn-lg btn-success" href="" style="float: bottom;">Watch Now</a>
                            </div>

                        </div>
                        <?php
                    }
                }

            }

        }
                    ?>
                </div>
            </div>

        </div>
<hr>

<h1 style="text-align: center; margin-top: 0px; margin-bottom: 20px;"> My Movies </h1>

<br>


<div class="container-fluid" style=" align-content: center; " id="mymovies">


    <div class="container ">
        <div class="row">
            <?php

            $query = "SELECT movie_id from myshows WHERE user_id='" .  $user_id . " '";
            $result = mysqli_query($conn,$query);

            $row = $result->fetch_assoc();

            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {


                    $query1 = "SELECT * FROM movies  WHERE movie_id ='" . $row['movie_id'] . " '";
                    $result1 = mysqli_query($conn, $query1);
                    if (mysqli_num_rows($result1) > 0) {
                        while ($row1 = mysqli_fetch_array($result1)) {
                            ?>
                            <div class="col-md-3" style="margin-bottom: 30px;">

                                <div class="shows">
                                    <img src="<?php echo $row1["movie_image"]; ?>" class="img-responsive">
                                    <h3 class="text-info"><?php echo $row1["movie_name"]; ?></h3>
                                    <h4 class="text-info"><?php echo $row1["movie_genre"]; ?></h4>
                                    <a class="btn btn-lg btn-success" href="" style="float: bottom;">Watch Now</a>
                                </div>

                            </div>
                            <?php
                        }
                    }

                }

            }
            ?>
        </div>
    </div>
</div>








</body>

