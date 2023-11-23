<?php
include('../backend/connect.php');
$id = $_GET['updateid'];
$sql = "Select * from `data` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
$mobile = $row['mobile'];
$IdNum = $row['IdNum'];
$email = $row['email'];
$amount = $row['amount'];
$image = $row['photo'];

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $IdNum = $_POST['IdNum'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];

    move_uploaded_file($tmp_name, "../uploads/$image");
    $sql = "update `data` set id=$id,username='$username',mobile='$mobile',IdNum='$IdNum',email='$email',amount='$amount',photo='$image'
    where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<script>
        alert("Data Updated Successfully");
        window.location="./display.php";
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
    <title>Update Form</title>
    <!---CSS File--->
    <link rel="stylesheet" href="../css/form.css" />
</head>

<body>
    <section class="container">
        <header>Update Form</header>
        <form action="#" method="POST" enctype="multipart/form-data" class="form">
            <div class="input-box">
                <label>Full Name</label>
                <input type="text" name="username" autocomplete="off" value="<?php echo $username ?>" required="required" />
            </div>

            <div class="input-box">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" value="<?php echo $mobile ?>" required="required" />
            </div>

            <div class="input-box">
                <label>Identification Number</label>
                <input type="text" name="IdNum" autocomplete="off" value="<?php echo $IdNum ?>" required="required" />
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Email</label>
                    <input type="email" name="email" autocomplete="off" value="<?php echo $email ?>" required="required" />
                </div>
            </div>
            <div class="input-box address">
                <label>Salary</label>
                <input type="text" name="amount" value="<?php echo $amount ?>" autocomplete="off" required="required" />
            </div>
            <div class="input-box">
                <label>Photo</label>
                <input type="file" name="photo" autocomplete="off" value="<?php echo $image ?>" />
            </div>
            <button type="submit" name="submit">Update</button>
        </form>
    </section>
    <style>

    </style>
</body>

</html>