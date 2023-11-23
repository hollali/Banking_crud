<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Surge</title>
    <link rel="stylesheet" href="./css/index.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <ul class="menu">
            <li class="logo"><a href="#">Social Surge</a></li>
            <li class="item"><a href="#">Home</a></li>
            <li class="item"><a href="#">About</a></li>
            <li class="item"><a href="#">Services</a></li>
            </li>
            <li class="item button"><a href="./pages/admin_login.php">Admin</a></li>
            <li class="item button secondary"><a href="./pages/staff_login.php">Staff</a></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    </nav>
    <script>
        $(function() {
            $(".toggle").on("click", function() {
                if ($(".item").hasClass("active")) {
                    $(".item").removeClass("active");
                } else {
                    $(".item").addClass("active");
                }
            });
        });
    </script>
</body>

</html>