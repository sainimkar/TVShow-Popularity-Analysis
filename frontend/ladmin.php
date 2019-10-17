<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>


</head>
<body>
<div class="container">
<div class="row" id="parent">



            <div class="card">
                <div class="card-block">
                    <h2 class="text-xs-center">Login</h2><br>

                    <form role="form" on action="alogin.php" method="POST">
                        <div class="form-group row">
                            <div class="col-sm-6 pb-3">
                                <label for="loginusername">Username</label>
                                <input type="text" class="form-control" id="adminUsername" name="adminUsername">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 pb-3">
                                <label for="adminloginpassword">Password</label>
                                <input type="password" class="form-control" id="adminPassword" name="adminPassword">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class=" col-sm-8 ">
                                <button type="submit" class="btn btn-secondary-outline btn-lg btn-block">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
