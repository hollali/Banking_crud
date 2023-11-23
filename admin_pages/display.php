<?php
include('../backend/connect.php');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $IdNum = $_POST['IdNum'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $tot = $_POST['tot'];

    move_uploaded_file($tmp_name, "../uploads/$image");
    $sql = "insert into `data`(username,mobile,IdNum,gender,email,amount,photo,tot)
    values('$username','$mobile','$IdNum','$gender','$email','$amount','$image','$tot')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<script>
    alert("Data Input Successful");
    window.location="./display.php";
    </script>';
    } else {
        die(mysqli_error($conn));
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Database For ADMIN</title>
    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css--->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../css/modal.css">
</head>

<body>
    <h1 class=" bg-dark text-light text-center w-100 z-1">ADMIN PANEL</h1>
    <div class="container">

        <!--form modal-->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="text-center">Add User</h3>
                <form id="addform" action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div>
                            <!--Username-->
                            <div class="form-group form-floating w-50 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><i class="fa-solid fa-user text-light"></i></span>
                                    </div>
                                    <input type="text" class="form-control border border-warning rounded-end-pill" placeholder="Enter your username" autocomplete="off" required="required" id="username" name="username">
                                </div>
                            </div>
                            <!--mobile-->
                            <div class="form-group w-50 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><i class="fa-solid fa-phone text-light"></i></span>
                                    </div>
                                    <input type="text" class="form-control border border-warning rounded-end-pill" placeholder="Enter Mobile Number" autocomplete="off" required="required" id="mobile" name="mobile">
                                </div>
                            </div>
                            <!--Id-->
                            <div class="form-group w-50 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><i class="fa fa-id-card text-light" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control border border-warning rounded-end-pill" placeholder="Enter National ID Number" autocomplete="off" required="required" id="IdNum" name="IdNum">
                                </div>
                            </div>
                            <!--Email-->
                            <div class="form-group w-50 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><i class="fa fa-envelope text-light" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="email" class="form-control border border-warning rounded-end-pill" placeholder="Enter Email" autocomplete="off" required="required" id="email" name="email">
                                </div>
                            </div>
                            <!--gender-->
                            <div class="form-group w-50 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><i class="fa fa-credit-card-alt text-light"></i></span>
                                    </div>
                                    <select name="gender" class="form-select w-50 m-auto  border border-warning rounded-end-pill">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <!--Amount-->
                            <div class="form-group w-50 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><i class="fa-solid fa-money-check text-light"></i></span>
                                    </div>
                                    <input type="text" class="form-control border border-warning rounded-end-pill" placeholder="Enter Amount" autocomplete="off" required="required" id="amount" name="amount">
                                </div>
                            </div>
                            <!--Photo-->
                            <div class="form-group w-50 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><i class="fa fa-camera text-light" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="file" class="form-control border border-warning rounded-end-pill" id="photo" name="photo">
                                </div>
                            </div>
                            <!--Transaction-->
                            <div class="form-group w-50 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><i class="fa fa-credit-card-alt text-light"></i></span>
                                    </div>
                                    <select name="tot" class="form-select w-50 m-auto  border border-warning rounded-end-pill">
                                        <option value="Saving">Saving</option>
                                        <option value="Loan">Loan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-8">
            <form method="post">
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text" class="form-control border border-primary rounded-start-pill text-center" placeholder="Search Data" name="search" autocomplete="off">
                    <button class="btn btn-dark" name="send"><i class="fa fa-search text-light" aria-hidden="true"></i></button>
                </div>
            </form>
            <div class="container my-2">
                <table class="table table-bordered border-success">
                    <?php
                    if (isset($_POST['send'])) {
                        $search = $_POST['search'];

                        $sql = "Select * from `data` where id like '%$search%' or username like '%$search%' or mobile='$search' or  gender ='$search' or tot like '%$search%'";
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                            if (mysqli_num_rows($result) > 0) {
                                echo '<thead class="table-dark">
                            <tr>
                                <th>N.o</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>';
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['id'];
                                    $cediSymbol = "\u{20B5}";
                                    echo '<tbody>
                                <tr>
                                <td><a href="../backend/search.php?data=' . $row['id'] . '"class="text-decoration-none">' . $row['id'] . '</a></td>
                                <td>' . $row['username'] . '</td>
                                <td>' . $row['mobile'] . '</td>
                                <td>' . $row['email'] . '</td>
                                <td>
                                <a href="./admin_view.php?viewid=' . $id . '"class="text-light text-decoration-none"><i class="fa fa-eye text-primary mx-2" aria-hidden="true"></i></a>
                                <a href="update.php?updateid=' . $id . '"class="text-light text-decoration-none"><i class="fa fa-pencil text-success mx-3" aria-hidden="true"></i></a>
                                <a href="../backend/delete.php?deleteid=' . $id . '"class="text-light text-decoration-none"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                                </td>
                                </tr>
                                </tbody>';
                                };
                            } else {
                                echo '<div class="alert alert-danger" role="alert">
                                <h2 class="">Data not Found !!</h2>
                                </div>';
                            }
                        }
                    }
                    ?>

                </table>
            </div>
        </div>
        <div class="col-4">
            <button class="btn btn-dark me-1" type="button" id="openModal"><i class="fa fa-user-plus" aria-hidden="true"></i>
            </button>
            <button onclick="window.print();" class="btn btn-success" type="button"><a href="" class="text-light"><i class="fa fa-print" aria-hidden="true">
                    </i></a></button>
        </div>
    </div>
    </div>
    <nav aria-label="breadcrumb" class="float-end mx-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item"><a href="../pages/admin_dashboard.php" class="text-decoration-none">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page" class="text-decoration-none">Client Data</li>
        </ol>
    </nav>
    <!--Table Content--->
    <table class="table table-bordered border-dark" id="usertable">
        <thead class="table-dark table ">
            <tr>
                <th>N.o</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Ghana Card</th>
                <th>email</th>
                <th>Amount</th>
                <th>Transactions</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "Select * from `data`";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $cediSymbol = "\u{20B5}";
                    $username = $row['username'];
                    $mobile = $row['mobile'];
                    $IdNum = $row['IdNum'];
                    $email = $row['email'];
                    $amount = $row['amount'];
                    $tot = $row['tot'];
                    echo '<tr>
                    <th scope ="row">' . $id . '</th>
                    <td>' . $username . '</td>
                    <td>' . $mobile . '</td>
                    <td>' . $IdNum . '</td>
                    <td>' . $email . '</td>
                    <td>' . $cediSymbol . '  ' . $amount . '</td>
                    <td>' . $tot . '</td>
                    <td>
                    <a href="./admin_view.php?viewid=' . $id . '"class="text-light text-decoration-none"><i class="fa fa-eye text-primary mx-2" aria-hidden="true"></i></a>
                    <a href="./update.php?updateid=' . $id . '"class="text-light text-decoration-none"><i class="fa fa-pencil text-success mx-3" aria-hidden="true"></i></a>
                    <a href="../backend/delete.php?deleteid=' . $id . '"class="text-light text-decoration-none"><i class="fa fa-trash text-danger mx-2" aria-hidden="true"></i></a>
                    </td>
                    </tr>';
                }
            }
            ?>
        </tbody>
    </table>
    <!--pagination-->
    <nav aria-label="Page navigation example" id="pagination">
        <!--<ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>--->
    </nav>
    <!--JS--->
    <script src="../script/index.js"></script>
    <script>
        document.getElementById("openModal").addEventListener("click", function() {

            document.getElementById("myModal").style.display = "block"
        });

        document.getElementsByClassName("close")[0].addEventListener("click", function() {

            document.getElementById("myModal").style.display = "none";
        });

        window.addEventListener("click", function(event) {
            if (event.target == document.getElementById("myModal")) {
                document.getElementById("myModal").style.display = "none";
            }
        });
    </script>
    <!--jquery--->
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
    <!--Bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>