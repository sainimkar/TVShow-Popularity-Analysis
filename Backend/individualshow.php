<?php
// Start the session
session_start();

?>
<!DOCTYPE html>

<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  	<style>



    .rating {
  display: inline-block;
  position: relative;
  height: 50px;
  line-height: 50px;
  font-size: 50px;
}

.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: static;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
}

.rating label:last-child .icon {
  color: #000;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: #09f;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #000;
  text-shadow: 0 0 5px #09f;
}

  	#redBox {
		background-color: #f44336 ;
	} 
	
	#blueBox {
		background-color:#2196f3 ;
	} 
	
	#greenBox {
		background-color: #009688 ;
	} 
	
	#orangeBox {
		background-color:#ff9800 ;
	} 

	.col-lg:hover{

    opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */

	}

    .danger {
    color: red;
}

.danger:hover {
    background: #f44336;
    color: white;
}

.col-lg {
	height: 150px;
	padding: 10px;
	margin: 10px;
}



  	#more{
display:none;
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


.navbar-nav li.active a {
    border-bottom: 2px solid #ffffff;
}

html, body {
   
    overflow-x: hidden;
}

.fa {
    font-size: 25px;
}

.checked {
    color: orange;
}

/* Three column layout */
.side {
    float: left;
    width: 15%;
    margin-top:10px;
}

.middle {
    margin-top:10px;
    float: left;
    width: 70%;
}

/* Place text to the right */
.right {
    text-align: right;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The bar container */
.bar-container {
    width: 100%;
    background-color: #f1f1f1;
    text-align: center;
    color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
    .side, .middle {
        width: 100%;
    }
    .right {
        display: none;
    }
}

@import url(//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css);

.detailBox {
    width:70%;
    border:1px solid #bbb;
    margin:50px;
}
.titleBox {
    background-color:#fdfdfd;
    padding:10px;
}
.titleBox label{
  color:#444;
  margin:0;
  display:inline-block;
}

.commentBox {
    padding:10px;
    border-top:1px dotted #bbb;
}
.commentBox .form-group:first-child, .actionBox .form-group:first-child {
    width:80%;
}
.commentBox .form-group:nth-child(2), .actionBox .form-group:nth-child(2) {
    width:18%;
}
.actionBox .form-group * {
    width:100%;
}
.taskDescription {
    margin-top:10px 0;
}
.commentList {
    padding:0;
    list-style:none;
    max-height:200px;
    overflow:auto;
}
.commentList li {
    margin:0;
    margin-top:10px;
}
.commentList li > div {
    display:table-cell;
}
.commenterImage {
    width:30px;
    margin-right:5px;
    height:100%;
    float:left;
}
.commenterImage img {
    width:100%;
    border-radius:50%;
}
.commentText p {
    margin:0;
}
.sub-text {
    color:#aaa;
    font-family:verdana;
    font-size:11px;
}
.actionBox {
    border-top:1px dotted #bbb;
    padding:10px;
}
		
  		</style>
  	</head>

  	<body>
    <?php
      include 'connection.php';
      $show_id = $_GET['showid'];
      $sql= "SELECT * FROM shows WHERE show_id='" .  $show_id . "'";
      $result = mysqli_query($conn,$sql);
      if($result === FALSE) { 
       die(mysql_error()); // TODO: better error handling
          }

          
       $row = mysqli_fetch_assoc($result);


       $_SESSION['show_id']=$row['show_id'];
       $_SESSION['show_name']=$row['show_name'];
       
       $_SESSION['show_genre']=$row['show_genre'];
       
       $_SESSION['show_views']=$row['show_views'];
       
       $_SESSION['show_ratings']=$row['show_ratings'];
       
       $_SESSION['show_info']=$row['show_info'];
       
       $_SESSION['show_date']=$row['show_date'];
       
       $_SESSION['show_region']=$row['show_region'];
       $_SESSION['show_sales']=$row['show_sales'];
       
       $_SESSION['show_seasons']=$row['show_seasons'];
              $_SESSION['show_image']=$row['show_image'];
      
      
      ?>
  		<div class="navbar navbar-inverse navbar-expand-sm navbar-static-top">

	<div class="container">
	   <a class="navbar-brand" href="#">
    <img src="https://cdn.vox-cdn.com/thumbor/Yq1Vd39jCBGpTUKHUhEx5FfxvmM=/39x0:3111x2048/1200x800/filters:focal(39x0:3111x2048)/cdn.vox-cdn.com/uploads/chorus_image/image/49901753/netflixlogo.0.0.png" style="display: inline-block; width:40px; height:30px; margin-right: 10px;"><span>
    <span style="display: inline-block;">Netflix</span>
    </a>
		 
		<button class="navbar-toggle" data-toggle="collapse" data-target = ".navHeaderCollapse"></button>
		<div class= "collapse navbar-collapse navHeaderCollapse">
		
		<ul class="nav navbar-nav navbar-right" id="right">
			
			<li><a href="main-page.php">Home</a></li>
			<li><a href="main-page.php">TV Shows</a></li>
			<li><a href="main-page.php">Movies</a></li>
			<li><a href="main-page.php">My Shows</a></li>
            <li class="nav-item"><a href="main-page.php">Top Selling</a></li>
            <li class="nav-item menu-item-has-children dropdown"><a> Hello, <?php  $username=$_SESSION['username'] ;
                    echo $username ;?></a>

            </li>
		
		</ul>
		
		</div>
		
	</div>
</div>
  <div class="row" style="margin-top: 3%; margin-bottom: 3.5%; ">

    <div class="col-sm-3">
      <div class="col-sm-6" style="margin-left: 0px; margin-top: 4.5%; margin-bottom: -70px;">
          <img src="<?php echo $row["show_image"]; ?>" style="max-width: 400px; max-height: 800px;" class="img-responsive">
      </div>
    </div>

    <div class="col-sm-9">
      <div style="padding: 20px;">

      
    <h1><?php  echo $_SESSION['show_name']; ?></h1><br>
    <h3 style="display: inline;">Genre:  </h3><span ><h3 style="display: inline;"><?php  echo $_SESSION['show_genre']; ?></h3><br><br>
    <h3 style="display: inline;">Number of seasons:  </h3><span><h3 style="display: inline;"><?php  echo $_SESSION['show_seasons'];  ?></h3><br><br>
                  <h3 style="display: inline;">Country: </h3><h3 style="display: inline;"><?php  echo $_SESSION['show_region'];  ?></h3></span><br>
    <h3 >Ratings: </h3>
    <span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<p><?php  echo $_SESSION['show_ratings'] ; ?> average based on <?php  echo $_SESSION['show_views'] ; ?> reviews.</p>

    </span>


    <h3 style="color: -moz-mac-accentdarkestshadow;"><?php  echo $_SESSION['show_info'] ; ?>
      </h3>
        </H5>
      </span>




</form><br><form method="post" >
          <h2 style="display: inline;">Price:  </h2><h3 style="display: inline;"><?php  echo $_SESSION['show_genre']; ?></h3> <br><br>
              <button class="btn btn-lg btn-danger" data-toggle="modal" data-target="#basicModal"><a href="myshows.php?show_id=<?php echo $_SESSION['show_id']?>" style="color: white;">Buy Now</a></button>
          </form>
      </div>
  </div>
      </div>



    <div class="container-fluid" style="margin-left: 5px ; margin-right: 20px ; margin-top: 0px;">
    <div class="row">
    <div class="col-lg" id="redBox">
<br>
<img src="comment1.png" style="width:100px;height:100px;" align="middle">
<h2 style="float: right; padding-bottom: 20px; color: white; padding-left: 20px; font-size: 50px;  padding-right: 20px;"><?php  echo $_SESSION['show_views'] ; ?></h2>
  </div>



<div class="col-lg" id="blueBox">
<br>
 <img src="eye1.png" style="width:100px;height:100px;" align="middle">
 <h2 style="float: right; padding-bottom: 20px; color: white; padding-left: 20px; font-size: 45px;  padding-right: 20px;"><?php  echo$_SESSION['show_sales'] ; ?></h2>
    </div>

    <div class="col-lg" id="greenBox">
  <br>
 <img src="star1.png" style="width:100px;height:100px;" align="middle">
 <h2 style="float: right; padding-bottom: 20px; color: white; padding-left: 20px; font-size: 45px;  padding-right: 20px;"><?php  echo $_SESSION['show_ratings'];  ?></h2>
    </div>

    <div class="col-lg" id="orangeBox">
<br>
 <img src="share1.png" style="width:100px;height:100px;" align="middle">
 <h2 style="float: right; padding-bottom: 20px; color: white; padding-left: 20px; font-size: 45px; padding-right: 20px; "><?php  echo $_SESSION['show_ratings'] ; ?></h2>
    </div>
  </div>

</div>






<div class="container-fluid" style="margin: 20px; align-content: center; padding: 10px;"  >

<h1 style="text-align: center; margin-top: 60px; margin-bottom: 62px;">RECOMMENDED SHOWS</h1>
<div class="container mt-3">
  <div class="row">
<?php 

$_SESSION['show_views'] = $_SESSION['show_views'] + 1;

$temp1=$_SESSION['show_views'];
$temp2=$_SESSION['show_sales'];

$sql = "update shows SET show_views ='$temp1',show_sales ='$temp2' WHERE show_id='$show_id'";

if ($conn->query($sql) === TRUE) {
   
    echo "";
} else {
    
    echo "Error updating record: " . $conn->error;
}




        function myResult()
        {
          include 'connection.php';
          $sql3= "truncate table recommended_shows";
          $result3 = mysqli_query($conn,$sql3);
          
          if($result3 === FALSE) { 
              die(mysql_error()); // TODO: better error handling
          }
           

        }
$show_genre=$_SESSION['show_genre'];
$show_id=$_SESSION['show_id'];

$query= "select * from shows where show_genre='$show_genre' AND show_id != '$show_id' ORDER BY(show_ratings) DESC LIMIT 4";

      $result = mysqli_query($conn,$query);
      if(mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_array($result)) {
            
              // output data of each row
              $count=1;
              
                 
                  
                  $temp=$row["show_id"];
                  
                  $tp="INSERT INTO recommended_shows SET show_id= $temp,insert_id=$count";
  
                  $result1 = mysqli_query($conn,$tp);
                  
                 if($result1 === FALSE) { 
                  echo "die bitches"; // TODO: better error handling
                   }
                  
                           $count +=1;   
              
           
              ?>
              <div class="col-md-3">
                  <div class="shows">
                      <img src="<?php echo $row["show_image"]; ?>" class="img-responsive">
                          <h5 class="text-info"><?php echo $row["show_name"]; ?></h5>
                          <h5 class="text-danger"><?php echo $row["show_genre"]; ?></h5>
                          <a class="btn btn-lg btn-danger" href="individualshow.php?showid=<?php echo $row['show_id']?>">Buy Now</a>

                      </div>
                  
              </div>
              <?php
          
                  }
                }

      myResult();
  ?>




		<script type="text/javascript">




		</script>
		<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
          <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
          <script>$(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});
</script>

  	</body>