<?php
include 'connect.php';
$select = "SELECT * FROM transfer";
$select_query = mysqli_query($con, $select);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>The Spark Foundation Bank</title>
    <style>
        .text-center {
            color: yellow;
            background-color: black;
            margin-top: 50px;
            padding: 15px 15px;

        }


        tr {
            border: 2px solid black;
            font-size: 18px;

        }

        tr:nth-child(2n+1) {
            background-color: #2bb4ec;


        }

        tr:nth-child(2n+2) {
            background-color: white;
        }

        .table {
            /* background-color: skyblue; */
            border: 2px solid black;
        }

        thead {
            background-color: #f747bc;
            padding: 10px 10px;
            font-size: 20px;
        }
    </style>
</head>

<body style="background-color: #ef90c6;">
    <?php
    include 'header.php';
    ?>
    <div class="container">
        <div class="row">
            <h2 class="text-center">History</h2>
            <br>

            <div class="col-md-offset-2 col-md-8">
                <table class="table" style="background-color: #ff4d94;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($select_query)) {
                        ?>
                            <tr style="color:black">
                                <td><?php echo $row['sid'] ?></td>
                                <td><?php echo $row['sender'] ?></td>
                                <td><?php echo $row['receiver'] ?></td>
                                <td><?php echo $row['amount'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>