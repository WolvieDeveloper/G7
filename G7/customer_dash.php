<?php
include_once 'config.php';
error_reporting(1);
session_start();
if ($_SESSION['user_id']) {
} else {
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="profile/style.css">
    <style>
        @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');


        body {
            background-color: #ffd234;
        }

        html {
            scroll-behavior: smooth;
        }

        #bg {
            padding: 10px;
            width: 250px;
            border: 1px solid black
        }
    </style>
</head>

<body>

    <img src="logo.png" alt="" onclick="" id="bg">


    <!-- <header class="navbar sticky-top bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sticky top</a>
            <a class="nav-link" href="#boyf">BoyFriend</a>
            <a class="nav-link" href="#girlf">GirlFriend</a>
            <a class="nav-link" href="#dadf">Father</a>
            <a class="nav-link" href="#momf">Mother</a>
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>
        </div>
    </header> -->




    <div class="size">

        <div class="connect">

            <?php

            for ($x = 1; $x <= 8; $x++) {


                echo (' <div class="profile">
					<img src="profile/girl.jpg" class="picture">
					<p>
						Personal interests:<br>
					</p>
				</div>');
            }

            ?>
        </div>
    </div>



    <div class="size">
        <div class="connect">

            <?php

            for ($x = 1; $x <= 8; $x++) {


                echo (' <div class="profile">
					<img src="profile/lolo.png" class="picture">
					<p>
						Personal interests:<br>
					</p>
				</div>');
            }

            ?>
        </div>
    </div>

    <div class="size">
        <div class="connect">

            <?php
            for ($x = 1; $x <= 8; $x++) {

                echo (' <div class="profile">
        <img src="profile/lolo.png" class="picture">
        <p>
            Personal interests:<br>
        </p>
    </div>');
            }

            ?>

        </div>
    </div>

    <div class="size">
        <div class="connect">

            <?php
            $mother = "Maria Clara";
            $age = 24;
            $interest = "";
            for ($x = 1; $x <= 8; $x++) {


                echo (" <div class='profile'>
                    <img src='profile/girl.jpg' class='picture'>
                    <p>
                    Personal interests: $interest<br>
                    </p>
                    </div>");
            }

            ?>

        </div>
    </div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div style="border:1px solid black;"><img src="profile/russel.jpg" style="width:100%;" class="img"></div>
            <h3>Russel Enano</h3>
            <h4>Catarman, Northern Samar</h4>

            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Account
            </a>

            <li><a class="dropdown-item" href="logout.php">Log-out</a></li>
            <li><a class="dropdown-item" href="landingpage.php">Register</a></li>
            <li><a class="dropdown-item" href="forgotpass.php">Change Password</a></li>
            <li><a class="dropdown-item" href="#">Manage Account</a></li>



        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>