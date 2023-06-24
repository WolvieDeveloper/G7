<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" type="image/x-icon" href="icon.png">
    <style>
        @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');


        * {
            padding: 0;
            margin: 0;
        }

        footer.foot {
            /* position: ; */
            left: 0;
            bottom: 0;
            width: 100%;
        }

        footer {
            /* position: fixed; */
            bottom: 0;
        }

        @media (max-height:800px) {
            footer {
                position: static;
            }

            header {
                padding-top: 40px;
            }
        }

        .foot {
            background-color: #2d2a30;
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 50px 50px 60px 50px;
        }

        .foot .footer-left,
        .foot .footer-center,
        .foot .footer-right {
            display: inline-block;
            vertical-align: top;
        }

        /* Footer left */

        .foot .footer-left {
            width: 30%;
        }

        .foot h3 {
            color: #ffffff;
            font: normal 36px 'Cookie', cursive;
            margin: 0;
        }


        .foot h3 span {
            color: #e0ac1c;
        }

        /* Footer links */

        .foot .footer-links {
            color: #ffffff;
            margin: 20px 0 12px;
        }

        .foot .footer-links a {
            display: inline-block;
            line-height: 1.8;
            text-decoration: none;
            color: inherit;
        }

        .foot .rights {
            color: #8f9296;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }

        /* Footer Center */

        .foot .footer-center {
            width: 35%;
        }

        .foot .footer-center i {
            background-color: #33383b;
            color: #ffffff;
            font-size: 25px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 10px 15px;
            vertical-align: middle;
        }

        .foot .footer-center i.fa-envelope {
            font-size: 17px;
            line-height: 38px;
        }

        .foot .footer-center p {
            display: inline-block;
            color: #ffffff;
            vertical-align: middle;
            margin: 0;
        }

        .foot .footer-center p span {
            display: block;
            font-weight: normal;
            font-size: 14px;
            line-height: 2;
        }

        .foot .footer-center p a {
            color: #e0ac1c;
            text-decoration: none;
            ;
        }

        /* Footer Right */

        .foot .footer-right {
            width: 30%;
        }

        .foot .about {
            line-height: 20px;
            color: #92999f;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }

        .foot .about span {
            display: block;
            color: #ffffff;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .foot .footer-icons {
            margin-top: 25px;
        }

        .foot .footer-icons a {
            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color: #33383b;
            border-radius: 2px;
            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;
            margin-right: 3px;
            margin-bottom: 5px;
        }

        .foot .footer-icons a:hover {
            background-color: #3F71EA;
        }

        .footer-links a:hover {
            color: #3F71EA;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }



        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: hotpink;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: hotpink;
        }

        @media (max-width: 880px) {

            .foot .footer-left,
            .foot .footer-center,
            .foot .footer-right {
                display: block;
                width: 100%;
                margin-bottom: 40px;
                text-align: center;
            }

            .foot .footer-center i {
                margin-left: 0;
            }
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


</head>

<body>

    <style>
        .carousel-item {
            height: 800px;
            background: #777;
            color: white;
            position: relative;
        }

        .container {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding-bottom: 50px;
        }

        .overlay-image {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            background-position: center;
            background-size: cover;
        }

        .tag {
            position: relative;
            top: -250px;
        }

        .tag2 {
            position: relative;
            top: -200px;
            transition: transform 0.3s;
        }

        .tag2:hover {
            transform: scale(1.1);
        }

        .con {
            color: black;
            font: normal 60px 'Cookie', cursive;
            margin-top: 10px;
            margin-left: 20px;
            position: sticky;
            cursor: default;
        }

        .adv {
            margin-bottom: 35%;
            color: black;
        }

        .bor {
            background-color: white;
            border: solid black 2px;
            block-size: 200px;
            text-align: center;
        }

        dialog {
            width: 50%;
            background-color: #e2c5be;
        }

        img {
            width: 80px;

        }
    </style>

    <nav class="navbar navbar-expand-lg">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse bg-warning margin-0 " id="navbarNavDropdown">
            <ul class=" navbar-nav">
                <a class="navbar-brand"><img src="logo.png" alt="paris"></a>
                <li class="nav-item ">
                    <a class="nav-link" href="landingpage.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Contact me</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="logout.php">Log-out</a></li>
                        <li><a class="dropdown-item" href="landingpage.php">Register</a></li>
                        <li><a class="dropdown-item" href="forgotpass.php">Change Password</a></li>
                        <li><a class="dropdown-item" href="#">Manage Account</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="overlay-image" style="background-image:url(./image1.jpg);">
                    <div class="container">
                        <p class="text-center font-weight-bold display-2 tag ">Discover, Connect, Belong<br>Companion Connect</p>
                        <div class="text-center">
                            <a href="index.php" class="btn btn-lg btn-dark tag2">
                                Get started
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="overlay-image" style="background-image:url(./image2.jpeg);">
                    <div class="container">
                        <p class="text-center font-weight-bold display-2 tag">Connecting People<br>Enriching Lives</p>
                        <div class="text-center">
                            <a href="index.php" class="btn btn-lg btn-dark tag2">
                                Get started
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="overlay-image" style="background-image:url(./cc.png);">
                    <div class="container">
                        <p class="text-center font-weight-bold display-2 tag">Embrace the Joy <br>of Connection</p>
                        <div class="text-center">
                            <a href="index  .php" class="btn btn-lg btn-dark tag2">
                                Get started
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="sr-only"></span>
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>

            <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
                <span class="sr-only"></span>
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>

        <footer class="foot">

            <div class="footer-left">
                <img src="">

                <p class="footer-links">
                    <a href="#">Home</a>
                    |
                    <a href="#">About Us</a>
                    |
                    <a href="#">Contact</a>
                    |
                    <a href="#">Learn More</a>
                </p>

                <p class="rights">Copyright © 2023 <strong>ACLC College</strong> All rights reserved</p>
            </div>

            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Tacloban</span>
                        Philippines</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+63 90101010101</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="#">CompanionConnect2023@gmail.com</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="about">
                    <span>About the Project</span>
                    <strong>Companion Connect</strong> is Building Meaningful Connections. Find companionship, support, and shared interests. Connect with like-minded individuals. Reduce loneliness, foster genuine connections. Enhance your life.
                </p>
                <div class="footer-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>

                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

</html>