<!DOCTYPE html>
<html>

<head>
    <title>Login</title>

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
            background-image: url("bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            margin-top: 5.5%;
        }

        .card {
            width: 350px;
            background-color: #fff;
            border-radius: 10px;
            padding: 35px;
            box-shadow: 3px 2px 10px grey;
        }

        .card h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;

        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
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

        .card:hover {
            transform: scale(1.05);
        }

        .logo {

            padding-left: 35%;
            padding-top: 5%;
            transition: transform 0.3s;
        }

        .logo:hover {
            transform: scale(1.03);
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

        .nav_top {
            box-shadow: 3px 2px 10px grey;
        }

        #login {
            display: inline-block;
            padding: 15px 25px;
            font-size: 20px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #836953;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
            width: 35%;
        }

        #login:active {
            background-color: #e0ac1c;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        img {
            width: 130px;
        }
    </style>
</head>

<body>

    <form action="config.php" method="POST">

        <center>
            <div class="container">
                <div class="card">
                    <div id="login-form" class="form-group">
                        <div class="con">
                            <a href="homepage.php">
                                <img src="logo.png">
                            </a>
                        </div>

                        <h2 id="login2">Login</h2>

                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required><br><br>

                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required><br>

                        <input type="submit" name="login" value="Login " id="login">
                        <div>
                            <br>Don't have an account? <a href="reg.php" onclick="d.showModal()">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </center>



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