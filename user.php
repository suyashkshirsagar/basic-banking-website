<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Spark Foundation Bank</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .home1 {
            width: 77px;
            height: 35px;
            margin: auto;
            padding-top: 6px;
            padding-bottom: 6px;
            padding-left: 3px;
            padding-right: 3px;
            color: white;
            background-color: #d9534f;
            position: relative;
            display: inline-block;
            border-radius: 4px;
            text-align: center;
            border-color: 4px solid blueviolet;


        }
    </style>
</head>

<body style="background-color:#4d4db2;">
    <?php
    // include 'header.php';
    ?>
    <div class="container ">
        <div class="row ">
            <br>
            <h2 class="sign text-center" style="margin-top: 100px; color: red;">CREATE</h2>
            <br>
            <div class="col-sm-offset-4 col-sm-6 col-md-5 ">
                <form method="POST" action="user_script.php">
                    <div class="form-group">
                        <label for="name" style="color: orange;">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" style="color: orange;">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="balance" style="color: orange;">Balance</label>
                        <input type="number" class="form-control" step="0.01" name="balance" placeholder="Balance" required>
                    </div>
                    <button class="btn btn-danger">Submit</button>
                    <div class="home1">
                        <a href="./home.php" style="color: white;">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php


    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>