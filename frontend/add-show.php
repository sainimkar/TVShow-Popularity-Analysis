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

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">3</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-envelope"></i>
                            <span class="count bg-primary">4</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                    <p>Hello, this is an example msg</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                    <p>Hello, this is an example msg</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                        <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                        <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>

            </div>
        </div>
    </header>

<div class="container">
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">Add new Show</h3>
        </div>
        <div class="card-body">
            <form class="form" method="POST" action="add-show-back.php" role="form" autocomplete="off" enctype="multipart/form-data">
                <fieldset>
                    <label for="name2" class="mb-0">Name of the show</label>
                    <div class="row mb-1">
                        <div class="col-lg-12">
                            <input type="text" name="show_name" id="showname" class="form-control" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 pb-3">
                            <label for="Country">Country</label>
                            <input type="text" class="form-control" id="country" name="show_country">
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleSt">Genre</label>
                            <select class="form-control" id="genre" name="show_genre">
                                <option>drama</option>
                                <option>romance</option>
                                <option>comedy</option>
                                <option>action</option>
                                <option>drama</option>
                                <option>thriller</option>

                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="nseasons">Number of seasons</label>
                            <input type="text" class="form-control" id="nseasons" name="show_seasons">
                        </div>
                    </div>

                    <div class="col-sm-3 pb-3">
                        <label for="exampleFirst">Views</label>
                        <input type="text" class="form-control" id="exampleFirst" name="show_views">
                    </div>
                    <div class="col-sm-3 pb-3">
                        <label for="exampleLast">Ratings</label>
                        <input type="text" class="form-control" id="exampleLast" name="show_ratings">
                    </div>
                    <div class="col-sm-3 pb-3">
                        <label for="exampleFirst">Sales</label>
                        <input type="text" class="form-control" id="exampleFirst" name="show_sales">
                    </div>
                    <div class="col-sm-3 pb-3">
                        <label for="exampleFirst">Date</label>
                        <input type="text" class="form-control" id="date" name="show_date">
                    </div>
                    <label for="message2" class="mb-0">Show Info</label>
                    <div class="row mb-1">
                        <div class="col-lg-12">
                            <textarea rows="6"  id="show_info" class="form-control" required="" name="show_info"></textarea>
                        </div>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-secondary btn-lg float-right">Add show</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>


