
<!DOCTYPE html>
<head>
		<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>


</head>
<!------ Include the above in your HEAD tag ---------->
<style>

.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}

    body{
        background-repeat: no-repeat;
        background-size: cover;
        padding: 80px;
    }

</style>

<body background=" https://store-images.s-microsoft.com/image/apps.55787.9007199266246365.687a10a8-4c4a-4a47-8ec5-a95f70d8852d.12c2c5b7-0d97-4635-9b57-8a35da0f4c79?mode=scale&q=90&h=1080&w=1920">
<div class="container-fluid">
    
    <div class="row" id="parent" >
    	
        <div class="col-md-7  card d-block border-0 py-2" >
           <center> <a href="" class="btn btn-outline-secondary" data-toggle="collapse" data-target="#cardLogin" data-parent="#parent" style="width:300px;">Login</a>
            <a href="" class="btn btn-outline-secondary" data-toggle="collapse" data-target="#cardRegister" data-parent="#parent" style="width:300px;">Register</a></center>
            
            <div class="collapse show py-2" id="cardLogin">
                <div class="card">
                    <div class="card-block">
                        <h2 class="text-xs-center">Login</h2><br>
                      
                        <form role="form" on action="userLogin.php" method="POST">
                           <div class="form-group row">
                                <div class="col-sm-6 pb-3">
                            		<label for="password">Username</label>
                            		<input type="text" class="form-control" id="loginusername" name="loginusername">
                            	</div>
                            </div>
                           <div class="form-group row">
                                <div class="col-sm-6 pb-3">
                            		<label for="password">Password</label>
                            		<input type="text" class="form-control" id="loginpassword" name="loginpassword">
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
       
            <div class="collapse py-2" id="cardRegister">
                <div class="card">
                    <div class="card-block">
                        <h2 class="text-center">Register</h2>
                        
                        <form role="form" on action="userRegister.php" method ="POST">
                            <div class="form-group row">
                                <div class="col-sm-6 pb-3">
                            		<label for="username">Username</label>
                            		<input type="text" class="form-control" id="username" name="registerusername">
                            	</div>
                            </div>
                            <div class="form-group row">
                             <div class="col-sm-6 pb-3">
                            <label for="Country">Country</label>
                            <input type="text" class="form-control" id="Country" name="Country">
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleSt">Gender</label>
                            <select class="form-control" id="Gender" name="Gender">
								<option>MALE</option>
								<option>FEMALE</option>
								<option>OTHER</option>
                            </select>
                        </div>
                        <div class="col-sm-3 pb-3">
                            <label for="exampleZip">Age</label>
                            <input type="text" class="form-control" id="age" name="age">
                        </div>
                    </div>
                            <div class="form-group row">
                                <div class="col-sm-6 pb-3">
                            		<label for="password">Password</label>
                            		<input type="text" class="form-control" id="password" name="password">
                            	</div>
                            </div>
                            <div class="form-group row">
                               <div class="col-sm-6 pb-3">
                            		<label for="password"> Confirm Password</label>
                            		<input type="text" class="form-control" id="confirmpassword" name="confirmpassword">
                            	</div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-8 pb-3 pt-2">
                                    <button type="submit" class="btn btn-secondary-outline btn-lg btn-block">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
       
        </div>
    </div>
</div>
</body>

		
		
</html>