<?php
include('../backend/connect.php');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $amount = $_POST['amount'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];


    move_uploaded_file($tmp_name, "../update/$image");
    $sql = "insert into `employee`(username,email,mobile,gender,address,amount,photo)
    values('$username','$email','$mobile','$gender','$address','$amount','$image')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<script>
        alert("Input Successful");
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Database</title>
    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css--->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../css/modal.css">
    <link rel="stylesheet" href="../css/print.css">
</head>

<body>
    <h1 class=" bg-dark text-light text-center">EMPLOYEE DATABASE</h1>
    <div class="container">

        <!--form modal-->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h3 class="text-center">Employee Credentials Form</h3>
                <form id="addform" action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div>
                            <!--Username-->
                            <div class="form-group w-50 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><i class="fa-solid fa-user text-light"></i></span>
                                    </div>
                                    <input type="text" class="form-control border border-warning rounded-end-pill" placeholder="Enter Employee Name" autocomplete="off" required="required" id="username" name="username">
                                </div>
                            </div>
                            <!--email-->
                            <div class="form-group w-50 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><i class="fa-solid fa-envelope text-light"></i></span>
                                    </div>
                                    <input type="email" class="form-control  border border-warning rounded-end-pill" placeholder="Enter Employee Email" autocomplete="off" required="required" id="email" name="email">
                                </div>
                            </div>
                            <!--contact-->
                            <div class="form-group w-50 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><i class="fa-solid fa-phone text-light"></i></span>
                                    </div>
                                    <input type="text" class="form-control border border-warning rounded-end-pill" placeholder="Enter Employee Contact" autocomplete="off" required="required" id="mobile" name="mobile" maxlength="20">
                                </div>
                            </div>
                            <!--gender-->
                            <div class="form-group w-50 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><i class="fa fa-credit-card-alt text-light"></i></span>
                                    </div>
                                    <select name="gender" class="form-select w-50 m-auto  border border-warning rounded-end-pill">
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                        <option value="other">other</option>
                                    </select>
                                </div>
                            </div>
                            <!--Resident-->
                            <div class="form-group w-50 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><i class="fa fa-home text-light" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control border border-warning rounded-end-pill" placeholder="Enter Employee Place Of Residence" autocomplete="off" required="required" id="address" name="address">
                                </div>
                            </div>
                            <!--Amount-->
                            <div class="form-group w-50 text-center my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><i class="fa-solid fa-money-check text-light"></i></span>
                                    </div>
                                    <input type="text" class="form-control border border-warning rounded-end-pill" placeholder="Enter Amount" autocomplete="off" required="required" id="amount" name="amount">
                                </div>
                            </div>
                            <!--photo-->
                            <div class="form-group w-50 my-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark"><i class="fa fa-camera text-light" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="file" class="form-control border border-warning rounded-end-pill" placeholder="" autocomplete="off" required="required" id="photo" name="photo">
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
                    <input type="text" class="form-control  border border-success rounded-start-pill text-center" placeholder="Search Data" name="look" autocomplete="off">
                    <button class="btn btn-dark" name="send"><i class="fa fa-search text-light" aria-hidden="true"></i></button>
                    <div class="container my-2">
                        <table class="table table-bordered border-success">
                            <?php
                            if (isset($_POST['send'])) {
                                $look = $_POST['look'];

                                $sql = "Select * from `employee` where id like '%$look%' or username like '%$look%'or mobile='$look' or email like '%$look%'or  gender ='$look' or address like '%$look%'";
                                $result = mysqli_query($con, $sql);
                                if ($result) {
                                    if (mysqli_num_rows($result) > 0) {
                                        echo '<thead class="table-dark">
                            <tr>
                                <th>N.o</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Residence</th>
                                <th>Salary</th>
                                <th>Actions</th>
                            </tr>
                        </thead>';
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['id'];
                                            $cediSymbol = "\u{20B5}";
                                            echo '<tbody>
                                <tr>
                                <td><a href="./look.php?data=' . $row['id'] . '"class="text-decoration-none">' . $row['id'] . '</a></td>
                                <td>' . $row['username'] . '</td>
                                <td>' . $row['email'] . '</td>
                                <td>' . $row['mobile'] . '</td>
                                <td>' . $row['address'] . '</td>
                                <td>' . $cediSymbol . '' . $row['amount'] . '</td>
                                <td>
                                <a href="./employee_view.php?viewid=' . $id . '"class="text-light text-decoration-none"><i class="fa fa-eye text-primary mx-2" aria-hidden="true"></i></a>
                                <a href="edit.php?updateid=' . $id . '"class="text-light text-decoration-none"><i class="fa fa-pencil text-success mx-2" aria-hidden="true"></i></a>
                                <a href="erase.php?deleteid=' . $id . '"class="text-light text-decoration-none"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                                </td>
                                </tr>
                                </tbody>';
                                        };
                                    } else {
                                        echo '
                                        <div class="alert alert-danger" role="alert">
                                        <h2 class="">Data not Found !!</h2>
                                        </div>';
                                    }
                                }
                            }
                            ?>

                        </table>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-4">
            <button class="btn btn-dark me-2" type="button" id="openModal"><i class="fa fa-user-plus" aria-hidden="true"></i>
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
            <li class="breadcrumb-item active" aria-current="page" class="text-decoration-none">Employee Data</li>
        </ol>
    </nav>
    <!--Table Content--->
    <table class="table table-bordered border-dark" id="usertable">
        <thead class="table-dark">
            <tr>
                <th>N.o</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>Resident</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "Select * from `employee`";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $cediSymbol = "\u{20B5}";
                    $username = $row['username'];
                    $email = $row['email'];
                    $mobile = $row['mobile'];
                    $gender = $row['gender'];
                    $address = $row['address'];
                    $amount = $row['amount'];
                    echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $username . '</td>
                    <td>' . $email . '</td>
                    <td>' . $mobile . '</td>
                    <td>' . $gender . '</td>
                    <td>' . $address . '</td>
                    <td>' . $cediSymbol . ' ' . $amount . '</td>
                    <td>
                    <a href="../admin_pages/employee_view.php?viewid=' . $id . '"class="text-light text-decoration-none"><i class="fa fa-eye text-primary mx-2" aria-hidden="true"></i></a>
                    <a href="../admin_pages/employee_update.php?updateid=' . $id . '"class="text-light text-decoration-none"><i class="fa fa-pencil text-success mx-3" aria-hidden="true"></i></a>
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
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
    <!--JS--->
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