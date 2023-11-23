<?php
include('../backend/connect.php');
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `data` where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:../staff_pages/clients.php');
    } else {
        die(mysqli_error($conn));
    }
}
