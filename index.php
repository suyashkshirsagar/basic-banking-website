<?php
include "header.php";
include "navbar.php";


?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Spark Foundation Bank</title>
    <link rel="icon" href="/images/tsf.png" type="image/x-icon" />
    <link rel="stylesheet" href="home_style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">Save Today For Tomorrow.</h1>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-1">

                <div class="flex-item-login">
                    <h2 style="text-align:center;">Welcome</h2>
                </div>

                <div class="flex-item">
                    <form method="get" action="transaction.php">
                        <button type="submit" style="float:right;width:470px;">Money Transfer</button>
                    </form>
                </div>

                <div class="flex-item">
                    <form method="get" action="history.php">
                        <button type="submit" style="float: right;width:475px;">Transaction History</button>
                    </form>
                </div>


            </div>
            </form>
        </div>
    </div>

    </div>
    </br>
    </br>
    <div class="foot">
        <footer class="bg-light text-center text-lg-start">
        </footer>
</body>

</html>