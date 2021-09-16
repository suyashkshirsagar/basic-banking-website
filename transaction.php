<?php
include 'connect.php';
$select = "SELECT * FROM users";
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
    <title>the Sparks Foundation Bank</title>
    <style>
        .text-center {
            background: #031321;
            margin-top: 50px;
            color: #f321c6;

        }

        .btn {
            position: relative;
            display: inline-block;
            padding: 10px 10px;
            width: 100px;
            /* margin-left: 3px; */

            color: #f321c6;
            text-transform: capitalize;
            letter-spacing: 2px;
            text-decoration: none;
            font-size: 15px;
            overflow: hidden;
            transition: 0.5s;
            background: #031321;
        }

        .btn:hover {
            color: #255784;
            background: yellow;
            box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
            text-decoration: underline;
            text-shadow: #f390dd;

        }

        .container {
            background-color: #e8838396;
        }

        .table {
            /* background-color: skyblue; */
            border: 2px solid black;

        }

        tbody {
            border: 2px solid black;
            box-shadow: 2px 6px 3px 3px;
            border-radius: 10px;
        }


        tr {
            border: 2px solid black;
            font-size: 15px;

        }

        tr:nth-child(2n+1) {
            background-color: #2bb4ec;


        }

        tr:nth-child(2n+2) {
            background-color: white;

        }

        /* thead{
            border-bottom: 2px solid black;
            background-color: slateblue;
            font-size: 20px; */



        th {
            background-color: #f747bc;
            padding: 10px 10px;
            font-size: 20px;

        }
    </style>
</head>

<!-- <body style="background-color : red; -->
<?php
// include 'header.php';
?>
<div class=" container">
    <div class="row">

        <h2 class="text-center">Transfer Money</h2>
        <br>

        <div class="col-md-offset-2 col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Balance</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody class="body">
                    <?php
                    while ($row = mysqli_fetch_assoc($select_query)) {
                    ?>
                        <tr style="color : black; ">
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['balance'] ?></td>
                            <td><a href="transfer.php?id= <?php echo $row['id']; ?>"> <button type="button" class="btn">Tranfer</button></a></td>
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