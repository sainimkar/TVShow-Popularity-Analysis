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
        body{
            background-repeat: no-repeat;
            background-size: cover;
        }
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,700);
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css);
        *, *:after, *:before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }


        a {
            color: #888;
            text-decoration: none;
        }
        a:hover,
        a:active {
            color: #333;
        }
        /* Header Style */
        .main,

        .color-pattern-1 {
            background: #0e83cd;
        }
        .color-pattern-2 {
            background: #f06060;
        }
        .color-pattern-3 {
            background: #fcd04b;
        }
        .color-pattern-4 {
            background: #CC2E8C;
        }
        .color-pattern-5 {
            background: #0e83cd;
        }

        /* General button style (reset) */
        .button {
            border: none;
            font-family: inherit;
            font-size: inherit;
            color: inherit;
            background: none;
            cursor: pointer;
            padding: 25px 80px;
            display: inline-block;
            margin: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            outline: none;
            position: relative;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
        }
        .button:after {
            content: '';
            position: absolute;
            z-index: -1;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
        }
        /* Button 1 */
        .button-1 {
            border: 3px solid #fff;
            color: #fff;
            width: 500px;
        }
        /* Button 1a */
        .button-1a:hover,
        .button-1a:active {
            color: #dc3545;
            background: #fff;
        }
        /* Button 1b */
        .button-1b:after {
            width: 100%;
            height: 0;
            top: 0;
            left: 0;
            background: #fff;
        }
        .button-1b:hover,
        .button-1b:active {
            color: #dc3545;
        }
        .button-1b:hover:after,
        .button-1b:active:after {
            height: 100%;
        }
        /* Button 1c */
        .button-1c:after {
            width: 0%;
            height: 100%;
            top: 0;
            left: 0;
            background: #fff;
        }
        .button-1c:hover,
        .button-1c:active {
            color: #dc3545;
        }
        .button-1c:hover:after,
        .button-1c:active:after {
            width: 100%;
        }
        /* Button 1d */
        .button-1d {
            overflow: hidden;
        }
        .button-1d:after {
            width: 0;
            height: 103%;
            top: 50%;
            left: 50%;
            background: #fff;
            opacity: 0;
            -webkit-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -ms-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }
        .button-1d:hover,
        .button-1d:active {
            color: #0e83cd;
        }
        .button-1d:hover:after {
            width: 104%;
            opacity: 1;
        }
        .button-1d:active:after {
            width: 101%;
            opacity: 1;
        }
        /* Button 1e */
        .button-1e {
            overflow: hidden;
        }
        .button-1e:after {
            width: 100%;
            height: 0;
            top: 50%;
            left: 50%;
            background: #fff;
            opacity: 0;
            -webkit-transform: translateX(-50%) translateY(-50%) rotate(45deg);
            -moz-transform: translateX(-50%) translateY(-50%) rotate(45deg);
            -ms-transform: translateX(-50%) translateY(-50%) rotate(45deg);
            transform: translateX(-50%) translateY(-50%) rotate(45deg);
        }
        .button-1e:hover,
        .button-1e:active {
            color: #0e83cd;
        }
        .button-1e:hover:after {
            height: 335%;
            opacity: 1;
        }
        .button-1e:active:after {
            height: 400%;
            opacity: 1;
        }
        /* Button 1f */
        .button-1f {
            overflow: hidden;
        }
        .button-1f:after {
            width: 101%;
            height: 0;
            top: 50%;
            left: 50%;
            background: #fff;
            opacity: 0;
            -webkit-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -ms-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }
        .button-1f:hover,
        .button-1f:active {
            color: #0e83cd;
        }
        .button-1f:hover:after {
            height: 104%;
            opacity: 1;
        }
        .button-1f:active:after {
            height: 130%;
            opacity: 1;
        }
    </style>
</head>
<body background="https://store-images.s-microsoft.com/image/apps.55787.9007199266246365.687a10a8-4c4a-4a47-8ec5-a95f70d8852d.12c2c5b7-0d97-4635-9b57-8a35da0f4c79?mode=scale&q=90&h=1080&w=1920">
<section style="margin-top: 200px; padding: 100px;">
    <center>
        <button class="button button-1 button-1a"><a href="login-register.php">Login as User</a></button><br><br>
        <button class="button button-1 button-1b"><a href="login-admin.php">Login as Admin</a></button><br><br>
        <button class="button button-1 button-1c"><a href="advertiser-login.php">Login as Advertiser</a></button>
    </center>
</section>



</body>
</html>
