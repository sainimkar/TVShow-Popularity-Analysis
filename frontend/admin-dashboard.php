<?php
include 'connection.php';
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="css/Chart.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
       <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">



    <style>

        .chart-container {
            width: 1600px;
            height:500px;
            margin-left: 0px;
        }

        #test{

        }

        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }

        #moviecanvas{
            height: 200px;
        }

    </style>
</head>

<body>
<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="admin-dashboard.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Analyse</li>
                <li class="menu-item-has-children dropdown">
                    <a href="admin-analyse-shows.php" > <i class="menu-icon fa fa-cogs"></i>TV Shows</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="admin-analyse-movies.php" > <i class="menu-icon fa fa-table"></i>Movies</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="add-show.php" > <i class="menu-icon fa fa-th"></i>Add new Show </a>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="add-movie.php" > <i class="menu-icon fa fa-th"></i>Add new Movie </a>
                </li>

                <li class="menu-title">Advertisements</li><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="advertisers.php" > <i class="menu-icon fa fa-tasks"></i>Advertisers</a>

                </li>

                <li>
                    <a href="advertisements.php"> <i class="menu-icon ti-email"></i>Advertisements </a>
                </li>


                <li class="menu-title">Users</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="users.php"> <i class="menu-icon fa fa-glass"></i>All Users</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>



<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
        <div class="top-left">
            <div class="navbar-header">
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>

            </div>
        </div>
        <div class="top-right">
            <div class="header-menu">
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>



                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">


                        <a class="nav-link" href="logout1.php"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>

            </div>
        </div>
    </header>


    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <!-- Widgets  -->
            <div class="row">
                <?php
                $query = "SELECT SUM(show_sales) as sales  from shows ";
                $result = mysqli_query($conn,$query)  or die(mysql_error());

                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {
                        //  echo ". $row['sales']. ";
                        $temp=$row['sales'];

                    }
                }
                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="pe-7s-cash"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count"><?php echo $temp;?></span></div>
                                        <div class="stat-heading">Revenue</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $query = "SELECT SUM(show_sales) as sales  from shows ";
                $result = mysqli_query($conn,$query)  or die(mysql_error());

                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {
                        //  echo ". $row['sales']. ";
                        $temp=$row['sales'];

                    }
                }
                ?>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-2">
                                    <i class="pe-7s-cart"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count"><?php echo $temp;?></span></div>
                                        <div class="stat-heading">Sales</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $query = "SELECT (SELECT COUNT(*) FROM shows) + (SELECT COUNT(*) from movies) AS showcount";
                $result = mysqli_query($conn,$query)  or die(mysql_error());

                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {
                        //  echo ". $row['sales']. ";
                        $temp=$row['showcount'];

                    }
                }
                ?>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="pe-7s-browser"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count"><?php echo $temp;?></span></div>
                                        <div class="stat-heading">Total shows</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $query = "SELECT COUNT(*) as usercount from user";
                $result = mysqli_query($conn,$query)  or die(mysql_error());

                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {
                        //  echo ". $row['sales']. ";
                        $temp=$row['usercount'];

                    }
                }
                ?>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-4">
                                    <i class="pe-7s-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count"><?php echo $temp; ?></span></div>
                                        <div class="stat-heading">Users</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           <center><h2>Top Selling Movies</h2></center><br>

            <div class="chart-container">
                <canvas id="moviecanvas" ></canvas>
            </div><br>
            <center><h2>Top Selling Shows</h2></center><br>

            <div class="chart-container" id="test">
                <canvas id="mycanvas"></canvas>
            </div>





            <!-- /#right-panel -->

            <!-- Scripts -->
            <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
            <script src="assets/js/main.js"></script>



            <script type="text/javascript" src="js/jquery.min.js" defer></script>
            <script type="text/javascript" src="js/Chart.min.js" defer></script>

            <script type="text/javascript" src="js/jquery.min.js"></script>
            <script type="text/javascript" src="js/Chart.min.js"></script>
            <script type="text/javascript" src="js/showapp.js"></script>
            <script type="text/javascript" src="js/movieapp.js"></script>

</body>
</html>
