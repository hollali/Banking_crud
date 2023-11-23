<?php
include('../backend/connect.php');
$id = $_GET['updateid'];
$sql = "Select * from `employee` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
$mobile = $row['mobile'];
$email = $row['email'];
$address = $row['address'];
$amount = $row['amount'];
$image = $row['photo'];

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $amount = $_POST['amount'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];

    move_uploaded_file($tmp_name, "../update/$image");
    $sql = "update `employee` set id=$id,username='$username',mobile='$mobile',email='$email',address='$address',amount='$amount',photo='$image'
    where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<script>
        alert("Data Updated Successfully");
        window.location="./employee.php";
        </script>';
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Update</title>
    <!---CSS File--->
    <link rel="stylesheet" href="../css/form.css" />
</head>

<body>
    <section class="container">
        <header>Update Form</header>
        <form action="#" method="POST" enctype="multipart/form-data" class="form">
            <div class="input-box">
                <label>Full Name</label>
                <input type="text" placeholder="Enter full name" name="username" autocomplete="off" value="<?php echo $username ?>" required="required" />
            </div>

            <div class="input-box">
                <label>Email Address</label>
                <input type="email" placeholder="Enter email address" name="email" autocomplete="off" value="<?php echo $email ?>" required="required" />
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="number" placeholder="Enter phone number" name="mobile" autocomplete="off" value="<?php echo $mobile ?>" required="required" />
                </div>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>Address</label>
                    <input type="text" placeholder="Enter Address" name="address" autocomplete="off" value="<?php echo $address ?>" required="required" />
                </div>
            </div>
            <div class="input-box address">
                <input type="text" placeholder="Enter Amount" name="amount" value="<?php echo $amount ?>" autocomplete="off" required="required" />
                <label>Photo</label>
                <input type="file" name="photo" value="<?php $image ?>" />
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </section>
    <style>

    </style>
</body>

</html>