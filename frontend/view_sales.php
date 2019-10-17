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
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.default.css">
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

    .card-img-top {
      height: 300px;
      width: 200px;
    }

    .navbar {
      margin-bottom: 0px;
      color: #000000;
      position: fixed;

      height: 1%;
      width: 100%;
      font-color: white;

    }


    .navbar-brand {
      padding: 10px;
    }

    li a {
      color: white;
    }

    h1 {
      font-weight: 700;
      font-family: 'Open Sans', sans-serif;
      ;
      font-size: 50px;
      font-stretch: ultra-expanded;
    }


    .navbar li a:active {
      border-bottom: 2px solid #ffffff;
    }

    html,
    body {
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

      <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse"></button>
      <div class="collapse navbar-collapse navHeaderCollapse">

        <ul class="nav navbar-nav navbar-right" id="right">

          <li><a href="#home">Home</a></li>
          <li class="nav-item"><a href="#drama">All Shows</a></li>
          <li class="nav-item"><a href="#romance">All Movies</a></li>
          <li class="nav-item"><a href="#comedy">Top Selling</a></li>
          <li class="nav-item"><a href="#action">Top Rating</a></li>
          <li><a href="#thriller">Sort by:</a></li>
          <li>HELLO <?php  $username=$_SESSION['username'] ;
                                                        echo $username ;?></li>

        </ul>

      </div>

    </div>

  </div>


  


  <div class="container-fluid" style="margin: 20px; align-content: center; padding: 10px;" id="drama">

      <h1 style="text-align: center; margin-top: 60px; margin-bottom: 62px;">TOP SELLING </h1>
      <div class="container mt-3">
        <div class="row">
         

          <?php
            $query = "SELECT * FROM view ORDER BY sales DESC LIMIT 20";
            $result = mysqli_query($conn,$query);
            
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-md-3">

        


                            <div class="shows">
                            <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["name"]; ?></h5>

                                <h5 class="text-danger">AVG RATINGS:<?php echo $row["ratings"]; ?></h5>
                                <a class="btn btn-lg btn-success" href="individualshow.php?showid=<?php echo $row['id']?>">Buy Now</a>

                                       
                                       
                            </div>
                        
                    </div>
                    <?php
                }
            }
        ?>


          
          

          
          
        </div>
      </div>
    </div>


 

  


    
   

    


    
    

    
    
  </div>
</div>
</div>













    <!--<div class="container" style= " text-align: center;">
    <div class="jumbotron">
      <h1>About Us</h1>
      <p>We are a group of students studying at Sardar Patel Institute of Technology with a passion for Web Programming </p>
    </div>
  </div> -->

    <section class="bg-light" id="team" style="margin-top: 10%; padding: 10px;">
      <div class="container" id="aboutUs">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1 class="section-heading text-uppercase">Our Team</h1>
            <h3 class="section-subheading text-muted">Group of Students studying at Sardar Patel Institute of Technology</h3>
          </div>
        </div>
        <div class="row" style="padding: 30px;">
          <div class="col-sm-4">
            <div class="team-member" style="text-align: center;">
              <img class="mx-auto rounded-circle"   alt="" style="max-width: 100%; height: auto;">
              <h3>Sai Nimkar</h3>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="team-member" style="text-align: center;">
              <img class="mx-auto rounded-circle"  alt="" style="max-width: 100%; height: auto;">
              <h3>Bhumika Narwani</h3>
            </div>
          </div>
        </div>

      </div>
    </section>


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








</body>

</html>