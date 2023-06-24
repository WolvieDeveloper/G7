<?php
include_once 'sql.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Register Form</title>

    <link rel="icon" type="image/x-icon" href="icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <style>
        @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            background-image: url("bac.jpg");
        }

        .container {

            margin-top: 5%;
            display: flex;
            justify-content: center;

        }

        .card {
            /* 
            margin-left: auto;
            margin-right: auto;*/
            width: 100%;
            background-color: #fff;
            border-radius: 10px;
            padding: 35px;
            box-shadow: 3px 2px 10px grey;
            text-align: auto;
        }

        .card h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;

        }

        .form-group {
            margin-bottom: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 60%;

        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .form-group input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            size: 10 margin-left: 50px;
        }

        .form-group input[type="submit"] {
            background-color: #89cff0;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            align-content: center;
            margin-top: 10px;
            width: 106%;

        }

        .form-group input[type="submit"]:hover {
            background-color: pink;
        }

        .switch-form {
            text-align: center;
            margin-top: 20px;
        }

        .switch-form a {
            color: grey;
            text-decoration: none;
        }

        .switch-form a:hover {
            color: #89cff0;
        }

        .register-form {
            display: none;
        }

        .register-form.show {
            display: block;
        }

        .register-form .form-group {
            margin-bottom: 10px;
        }

        .register-form .switch-form {
            margin-top: 10px;
        }

        .card {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .card:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            pointer-events: none;
            background-image: url(card.jpg);
        }

        .logo {

            padding-left: 35%;
            padding-top: 5%;
            transition: transform 0.3s;
        }

        .logo:hover {
            transform: scale(1.03);
        }

        .con {
            color: black;
            font: normal 60px 'Cookie', cursive;
            margin-top: 10px;
            margin-left: 20px;
            margin-right: 10px;
            transition: transform 0.3s;
            position: sticky;
        }

        .con:hover {
            cursor: default;
            transform: scale(1.05);

        }

        a {
            text-decoration: none;
            color: black;

        }

        a:hover {
            text-decoration: none;
            color: black;
        }

        ::-webkit-scrollbar {
            width: 1px;
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
            width: 10px;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        #sub {
            /* display: inline-block;
        padding: 15px 25px */
            font-size: 24px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
            width: 23%;
        }

        #sub:hover {
            background-color: #3e8e41
        }

        #sub:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        }

        .cen {
            width: 80%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .col-xl-2 {
            margin-left: 10%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="cen">
                <a href="homepage.php">
                    <h1>
                        Companion
                        <span style=" display: inline-block; color: #e0ac1c;">
                            <h2>s
                                Connect
                            </h2>
                        </span>
                    </h1>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="landingpage.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact me</a>
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
    <form action="config.php" method="POST">

        <div class="container">
            <div class="card">
                <div id="login-form" class="form-group">
                    <h2>REGISTER</h2>

                    <div class="text-center">
                        <div class="cen">
                            <div class="row">
                                <div class="col-xl-2">
                                    <input type="text" id="username" name="usn" size="15" required>
                                    <label>User Name</label>
                                </div>
                                <div class="col-xl-2">
                                    <input type="password" id="password" name="passwd" size="15" required>
                                    <label>Password</label>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-xl-2">
                                    <input type="text" id="fn" name="fname" size="15" required>
                                    <label>First Name</label>
                                </div>
                                <div class="col-xl-2">
                                    <input type="text" id="ln" name="lname" size="15" margin-left->
                                    <label>Last Name</label>
                                </div>
                                <div class="col-xl-2">
                                    <input type="date" id="date" name="bday" size="15" required>
                                    <label>Birth Date</label>

                                </div>
                                <div class="col-xl-2">
                                    <input type="text" id="Email" name="email" size="15" required>
                                    <label>Email</label>
                                </div>
                                <div class="col-xl-2">
                                    <input type="text" id="number" size="15" name="cnumber" maxlength="11" required>
                                    <label>Contact Number</label>

                                </div>
                                <div class="col-xl-2">
                                    <select class="form-select" name="gdder" id="gddr">
                                        <option value="" hidden selected disabled>Choose here</option>
                                        <?php

                                        $query = "SELECT * FROM `gender` WHERE 1";

                                        $result = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['id'];
                                            $data = $row['gname'];
                                            echo "<option value='$id'>$data</option>";
                                        }

                                        ?>
                                    </select>
                                    <label for="gddr">Gender</label>
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-xl-2">
                                    <input type="text" id="str" name="st" size="15" required>
                                    <label>Street</label>
                                </div>
                                <div class="col-xl-2">
                                    <input type="text" id="brgy" name="brgy" size="15" required>
                                    <label>Barangay</label>
                                </div>
                                <div class="col-xl-2">


                                    <select class="form-select" name="city" id="cars">
                                        <option value="" hidden selected disabled>Choose here</option>
                                        <?php

                                        $query = "SELECT * FROM `city` WHERE 1";

                                        $result = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['id'];
                                            $data = $row['cname'];
                                            echo "<option value='$id'>$data</option>";
                                        }

                                        ?>
                                    </select>
                                    <label for="City">City</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-2">


                                    <select class="form-select" name="prv" id="cars">
                                        <option value="" hidden selected disabled>Choose here</option>
                                        <?php

                                        $query = "SELECT * FROM `province` WHERE 1";

                                        $result = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['id'];
                                            $data = $row['pname'];
                                            echo "<option value='$id'>$data</option>";
                                        }

                                        ?>
                                    </select>
                                    <label for="prv">Province</label>
                                </div>
                                <div class="col-xl-2">
                                    <input type="text" id="zip" name="zpc" size="15" required>
                                    <label>Postal / Zip Code</label>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="button" name="reg" value="Submit" id="sub">
                    </div>
                </div>
            </div>
        </div>





        <script>
            function showRegisterForm() {
                document.getElementById("login-form").classList.remove("show");
                document.getElementById("register-form").classList.add("show");
            }

            function showLoginForm() {
                document.getElementById("login-form").classList.add("show");
                document.getElementById("register-form").classList.remove("show");
            }
        </script>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>


</html>