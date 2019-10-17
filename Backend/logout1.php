<html>
<head>
<style>
h1 {
color:#C0CBFF;
text-align:center;
}
h3{
color:#C0CBFF;
text-align:center;
}
.container-well
{
	font-size: 36px;
	font-family: Helvetica;
	text-align: center;

</style>

<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/signup-form.js"></script>
</head>
<div class="container-well">
	<h1>LOGGED OUT</h1>
<?php
session_start();
session_destroy();
echo "You have successfuly logged out.";
?>
<br>
<button class="button1" onclick="redirect()">Login Again</button>
</div>
<script type="text/javascript">
	function redirect()
	{
		window.location="main-selection-screen.php";
	}
</script>