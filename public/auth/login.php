<?php include "../../server/auth/login.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <!-- LOGIN -->
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Login</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap');

            * {
                padding: 0;
                margin: 0;
                box-sizing: 0;
            }

            body {
                background-color: #F4E7D6;
            }

            .row {
                background-color: white;
                border-radius: 30px;
            }

            img {
                border-top-left-radius: 30px;
                border-bottom-left-radius: 30px;
            }

            .btn1 {
                border: none;
                outline: none;
                height: 54px;
                width: 192px;
                background-color: #00303F;
                color: white;
                border-radius: 4px;
                font-weight: bold;
                display: block;
                margin-left: 150px;
                margin-bottom: 68px;


            }

            .btn1:hover {
                background-color: white;
                border: 1px solid;
                color: black;
            }

            .torq {
                background-color: #CAEFDB;
                padding-top: 92px;
                height: 600px;
            }

            .logo {
                text-size-adjust: 36px;
                padding-left: 49px;
                font-family: 'Nunito', sans-serif;
            }

            .form-row {
                padding-left: 49px;
            }

            p {
                padding-left: 49px;
                text-align: center;
                font-family: 'Nunito', sans-serif;
                width: auto;

            }

            .form-control {
                height: 52px;
                width: 466px;
                border-color: black;
            }

            a {
                color: #42A8C8;
            }

            section {
                padding-top: 82px;
            }
        </style>
    </head>

    <body>

        <section class="form my-4 mx-5">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <img src="../img/login1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 px-5 pt-5">
                        <div class="torq">
                            <h2 class="logo font-weight-bold py-3">LOGIN TO talaarawan</h2>

                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email" class="form-control my-3 p-4">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Password" class="form-control my-3 p-4">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <button type="submit" class="btn1 mt-3 mb-5" a href="#">LOGIN</button></a>
                                    </div>
                                </div>
                                <div class="other">
                                    <p><a href="#"> Forgot Password?</a></p>
                                    <p>Don't have an account? <a href="signup.html">Sign up now!</a></p>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    </html>