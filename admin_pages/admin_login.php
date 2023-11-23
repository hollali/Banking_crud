<?php
$username = "";
$password = "";

$admin = array("username" => "Admin", "password" => "0000");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (($admin['username'] == $username) && ($admin['password'] == $password)) {
        echo '<script>
        alert("Access Granted !!!");
        window.location="../admin_pages/admin_dashboard.php";
        </script>';
    } else {
        echo '<script>
        alert("Access denied !!!");
        window.location="../admin_pages/admin_login.php";
        </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/admin_login.css">
</head>

<body>
    <div class="container">
        <h2>ADMIN LOGIN</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="input-container">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" required="required" id="username" name="username" autocomplete="off">
            </div>
            <div class="input-container">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" required="required" id="password" name="password" autocomplete="off">
            </div>
            <button type="submit" value="submit" name="submit" id="submit">Login</button>
        </form>
    </div>
</body>

</html>