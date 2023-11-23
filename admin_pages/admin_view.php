<?php
include('../backend/connect.php');
$id = $_GET['viewid'];
$sql = "Select * from `data` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
$mobile = $row['mobile'];
$gender = $row['gender'];
$IdNum = $row['IdNum'];
$email = $row['email'];
$amount = $row['amount'];
$image = $row['photo'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    $id = $_GET['viewid'];

    $sql = "Select * from `data` where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $cediSymbol = "\u{20B5}";
        echo '<div class="container">
        <div class="jumbotron">
            <div class="grid-container">
            <div class="image-container">
                <img src="../uploads/' . $row['photo'] . '">
            </div>
        <div class="item item1">
        <h2 class="text-success">' . $row['username'] . '</h2>
        <hr class="my-2">
        <h5 class="lead">' . $row['mobile'] . '</h5>
        <hr class="my-2">
        <h3 class="text-primary">' . $row['email'] . '</h3>
        <hr class="my-2">
        <h5 class="text-success">' . $row['gender'] . '</h5>
        <hr class="my-2">
        <h5 class="lead">' . $row['IdNum'] . '</h5>
        <hr class="my-2">
        <h3 class="text-danger">' . $cediSymbol . '' . $row['amount'] . '</h3>
        <hr class="my-2">
        <h4 class="text-dark">' . $row['tot'] . '</h4>
        <hr class="my-2">
        </div>
    </div>
            </div>
    </div>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .jumbotron {
            background-color: #f8f9fa;
            padding: 50px;
            text-align: center;
        }

        .jumbotron h1 {
            font-size: 36px;
            margin-top: 0;
        }

        .jumbotron p {
            font-size: 18px;
        }

        .jumbotron button {
            background-color: #007bff;
            color: #fff;
            font-size: 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .image-container img{
            width: 75mm;
            height: 75mm;
            text-align: center;
            display: block;
        }

        .grid-container{
            display:grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap :20px;
            max-width :800px;
            margin: 0 auto;
        }

        .item{
            padding:5px;
            text-align:center;
        }

        .item{
            grid-column: 1 / 3;
        }

        .item{
            grid-column:  1 / 2;
        }

        .item{
            grid-column: 2 / 4;
        }
    </style>';
    }
    ?>


    <div class="my-1 text-center">
        <button onclick="window.print();" class="btn btn-success" type="button"><a href="" class="text-light"><i class="fa fa-print" aria-hidden="true"></i></a></button>
    </div>

</body>

</html>