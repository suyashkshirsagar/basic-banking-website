<?php
include "header.php";
// include "navbar.php";


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .centerdiv {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100%; */
            background: url("https://wallpapercave.com/wp/wp2533041.jpg") no-repeat center center fixed;
            background-size: cover;
            /* background-color: brown; */
        }

        a {
            height: 100px;
            width: 100px;
            background-color: #f5f6fa;
            border-radius: 50px;
            text-align: center;
            margin: 10px;
            box-shadow: 2px 6px 3px 3px;
            line-height: 120px;
        }

        a i {
            transition: all 0.3s linear;
        }

        a:hover i {
            transform: scale(1.4);
        }

        .fa-instagram {
            color: #e84393;
        }

        .fa-twitter {
            color: #0097e6;
        }

        .fa-linkedin {
            color: #0097e6;
        }
    </style>
</head>

<body>
    <div class="centerdiv">
        <a href="https://www.facebook.com/thesparksfoundation.info/" target="_blank">
            <i class=" fa fa-3x  fa-facebook"> </i>
        </a>

        <a href="https://www.instagram.com/mysparkfdn/" target="_blank">
            <i class="fa fa-3x fa-instagram"> </i>
        </a>

        <a href="https://in.linkedin.com/company/the-sparks-foundation" target="_blank">
            <i class="fa  fa-3x fa-linkedin"> </i>
        </a>

        <a href="https://twitter.com/SPARKfoundation" target="_blank">
            <i class="fa  fa-3x fa-twitter"> </i>
        </a>
    </div>

</body>

</html>